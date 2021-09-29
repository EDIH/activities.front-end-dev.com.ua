<?php
/**
* @var $block \App\Models\Block;
* @var $templates \App\Models\Block_templates;
*/
?>

<div class="col-md-12" id="{{ $block->id }}" style="
    padding: 0;
    margin-bottom: 2px;
    border: 1px solid lightgray;
    ">
    <button
        class="btn-xs btn-danger remove-block"
        data-block_id="{{ $block->id }}"
        data-url="{{ route('admin.blocks.delete', ['block' => $block]) }}"
        data-toggle="modal"
        data-target="#confirmDeleteBlock"
        style="position:absolute;right:0;
        border: 1px solid white;
        background-color: #343a40;
        padding: 8px;
width: 40px;
height: auto;
"
    ><svg version="1.1" id="lni_lni-cut" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
          y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
<path d="M47.1,43c-1.4,0-2.8,0.3-4,0.9l-8.9-13L52.5,4C53,3.2,52.8,2.1,52,1.6C51.2,1,50.1,1.2,49.6,2L32,27.7L14.4,2
	c-0.5-0.8-1.6-1-2.4-0.5c-0.8,0.5-1,1.6-0.5,2.4l18.4,26.9l-8.9,13c-1.2-0.6-2.6-0.9-4-0.9C11.5,43,7,47.4,7,52.9s4.4,9.9,9.9,9.9
	s9.9-4.4,9.9-9.9c0-2.7-1.1-5.2-2.9-7L32,33.9l8.2,11.9c-1.8,1.8-2.9,4.3-2.9,7c0,5.4,4.4,9.9,9.9,9.9s9.9-4.4,9.9-9.9
	S52.5,43,47.1,43z M16.9,59.3c-3.5,0-6.4-2.9-6.4-6.4s2.9-6.4,6.4-6.4s6.4,2.9,6.4,6.4S20.4,59.3,16.9,59.3z M47.1,59.3
	c-3.5,0-6.4-2.9-6.4-6.4s2.9-6.4,6.4-6.4s6.4,2.9,6.4,6.4S50.6,59.3,47.1,59.3z" fill="white"/>
</svg></button>
    <button
        type="button"
        class="btn-xs btn-primary edit-content"
        data-toggle="modal"
        data-target="#contentFormModal"
        data-url="{{ route('admin.contents.edit', ['block' => $block]) }}"
        data-block_id="{{ $block->id }}"
        style="position:absolute;right:40px;
        border: 1px solid white;
        background-color: #343a40;
        padding: 8px;
width: 40px;
height: auto;
"
    >
        <svg version="1.1" id="lni_lni-pencil-alt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 64 64" xml:space="preserve">
<path d="M62.7,11.2c0-0.7-0.3-1.3-0.8-1.8c-1.3-1.3-2.5-2.5-3.7-3.7c-1.1-1.1-2.2-2.2-3.3-3.4c-0.4-0.5-1-0.9-1.6-1
	c-0.7-0.1-1.5,0.1-2.1,0.6l-7.2,7.2H8.7c-4.1,0-7.4,3.3-7.4,7.4v38.9c0,4.1,3.3,7.4,7.4,7.4h38.9c4.1,0,7.4-3.3,7.4-7.4V19.9
	l6.9-6.9C62.4,12.5,62.7,11.8,62.7,11.2z M33.3,36.6c-0.1,0.1-0.3,0.2-0.4,0.3l-8.6,2.9l2.8-8.6c0.1-0.2,0.1-0.3,0.3-0.4l19-19
	l6,5.9L33.3,36.6z M51.5,55.4c0,2.1-1.7,3.9-3.9,3.9H8.7c-2.1,0-3.9-1.7-3.9-3.9V16.4c0-2.1,1.7-3.9,3.9-3.9h31.9L24.9,28.2
	c-0.5,0.5-0.9,1.1-1.1,1.8l-3.8,11.6c-0.2,0.6-0.1,1.2,0.2,1.7c0.3,0.4,0.7,0.8,1.6,0.8h0.3l11.9-3.9c0.7-0.2,1.3-0.6,1.8-1.1
	l15.8-15.7V55.4z M54.8,15.1l-6-5.9l4-4c1,1,1.9,1.9,2.9,2.9c1,1,2,2,3,3.1L54.8,15.1z" fill="white"/>
