<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagesRequest;
use App\Models\Languages;
use App\Models\Page_properties;
use App\Models\Pages;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Pages::where('parent_page_id', null)->with('allChild')->get();



//        foreach ($model->allChild as $page){
//            echo $page->id . '(<br>';
//            foreach ($page->child as $child) {
//                echo '-'.$child->id . '(<br>';
//                if($child->child) {
//                    foreach ($child->child as $sub_child) {
//                        echo '--'.$sub_child->id . '<br>';
//                    }
//                }
//                echo ')';
//            }
//            echo ')';
//        }
//        dd($model);
//        $model = Pages::with()->all();

        return view('admin.pages.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Pages::all();
        $languages = Languages::enabled()->get();
        $model = new Pages;

        return view('admin.pages.create', compact('pages', 'languages', 'model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
//    public function store(StorePagesRequest $request)
    public function store(Request $request)
    {
        $data = $request->all();

        if(
            $request->hasFile('image')
            && $request->file('image')->isValid()
        ) {
            $imageURL = request()->file('image')->store('pages');
            $path_ar = explode('/', $imageURL);
            $data['image_path'] = end($path_ar);
            Image::make(public_path('uploads/pages/') . $data['image_path'])
                ->resize(320, 240)
                ->save(public_path('uploads/pages/'). '/thumbs/'. $data['image_path']);
        }

        $rules = (new StorePagesRequest)->rules();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect('admin/pages/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $page = Pages::create($data);
            foreach ($data['properties'] as $lang => $prop){
                if(isset($prop['enabled'])) {
                    $prop['enabled'] = true;
                    $prop['page_id'] = $page->id;
                    $prop['lang_id'] = Languages::where('iso', $lang)->first()->id;

                    Page_properties::create($prop);
                }
            }

            return redirect('admin/pages');
        }
    }

    /**
     * Display the specified resource.
     *
    //     * @param  \App\Models\Pages  $pages
     *
     * @return \Illuminate\Http\Response
     */
//    public function show(Request $request)
    public function show($request, $alias = '/')
    {
//        dd($alias);
        $model = Page_properties::with('page')->first();
//        dd($model);
//        if($model = Page_properties::where('alias', $alias)->with('page')->first()) {
//dd($model);
            return view('client.page.content', compact('model'));
//        } else {
//            abort(404);
//        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Pages::with('properties')->find($id);
        $pages = Pages::all();
        $languages = Languages::orderBy('enabled', 'DESC')->get();

        return view('admin.pages.update', compact('model', 'pages', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $page = Pages::findOrFail($id);
        $data = $request->all();
        $rules = (new StorePagesRequest)->rules();

        if(
            $request->hasFile('image')
            && $request->file('image')->isValid()
        ) {
            $imageURL = request()->file('image')->store('pages');
            $path_ar = explode('/', $imageURL);
            $data['image_path'] = end($path_ar);
            Image::make(public_path('uploads/pages/') . $data['image_path'])
                ->resize(320, 240)
                ->save(public_path('uploads/pages/') . '/thumbs/'. $data['image_path']);

//            Remove old images
            Storage::delete('pages/'. $page->image_path);
            Storage::delete('pages/thumbs/'. $page->image_path);

        } else {
            unset($rules['image'], $rules['image_path']);
        }

        foreach ($page->properties as $prop) {
            $rules['properties.*.alias'] = 'nullable|string|max:255|unique:page_properties,alias,' . $prop->id;
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect(route('admin.pages.edit', ['id' => $page->id]))
                ->withErrors($validator)
                ->withInput();
        } else {

            $page->update($data);
            foreach ($data['properties'] as $lang => $prop){
                if(isset($prop['enabled'])) {
                    $lang_id = Languages::where('iso', $lang)->first()->id;

                    $page_property = $page->property($lang_id);
                    if($page_property) {
                        $page_property->update($prop);
                    } else {
                        $prop['enabled'] = true;
                        $prop['page_id'] = $page->id;
                        $prop['lang_id'] = $lang_id;

                        Page_properties::create($prop);
                    }
                }
            }
            return redirect('admin/pages');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $pages)
    {
        //
    }
}
