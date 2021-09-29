<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlockContentsRequest;
use App\Http\Requests\StoreBlockContentValuesRequest;
use App\Models\Block;
use App\Models\Block_contents;
use App\Models\Block_option_content_translations;
use App\Models\Block_template_attributes;
use App\Models\Languages;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlockContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param Block $block
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Block $block)
    {
        return response()->json([
            'status' => true,
            'form' => view('admin.content.includes.create_form', compact('block'))->render(),
            'content' => view('admin.content.content_list', compact('block'))->render()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Block  $block
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Block $block, Request $request)
    {

        $data = $request->all();

        if(
            $request->hasFile('image')
            && $request->file('image')->isValid()
        ) {
            $imageURL = request()->file('image')->store('contents');
            $path_ar = explode('/', $imageURL);
            $data['image_path'] = end($path_ar);
            Image::make(public_path('uploads/contents/') . $data['image_path'])
                ->resize(320, 240)
                ->save(public_path('uploads/contents/'). 'thumbs/'. $data['image_path']);
        }
//dd($request->option['images']);
        if(Arr::has($data, ['option.image'])) {
            foreach ($request->option['image'] as $key => $image){
                if($image->isValid()){
                    $imageURL = $image->store('content_options');
                    $path_ar = explode('/', $imageURL);
                    $data['option']['image'][$key] = end($path_ar);
                    Image::make(public_path('uploads/content_options/') . end($path_ar))
                        ->resize(320, 240)
                        ->save(public_path('uploads/content_options/'). 'thumbs/'. end($path_ar));
                }
            }
        }

        $data['enabled'] = isset($data['enabled']) ? true : false;
        $rules = (new StoreBlockContentsRequest())->rules();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } else {
//            dd($data);
            $rules = (new StoreBlockContentValuesRequest())->rules();
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return response()->json(['errors'=>$validator->errors()->all()]);
            } else {
                $content = $block->contents()->create($data);
//                $block_content = Block_contents::create($data);
//                $data['block_content_id'] = $block_content->id;
                $data['lang_id'] = 2;
                $translation = $content->translations()->create($data);

                if(isset($data['option'])) {
                    foreach ($data['option'] as $type => $values) {
                        foreach ($values as $value) {
                            if($value) {
                                $option_data = [
                                    'value' => $value,
                                    'type' => array_flip(Block_option_content_translations::TYPE_LIST)[$type],
                                ];
//                                dd($option_data);
                                $translation->options()->create($option_data);
//                                $block_content_option_translate = Block_option_content_translations::create($option_data);
                            }
                        }
                    }
                }


                return response()->json([
                    'status' => true,
                    'block_id' => $block->id,
                    'form' => view('admin.content.includes.create_form', compact('block'))->render(),
                    'content' => view('admin.content.content_list', compact('block'))->render()
                ]);
            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Block_contents  $block_content
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Block_contents $content)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Block_contents  $block_content
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Block $block)
    {
//        dd($block->attrs());
//        dd($block->template);
//        $block = $block->template;
//        $content = $block->attrs();
        return response()->json([
            'status' => true,
            'form' => view('admin.content.includes.update_form', compact('block'))->render(),
//            'content' => view('admin.content.content_list', ['block' => $content->block])->render()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Block_contents  $content
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Block $block)
    {
//        dd($block);

        $data = $request->all();

        if(
            $request->hasFile('image')
            && $request->file('image')->isValid()
        ) {
            $imageURL = request()->file('image')->store('contents');
            $path_ar = explode('/', $imageURL);
            $data['image_path'] = end($path_ar);
            Image::make(public_path('uploads/contents/') . $data['image_path'])
                ->resize(320, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/contents/'). 'thumbs/'. $data['image_path']);
        }
//        dd($request->hasFile('content.image'));

//        if(Arr::has($data, ['option.image'])){
//
//            foreach ($request->option['image'] as $key => $image){
//                if($image instanceof UploadedFile && $image->isValid()){
//                    $imageURL = $image->store('content_options');
//                    $path_ar = explode('/', $imageURL);
//                    $data['option']['image'][$key] = end($path_ar);
//                    Image::make(public_path('uploads/content_options/') . end($path_ar))
//                        ->resize(320, 240)
//                        ->save(public_path('uploads/content_options/'). 'thumbs/'. end($path_ar));
//                }
//            }
//        }
//        dd($data);
        foreach ($data['content'] as $attr_id => $value)
        {
//            $value
//            dd($attr_id);
//            dd($data);

            $content = $block->contents()->create([
                'block_template_attribute_id' => $attr_id
            ]);
            if(Block_template_attributes::TYPE_LIST[$content->attr->type] == 'image'){
                $imageURL = $value->store('contents');
                $path_ar = explode('/', $imageURL);
                $translate_data = [
                    'value' =>end($path_ar)
                ];
//                    $data['option']['image'][$key] = ;

            } else {
                $translate_data = [
                    'value' => $value
                ];
            }

            $translate_data['lang_id'] = 3;

            $content->translate()->create($translate_data);
        }

        return response()->json([
            'status' => true,
            'toasts' => [
                'title' => 'Наполнили',
                'body' => 'чем-то',
                'class' => 'bg-primary'
            ],
        ]);

//        dd($block->contents());

        foreach ($block->translations as $translate) {
            $translate->update($data);
            if(isset($data['option'])) {
                $options = $translate->options()->get()->keyBy('id');
                foreach ($options as $id => $option) {
                    $type = Block_option_content_translations::TYPE_LIST[$option->type];
                    if($value = Arr::get($data['option'], "$type.$id")){
                        $option->update(['value' => $value]);
                        unset($data['option'][$type][$id]);
                    } else {
                        $option->delete($id);
                    }
                }
                foreach ($data['option'] as $type => $options) {
                    $type_id = array_flip(Block_option_content_translations::TYPE_LIST)[$type];
                    foreach ($options as $id => $value){
                        if($value) {
                            $translate
                                ->options()
                                ->create([
                                    'value' => $value,
                                    'type' => $type_id
                                ]);
                        }
                    }
                }
            }
        }
        $block = $content->block;
        return response()->json([
            'status' => true,
            'block_id' => $block->id,
            'form' => view('admin.content.includes.create_form', compact('block'))->render(),
            'content' => view('admin.content.content_list', compact('block'))->render()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Block_content  $block_content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $request->all();
        Block_contents::findOrFail($data['content_id'])->delete();

        return response()->json(['status' => 'ok']);
    }
}
