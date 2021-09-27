<?php
/**
 * @var $page \App\Models\Pages;
 * @var $templates \Illuminate\Database\Eloquent\Collection;
 */
?>
@extends('adminlte::page')
@section('title', __('pages.content'))
@section('content_header')
    @include('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.pages.list')
        ],
        [
            'label' => __('block.content') .' страницы "'. $page->title . '"',
        ]
    ])
@endsection

@section('content')
    <!-- Button trigger modal -->
{{--    <button--}}
{{--        type="button"--}}
{{--        class="btn btn-success"--}}
{{--        data-toggle="modal"--}}
{{--        data-target="#blockModalCreate"--}}
{{--        id="createBlock"--}}
{{--    ><i class="fas fa-plus"></i>--}}
{{--    </button>--}}
    @include('admin.content.includes.content_modal_dialog')
{{--    @include('admin.content.includes.content_modal_dialog')--}}
    <form id="blockCreateForm" action="{{ route('admin.blocks.create', ['page' => $page]) }}">
    </form>
    <div class="row">
        <div class="col-md-3">
            <h3>Доступные шаблоны</h3>
        </div>
        <div class="col-md-9">
            <h3>Предварительный просмотр страницы</h3>
        </div>
    </div>
    <div class="row admin-template-row">
        @include('admin.block.template_list')
        @include('admin.block.block_list')
    </div>
    <div class="modal fade" id="confirmDeleteBlock">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title"> @lang('system.confirm') </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> @lang('block.confirm_delete_block_question') </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal"> @lang('system.cancel') </button>
                    <button type="button" class="btn btn-outline-light" id="deleteBlock"> @lang('system.delete') </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
{{--    <div class="modal fade" id="confirmDeleteContent">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content bg-danger">--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title"> @lang('system.confirm') </h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">×</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p> @lang('block_contents.confirm_delete_content_question') </p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer justify-content-between">--}}
{{--                    <button type="button" class="btn btn-outline-light" data-dismiss="modal"> @lang('system.cancel') </button>--}}
{{--                    <button type="button" class="btn btn-outline-light" id="deleteBlockContent"> @lang('system.delete') </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /.modal-content -->--}}
{{--        </div>--}}
{{--        <!-- /.modal-dialog -->--}}
{{--    </div>--}}
@endsection

@section('adminlte_js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/list.js') }}"></script>
{{--    <script src="{{ asset('/js/form.js') }}"></script>--}}
@endsection

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
