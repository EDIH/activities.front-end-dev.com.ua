<?php
/**
* @var $page \App\Models\Pages;
* @var $content \App\Models\Block_contents;
* @var $templates \Illuminate\Database\Eloquent\Collection;
*/
?>

<form
    id="contentForm"
    method="POST"
    action="{{ route('admin.contents.update', ['block' => $block]) }}"
{{--    class="@if($content->block->contents->count()) col-md-6 @else col-md-12 @endif"--}}
    enctype="multipart/form-data"
>
    <!-- Default switch -->
{{--                        <input--}}
{{--                            name="properties[{{ $lang->iso }}][enabled]"--}}
{{--                            type="checkbox"--}}
{{--                            class="form-check-input"--}}
{{--                            id="enabled_{{ $lang->iso }}"--}}
{{--                            @if($lang->enabled) checked--}}
{{--                            @else disabled--}}
{{--                            @endif--}}
{{--                            value="{{ $model->property($lang->id) ? $model->property($lang->id)->enabled : old('properties.'.$lang->iso.'.enabled', true) }}"--}}
{{--                        >--}}
    @foreach($block->attrs() as $attribute)
        <div class="form-group">
        @switch($attribute->type)
            @case(0)
            <label for=""> {{ $attribute->name }} </label>
                @php
                $url = $block->contents()->attribute($attribute->id)->first()
                    ? '/uploads/contents/' .$block->contents()->attribute($attribute->id)->first()->translate->value
                    : '/uploads/block_template_attributes/' . $attribute->default_value;
                @endphp
                <img class="img-fluid pad" src="{{ $url }}" alt="Preview">
            <input type="hidden" name="content[{{ $attribute->id }}]" value="">
            <div class="input-group mb-3" id="option_image_{{ $attribute->id }}">
                <div class="custom-file">
                    <input type="hidden" name="content[{{ $attribute->id }}]" value="{{ $attribute->value }}">
                    <input id="optionFile_{{ $attribute->id }}" type="file" class="custom-file-input input"  name="content[{{ $attribute->id }}]">
                    <label class="custom-file-label" for="optionFile_{{ $attribute->id }}">{{ $attribute->value }}</label>
                </div>
            </div>
            @break

            @case(1)
{{--            <div class="input-group mb-3" id="option_input_{{ $attribute->id }}" style="">--}}
                <label for=""> {{ $attribute->name }} </label>
                <input
                    name="content[{{ $attribute->id }}]"
                    type="text"
                    class="form-control input"
                    placeholder="{{ $attribute->default_value }}"
                    autocomplete="off"
                    value="{{ $block->contents()->attribute($attribute->id)->first()->translate->value ?? $attribute->value }}"
                >
{{--                <div class="input-group-append">--}}
{{--                    <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
            @break

            @case(2)
{{--            @dd($block->contents()->attribute($attribute->id)->first()->translate->value)--}}
{{--            @dd($block->contents()->attribute($attribute->id)->first()->translate)--}}
{{--            <div class="input-group mb-3" id="option_textarea_{{ $attribute->id }}" style="">--}}
                <label for=""> {{ $attribute->name }} </label>
                <textarea
                    class="form-control input"
                    rows="3"
                    placeholder="{{ $attribute->default_value }}"
                    name="content[{{ $attribute->id }}]"
                >{{ $block->contents()->attribute($attribute->id)->first()->translate->value ?? $attribute->value }}</textarea>
{{--                <div class="input-group-append">--}}
{{--                    <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
            @break

        @endswitch
        </div>
    @endforeach
    <div class="custom-control custom-switch">
        <input name="enabled" type="checkbox" class="custom-control-input" id="customSwitches" checked>
        <label class="custom-control-label" for="customSwitches"> @lang('system.disable') </label>
    </div>
{{--                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate bootstrap-switch-on" style="width: 88px;"><div class="bootstrap-switch-container" style="width: 129px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 43px;">ON</span><span class="bootstrap-switch-label" style="width: 43px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 43px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch=""></div></div>--}}
{{--                    <div class="form-check form-switch">--}}
{{--                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />--}}
{{--                        <label class="form-check-label" for="flexSwitchCheckDefault"--}}
{{--                        >Default switch checkbox input</label--}}
{{--                        >--}}
{{--                    </div>--}}
{{--                    <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 88px;">--}}
{{--                        <div class="bootstrap-switch-container" style="width: 129px; margin-left: 0px;">--}}
{{--                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 43px;">ON</span>--}}
{{--                            <span class="bootstrap-switch-label" style="width: 43px;">&nbsp;</span>--}}
{{--                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 43px;">OFF</span>--}}
{{--                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
    <div class="alert alert-danger" style="display: none;">
    </div>
{{--                    INPUT--}}
{{--    @foreach($content->translations as $translate)--}}
{{--        <div class="form-group">--}}
{{--            <label for="title"> @lang('block_contents.title') </label>--}}
{{--            <input--}}
{{--                id="title"--}}
{{--                name="title"--}}
{{--                type="text"--}}
{{--                class="form-control"--}}
{{--                placeholder="{{ __('block_contents.title') }}"--}}
{{--                autocomplete="off"--}}
{{--                value="{{ $translate->title }}"--}}
{{--            >--}}
{{--        </div>--}}
{{--    --}}{{--                    INPUT--}}
{{--        <div class="form-group">--}}
{{--            <label for="sub_title"> @lang('block_contents.sub_title') </label>--}}
{{--            <input--}}
{{--                id="sub_title"--}}
{{--                name="sub_title"--}}
{{--                type="text"--}}
{{--                class="form-control"--}}
{{--                placeholder="{{ __('block_contents.sub_title') }}"--}}
{{--                autocomplete="off"--}}
{{--                value="{{ $translate->sub_title }}"--}}
{{--            >--}}
{{--        </div>--}}
{{--    --}}{{--                    INPUT--}}
{{--        <div class="form-group">--}}
{{--            <label for="link"> @lang('block_contents.link') </label>--}}
{{--            <input--}}
{{--                id="link"--}}
{{--                name="link"--}}
{{--                type="text"--}}
{{--                class="form-control"--}}
{{--                placeholder="{{ __('block_contents.link') }}"--}}
{{--                autocomplete="off"--}}
{{--                value="{{ $translate->link }}"--}}
{{--            >--}}
{{--        </div>--}}
{{--    --}}{{--                    INPUT--}}
{{--        <div class="form-group" id="textarea">--}}
{{--            <label for="content"> @lang('block_contents.content') </label>--}}
{{--            <textarea--}}
{{--                class="form-control input"--}}
{{--                rows="3"--}}
{{--                placeholder="{{ __('block_contents.content') }}"--}}
{{--                name="content"--}}
{{--                id="content"--}}
{{--            >{{ $translate->content }}</textarea>--}}
{{--        </div>--}}
{{--    --}}{{--                    INPUT--}}
{{--        <div class="form-group">--}}
{{--            <div class="custom-file">--}}
{{--                <input type="file" class="custom-file-input input" id="optionFile_{{ $translate->id }}"  name="image">--}}
{{--                <label class="custom-file-label" for="optionFile_{{ $translate->id }}">--}}
{{--                    {{ $translate->image_path ?? __('system.select image') }}--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    --}}{{--                   OPTION INPUT TEMPLATE--}}
{{--        <div class="form-group option-fields">--}}
{{--            @include('admin.content.option_list')--}}
{{--        </div>--}}
{{--    --}}{{--                    SELECT OPTION TYPE INPUT--}}


{{--        <div class="form-group">--}}
{{--            <label for="selectType"> @lang('block_option_contents.add_value') </code></label>--}}
{{--            <select class="custom-select form-control-border" id="type">--}}
{{--                <option value="-1" selected disabled hidden> @lang('block_option_contents.select_type') </option>--}}
{{--                @foreach($input_types as $id => $type)--}}
{{--                    <option--}}
{{--                        value="option_{{ $type }}"--}}
{{--                    >{{ __('system.'.$type) }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    @endforeach--}}
</form>

{{--<div--}}
{{--    id="contentList"--}}
{{--    class="@if($content->block->contents->count()) col-md-6 @else col-md-12 @endif"--}}
{{--    @include('admin.content.content_list', ['block' => $content->block])--}}
{{--</div>--}}

