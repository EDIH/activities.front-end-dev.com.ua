<?php
/**
 * @var $page \App\Models\Pages;
 */
?>
{{--    <div class="table-responsive">--}}
{{--        <table class="table m-0">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>template</th>--}}
{{--                <th>переменные</th>--}}
{{--                <th>order</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}

<div id="blockList" class="col-md-9 connectedSortable blockList" style="
    box-shadow: 0 4px 12px 0 rgb(0 23 46 / 14%);
    padding: 0;
    border-radius: 6px;
    cursor: pointer;">
    @foreach($page->blocks as $block)
        @include('admin.block.block_item')
    @endforeach
</div>
