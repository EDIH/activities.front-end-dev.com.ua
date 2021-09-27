<?php
/**
 * @var $templates \Illuminate\Database\Eloquent\Collection;
 */
?>
@extends('adminlte::page')
@section('title', __('block_templates.list'))
@section('content_header')
    @include('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.block_templates.list')
        ],
        [
            'label' => __('block_templates.list'),
        ]
    ])
@endsection

@section('content')
    @include('admin.block_templates.includes.template_modal_dialog_load')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title"> @lang('pages.list') </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th>@lang('system.preview')</th>
                        <th> @lang('block_templates.name') </th>
                        <th> @lang('block_templates.path') </th>
                        <th> @lang('system.status') </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($templates as $template)
                        <tr>
                            <td>
                                <img src="{{ '/uploads/block_templates/thumbs/' . $template->image_path }}" alt="">
                            </td>
                            <td>{{ $template->name }}</td>
                            <td>{{ $template->path }}</td>
                            <td>
                                @if($template->enabled)
                                    <span class="badge badge-success">Enabled</span>
                                @else
                                    <span class="badge badge-danger">Disable</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.block_templates.edit', ['block_template' => $template]) }}" class="btn btn-success"> @lang('system.update') </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button
                type="button"
                class="btn btn-sm btn-info float-left"
                data-toggle="modal"
                data-target="#templateModalLoad"
                id="createAttr"
            > @lang('block_templates.create') </i>
            </button>
        </div>
        <div class="card-footer clearfix">
            <a href="{{ route('admin.block_templates.create') }}" class="btn btn-sm btn-info float-left"> @lang('block_templates.load') </a>
        </div>

        <!-- /.card-footer -->
    </div>
@endsection

@section('adminlte_js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{--    <script src="{{ asset('/js/app.js') }}"></script>--}}
    {{--    <script src="{{ asset('/js/list.js') }}"></script>--}}
    <script src="{{ asset('/js/load.js') }}"></script>
@endsection
