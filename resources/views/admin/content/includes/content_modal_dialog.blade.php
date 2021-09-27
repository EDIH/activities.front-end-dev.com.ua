<?php
/**
 * @var $page \App\Models\Pages;
 * @var $templates \Illuminate\Database\Eloquent\Collection;
 */
?>

<div class="modal fade" id="contentFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" id="modal_dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> @lang('block.content') </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal_body">
{{--                FORM BEGIN--}}

{{--                   LEFT COLUMN--}}

{{--                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contentForm">--}}
{{--                    @lang('block.add_content')--}}
{{--                </button>--}}
            </div>
            <div class="modal-footer">
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                <button--}}
{{--                    id="saveAndContinueContent"--}}
{{--                    type="button"--}}
{{--                    class="btn btn-primary"--}}
{{--                > @lang('block_contents.submit_and_continue') </button>--}}
                <button
                    id="saveContent"
                    type="button"
                    class="btn btn-primary"
                > @lang('system.submit') </button>
            </div>
        </div>
    </div>
</div>

{{--*********--}}
{{--*********--}}
{{--Templates--}}
{{--*********--}}
{{--*********--}}



<div class="input-group mb-3" id="option_image" style="display: none">
    <div class="custom-file">
        <input type="file" id="optionFile" class="custom-file-input input"  name="option[image][]">
        <label class="custom-file-label" for="optionFile"> @lang('system.select image') </label>
    </div>
    <div class="input-group-append">
        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
    </div>
</div>
{{--                   OPTION INPUT TEMPLATE--}}
{{--                    <div class="input-group mb-3">--}}
{{--                        <input type="text" class="form-control" placeholder="Something clever.." style="z-index:0">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-danger" type="button" style="z-index:1">Удалить</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
<div class="input-group mb-3" id="option_input" style="display: none">
    <input

        name="option[input][]"
        type="text"
        class="form-control input"
        placeholder="{{ __('system.input') }}"
        autocomplete="off"
    >
    <div class="input-group-append">
        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
    </div>
</div>
{{--                   OPTION INPUT TEMPLATE--}}
<div class="input-group mb-3" id="option_textarea" style="display: none">
    <textarea
        class="form-control input"
        rows="3"
        placeholder="{{ __('block_contents.content') }}"
        name="option[textarea][]"
    ></textarea>
    <div class="input-group-append">
        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
    </div>
</div>
