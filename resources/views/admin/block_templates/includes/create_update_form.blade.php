<?php
/**
 * @var $block_template \App\Models\Block_templates;
 */
?>
@csrf
<div class="form-check">
    <input
        name="enabled"
        type="checkbox"
        class="form-check-input"
        id="enabled"
    >
    <label class="form-check-label" for="enabled"> @lang('system.status') </label>
</div>
<div class="form-group">
    <label for="name"> @lang('block_templates.name') </label>
    <input
        name="name"
        type="text"
        class="form-control"
        id="name"
        placeholder="name"
        value="{{ $block_template->name ?? old('name') }}"
    >
</div>
<div class="form-group">
<?php $templates = \App\Models\Block_templates::template_list() ?>
    <label> @lang('block_templates.path') </label>
    <select
        class="form-control select2bs4 select2-hidden-accessible"
        name="path"
        style="width: 100%;"
        data-select2-id="17"
        tabindex="-1"
        aria-hidden="true"
    >
        @foreach($templates as $template)
            <option
                value="{{ $template->getFilename() }}"
            >
                {{ $template->getBasename() }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="image"> @lang('system.image') </label>
    @isset($block_template->image_path)
        <img class="img-fluid pad" src="{{ '/uploads/block_templates/thumbs/' . $block_template->image_path }}" alt="Preview">
    @endif
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="exampleInputFile"> @lang('system.select image') </label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id=""> @lang('system.upload') </span>
        </div>
    </div>
</div>

<div class="form-group attribute-fields">

</div>

<div class="form-group">
    <label for="selectType"> @lang('block_option_contents.add_value') </code></label>
    <select class="custom-select form-control-border" id="type">
        <option value="-1" selected disabled hidden> @lang('block_template_attributes.select_type') </option>
        @foreach($input_types as $id => $type)
            <option
                value="option_{{ $type }}"
            >{{ __('system.'.$type) }}</option>
        @endforeach
    </select>
    {{--                        <button--}}
    {{--                            id="saveAndContinueContent"--}}
    {{--                            type="button"--}}
    {{--                            class="btn btn-primary"--}}
    {{--                        > - </button>--}}
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary"> @lang('system.submit') </button>
</div>

{{--*********--}}
{{--*********--}}
{{--Templates--}}
{{--*********--}}
{{--*********--}}
<div class="input-group mb-3" id="option_image" style="display: none">
    <input
        name="attribute[image][key][]"
        type="text"
        class="form-control"
        id="key"
        placeholder="{{ __('block_template_attributes.key') }}"
        value="{{ $block_template->name ?? old('key') }}"
    >
    <div class="custom-file">
        <input
            name="attribute[image][name][]"
            type="text"
            class="form-control"
            id=""
            placeholder="{{ __('block_template_attributes.name') }}"
            value="{{ $block_template->name ?? old('name') }}"
        >
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input input"  name="attribute[image][default_value][]">
        <label class="custom-file-label" for="exampleInputFile"> @lang('system.select image') </label>
    </div>
    <div class="input-group-append">
        {{--                            <span class="input-group-text" id=""> @lang('system.upload') </span>--}}
        <button class="btn btn-danger remove-input" type="button" style="z-index:1">??????????????</button>
    </div>
</div>
{{--                   OPTION INPUT TEMPLATE--}}
{{--                    <div class="input-group mb-3">--}}
{{--                        <input type="text" class="form-control" placeholder="Something clever.." style="z-index:0">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-danger" type="button" style="z-index:1">??????????????</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
<div class="input-group mb-3" id="option_input" style="display: none">
    <input
        name="attribute[input][key][]"
        type="text"
        class="form-control"
        id="key"
        placeholder="{{ __('block_template_attributes.key') }}"
        value="{{ $block_template->name ?? old('key') }}"
    >
    <input
        name="attribute[input][name][]"
        type="text"
        class="form-control"
        id="name"
        placeholder="{{ __('block_template_attributes.name') }}"
        value="{{ $block_template->name ?? old('name') }}"
    >
    <input
        name="attribute[input][default_value][]"
        type="text"
        class="form-control input"
        placeholder="{{ __('block_template_attributes.default_value') }}"
        autocomplete="off"
        value=""
    >

    <div class="input-group-append">
        <button class="btn btn-danger remove-input" type="button" style="z-index:1">??????????????</button>
    </div>
</div>
{{--                   OPTION INPUT TEMPLATE--}}
<div class="input-group mb-3" id="option_textarea" style="display: none">
    <input
        name="attribute[textarea][key][]"
        type="text"
        class="form-control"
        id="key"
        placeholder="{{ __('block_template_attributes.key') }}"
        value="{{ $block_template->name ?? old('key') }}"
    >
    <input
        name="attribute[textarea][name][]"
        type="text"
        class="form-control"
        id="name"
        placeholder="{{ __('block_template_attributes.name') }}"
        value="{{ $block_template->name ?? old('name') }}"
    >
    <textarea
        class="form-control input"
        rows="3"
        placeholder="{{ __('block_contents.content') }}"
        name="attribute[textarea][default_value][]"
    ></textarea>
    <div class="input-group-append">
        <button class="btn btn-danger remove-input" type="button" style="z-index:1">??????????????</button>
    </div>
</div>
