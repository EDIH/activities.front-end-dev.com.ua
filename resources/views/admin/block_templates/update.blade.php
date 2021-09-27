<?php
/**
 * @var $block_template \App\Models\Block_templates;
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
            'url' => route('admin.block_templates.list')
        ],
        [
            'label' => __('block_template.add'),
        ]
    ])
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form
        role="form"
        action="{{ route('admin.block_templates.update', ['block_template' => $block_template]) }}"
        method="post"
        enctype="multipart/form-data"
    >
        @include('admin.block_templates.includes.create_update_form')
    </form>
@endsection
