<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlocksRequest;
use App\Models\Block;
use App\Models\Block_option_content_translations;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Models\Pages  $page
     * @return \Illuminate\Http\Response
     */
    public function index(Pages $page)
    {

        return view('admin.block.index', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     * @param Pages $page
     * @return \Illuminate\Http\Response
     */
    public function create(Pages $page)
    {
//        $templates = Block_templates::all();
//
//        return response()->json([
//            'status' => true,
//            'form' => view('admin.block.includes.create_update_form', compact('page', 'templates'))->render()
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Pages $page
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Pages $page, Request $request)
    {
        $data = $request->all();
        $data['enabled'] = ($data['enabled'] == 'on');
        $rules = (new StoreBlocksRequest())->rules();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } else {
            $page->blocks()->create($data);

//            $block_list = $block
//                ->page()
//                ->first()
//                ->blocks()
//                ->with('contents');

            return response()->json([
                'status' => true,
                'html' => view('admin.block.block_list', compact('page'))->render()

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Block $block)
    {

        return response()->json([
            'status' => true,
            'form' => view('admin.block.includes.update_form', compact('block'))->render()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Block $block)
    {
        $data = $request->all();

        $block->update($data);
        $show = $block->enabled;

        return response()->json([
            'status' => true,
            'html' => view('admin.block.block_item', compact('block', 'show'))->render()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Block  $block
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Block $block)
    {

        return response()
            ->json(['status' => $block->delete()]);
    }

    /**
     * Update child blocks orders.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateBlocksOrder(Request $request)
    {
        $data = $request->all();
        foreach ($data['sequence'] as $order => $id) {
            Block::where('id', $id)
                ->update(['order' => $order]);
        }

        return response()
            ->json(['status' => true]);
    }
}
