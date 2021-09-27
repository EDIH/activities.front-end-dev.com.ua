<?php
/**
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>
@extends('client.layouts.main')
@section('content')
    @foreach($model->page->enabled_blocks as $block)
        <?php $view = explode('.', $block->template->path)[0]; ?>
    @include('client.block_templates.templates.'.$view)
    @endforeach
@endsection
