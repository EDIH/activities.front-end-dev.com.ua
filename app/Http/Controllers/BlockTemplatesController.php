<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlockTemplateAttributesRequest;
use App\Http\Requests\StoreBlockTemplatesRequest;
use App\Models\Block_option_content_translations;
use App\Models\Block_template_attributes;
use App\Models\Block_templates;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use ZanySoft\Zip\Zip;

class BlockTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.block_templates.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.block_templates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->file('attribute')['image']['default_value'][0]->isValid());
//        dd($request);
        $data = $request->all();

        if(
            $request->hasFile('image')
            && $request->file('image')->isValid()
        ) {
            $imageURL = request()->file('image')->store('block_templates');
            $path_ar = explode('/', $imageURL);
            $data['image_path'] = end($path_ar);
            Image::make(public_path('uploads/block_templates/') . $data['image_path'])
                ->resize(320, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/block_templates/'). '/thumbs/'. $data['image_path']);
        }

        $rules = (new StoreBlockTemplatesRequest)->rules();
        $data['enabled'] = isset($data['enabled']);
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect(route('admin.block_templates.create'))
                ->withErrors($validator)
                ->withInput();
        } else {
            $block_template = Block_templates::create($data);
            $attribute_rule = (new StoreBlockTemplateAttributesRequest())->rules();
            foreach($data['attribute'] as $type => $values) {
//                if(Arr::exists($values, 'default_value')){
                foreach ($values['name'] as $id => $value) {
                    if($value){
                        $attribute_data = [
                            'name' => $value,
                            'key' => $values['key'][$id],
                            'type' => array_flip(Block_template_attributes::TYPE_LIST)[$type]
                        ];
                        if($type == 'image') {

                            $image = $request->file('attribute')['image']['default_value'][$id];
                            if($image->isValid()){
                                $imageURL = $image->store('block_template_attributes');
                                $path_ar = explode('/', $imageURL);
                                $attribute_data['default_value'] = end($path_ar);
//                            $data['option']['image'][$key] = end($path_ar);
//                            Image::make(public_path('uploads/content_options/') . end($path_ar))
//                                ->resize(320, 240)
//                                ->save(public_path('uploads/content_options/'). 'thumbs/'. end($path_ar));
                            }
                        } else {
                            $attribute_data['default_value'] = $values['default_value'][$id];
                        }
                        $validator = Validator::make($attribute_data, $attribute_rule);
                        if(!$validator->fails()) {
                            $block_template->attrs()->create($attribute_data);
                        }
                    }
//                    }
                }
            }

            return redirect(route('admin.block_templates.list'));
        }
    }

    /**
     * Load zip file
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function load(Request $request)
    {

        if(
            $request->hasFile('template')
            && $request->file('template')->isValid()
        ) {
            $template_name = pathinfo($request->file('template')->getClientOriginalName(), PATHINFO_FILENAME);
            $zip = Zip::open($request->file('template'));
            $zip->extract(public_path('uploads/templates/').$template_name);

            $block_template_key = explode(';', file(public_path('uploads/templates/').$template_name.'/block_templates.csv')[0]);
            $block_template_values = explode(';', file(public_path('uploads/templates/').$template_name.'/block_templates.csv')[1]);
            $block_template_data = array_combine($block_template_key, $block_template_values);

            Storage::move(
                'templates/'.$template_name.'/'.$block_template_data['image_path'],
                'block_templates/'.$block_template_data['image_path']);

            $block_template = Block_templates::create([
                'image_path' => $block_template_data['image_path'],
                'path' => $block_template_data['path'],
                'name' => $block_template_data['name'],
                'enabled' => (int) $block_template_data['enabled'],
            ]);

            $block_template_attribute_file = file(public_path('uploads/templates/').$template_name.'/block_template_attributes.csv');
            $block_template_attribute_key = explode(';', $block_template_attribute_file[0]);
            $block_template_data = array_slice($block_template_attribute_file,1);

            foreach($block_template_data as $str){
                $block_template_attribute_value = explode(';', $str);
                $block_template_attribute_data = array_combine($block_template_attribute_key, $block_template_attribute_value);

                if(Block_template_attributes::TYPE_LIST[(int)$block_template_attribute_data['type']] == 'image'){
                    Storage::move(
                        'templates/'.$template_name.'/'.$block_template_attribute_data['default_value'],
                        'block_template_attributes/'.$block_template_attribute_data['default_value']);
                }

                $attribute_data = [
                    'name' => $block_template_attribute_data['name'],
                    'default_value' => $block_template_attribute_data['default_value'],
                    'type' => (int)$block_template_attribute_data['type']
                ];
                $block_template->attributes()->create($attribute_data);
            }
        }

        return response()->json([
            'status' => true,
            'toasts' => [
                'title' => 'Шаблон "'.$template_name.'" Успешно создан',
                'body' => 'Созданный шаблон можно использовать для создания блоков на страницах.',
                'class' => 'bg-primary'
            ],
        ]);
//        die;
//        dd($attrs);
//        $block_template = array_combine(explode(';',$data[0][0]), explode(';',$data[1][0]));
//        dd($block_template);
//
//        $data = $request->all();
//
//        if(
//            $request->hasFile('template')
//            && $request->file('template')->isValid()
//        ) {
//            $imageURL = request()->file('image')->store('block_templates');
//            $path_ar = explode('/', $imageURL);
//            $data['image_path'] = end($path_ar);
//            Image::make(public_path('uploads/block_templates/') . $data['image_path'])
//                ->resize(320, 240)
//                ->save(public_path('uploads/block_templates/'). '/thumbs/'. $data['image_path']);
//        }
//
//        $rules = (new StoreBlockTemplatesRequest)->rules();
//        $data['enabled'] = isset($data['enabled']);
//        $validator = Validator::make($data, $rules);
//        if ($validator->fails()) {
//            return redirect(route('admin.block_templates.create'))
//                ->withErrors($validator)
//                ->withInput();
//        } else {
//            Block_templates::create($data);
//
//            return redirect(route('admin.block_templates.list'));
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Block_templates  $block_templates
     * @return \Illuminate\Http\Response
     */
    public function show(Block_templates $block_templates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Block_templates  $block_template
     * @return \Illuminate\Http\Response
     */
    public function edit(Block_templates $block_template)
    {
        return view('admin.block_templates.update', compact('block_template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Block_templates  $block_template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block_templates $block_template)
    {
        $data = $request->all();
        $rules = (new StoreBlockTemplatesRequest)->rules();

        if(
            $request->hasFile('image')
            && $request->file('image')->isValid()
        ) {
            $imageURL = request()->file('image')->store('block_templates');

            $path_ar = explode('/', $imageURL);
            $data['image_path'] = end($path_ar);
            Image::make(public_path('uploads/block_templates/') . $data['image_path'])
                ->resize(320, 240)
                ->save(public_path('uploads/block_templates/') . '/thumbs/'. $data['image_path']);

//            Remove old images
            Storage::delete('block_templates/'. $block_template->image_path);
            Storage::delete('block_templates/thumbs/'. $block_template->image_path);

        } else {
            unset($rules['image'], $rules['image_path']);
        }

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect(route('admin.block_templates.edit', compact('block_template')))
                ->withErrors($validator)
                ->withInput();
        } else {
            $block_template->update($data);

            return redirect(route('admin.block_templates.list'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Block_templates  $block_templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block_templates $block_templates)
    {
        //
    }
}