</svg>
    </button>
    <img src="{{ '/uploads/block_templates/' . $block->template->image_path }}" alt="" style="max-width: 100%; width: 100%;">
{{--    @dd($block->template)--}}
{{--    <div class="card @empty($show) collapsed-card @endempty @if($block->enabled) card-primary shadow @else card-gray @endif">--}}
{{--        <div class="card-header">--}}
{{--            <h3 class="card-title m-0 p-0">--}}
{{--                {{ __('block.block') }}--}}
{{--                <small>[{{ $block->template->name }}]</small>--}}
{{--            </h3>--}}
{{--            <p class="m-0 p-0">[{{ $block->template->path }}]</p>--}}
{{--            <div class="card-tools">--}}
{{--                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                    @if(isset($show))--}}
{{--                        <i class="fas fa-minus"></i>--}}
{{--                    @else--}}
{{--                        <i class="fas fa-plus"></i>--}}
{{--                    @endif--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <!-- /.card-tools -->--}}
{{--        </div>--}}
{{--        <!-- /.card-header -->--}}
{{--        <div class="card-body row">--}}
{{--            <div class="col-md-2">--}}
{{--                <button--}}
{{--                    type="button"--}}
{{--                    class="btn-xs btn-success show-content-form"--}}
{{--                    data-toggle="modal"--}}
{{--                    data-target="#contentFormModal"--}}
{{--                    data-url="{{ route('admin.contents.create', ['block' => $block]) }}"--}}
{{--                    data-block_id="{{ $block->id }}"--}}
{{--                >--}}
{{--                    <i class="fas fa-plus"></i>--}}
{{--                </button>--}}
{{--                <button--}}
{{--                    type="button"--}}
{{--                    class="btn btn-primary show-update-block-form"--}}
{{--                    data-toggle="modal"--}}
{{--                    data-target="#blockFormModal"--}}
{{--                    data-block_id="{{ $block->id }}"--}}
{{--                    data-url="{{ route('admin.blocks.edit', ['block' => $block]) }}"--}}
{{--                >--}}
{{--                    <i class="fas fa-pen"></i>--}}
{{--                </button>--}}
{{--                <button--}}
{{--                    class="btn-xs btn-danger remove-block"--}}
{{--                    data-block_id="{{ $block->id }}"--}}
{{--                    data-url="{{ route('admin.blocks.delete', ['block' => $block]) }}"--}}
{{--                    data-toggle="modal"--}}
{{--                    data-target="#confirmDeleteBlock"--}}
{{--                ><i class="fas fa-trash"></i></button>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="input-group mb-3">--}}
{{--                    <select--}}
{{--                        id="block_template_id_{{ $block->id }}"--}}
{{--                        class="form-control select2bs4 select2-hidden-accessible block-template-id"--}}
{{--                        data-block_id="{{ $block->id }}"--}}
{{--                    >--}}
{{--                        @foreach($templates as $template)--}}
{{--                            <option--}}
{{--                                @if($template->id == $block->block_template_id)--}}
{{--                                    selected--}}
{{--                                @endif--}}
{{--                                value="{{ $template->id }}"--}}
{{--                            >--}}
{{--                                {{ $template->name }}--}}
{{--                            </option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    <div class="input-group-append">--}}
{{--                        <a--}}
{{--                            id="update_block_template_id_{{ $block->id }}"--}}
{{--                            href="#"--}}
{{--                            class="btn btn-danger confirm_template"--}}
{{--                            data-block_id="{{ $block->id }}"--}}
{{--                            data-url="{{ route('admin.blocks.update', ['block' => $block]) }}"--}}
{{--                            style="display:none"--}}
{{--                        > @lang('block.confirm_page_template') </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="form-group">--}}
{{--                        <input--}}
{{--                            type="checkbox"--}}
{{--                            class="update_block_status"--}}
{{--                            data-url="{{ route('admin.blocks.update', ['block' => $block]) }}"--}}
{{--                            @if($block->enabled)--}}
{{--                            checked--}}
{{--                            @endif--}}
{{--                            data-block_id="{{ $block->id }}"--}}
{{--                        >--}}
{{--                    <label> @lang('system.disable') </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="overlay dark" style="display: none">--}}
{{--            <i class="fas fa-2x fa-sync-alt fa-spin"></i>--}}
{{--        </div>--}}
{{--        <div class="card-body row contents">--}}
{{--            @include('admin.content.content_list')--}}

{{--        </div>--}}
{{--    </div>--}}
</div>
