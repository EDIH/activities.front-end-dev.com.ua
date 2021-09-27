<?php
/**
 * @var $level integer
 * @var $page \App\Models\Pages;
 */
?>
<tr>
{{--                                    <td>--}}
{{--                                        <a href="">{{ $page->id }}</a>--}}
{{--                                    </td>--}}
{{--    <td>--}}
{{--        {{ $page->parent()->count() ? $page->parent()->first()->title : '/' }}--}}
{{--    </td>--}}
{{--    {{dd($level)}}--}}
    <td>
{{--        @foreach($parents as $count => $parent)--}}
            <?php $z = 0; ?>
            @while ($z < $level)
                {{'->'}}
                <?php $z++ ?>
            @endwhile
        {{ $level }}
{{--                {{ '/'.$parent }}--}}
{{--                <br>--}}
{{--        @endforeach--}}
    </td>
    <td>
        {{ $page->title }}
    </td>
    <td>
        {{ $page->alias }}
    </td>
    <td>
        @if($page->enabled)
            <span class="badge badge-success">Enabled</span>
        @else
            <span class="badge badge-danger">Disable</span>
        @endif
    </td>
{{--    <td>--}}
{{--        <img src="{{ '/uploads/pages/thumbs/' . $page->image_path }}" alt="">--}}
{{--    </td>--}}
    <td>
        <div class="btn-group">
            <a href="{{ route('admin.pages.edit', ['id' => $page->id]) }}" class="btn btn-success"> @lang('system.update') </a>
            <a href="{{ route('admin.pages.content.update', ['page' => $page]) }}" class="btn btn-primary"> @lang('pages.content') </a>
            <a href="#" class="btn btn-danger"> @lang('system.delete') </a>
        </div>
        {{--                                    <a href="{{ route('admin.pages.update') }}" class="btn btn-sm btn-primary float-left"> @lang('system.update') </a>--}}
        {{--                                    <a href="{{ route('admin.pages.content') }}" class="btn btn-sm btn-info float-left"> @lang('pages.content') </a>--}}
    </td>

</tr>
@foreach($page->allChild as $page)
    <?php $parents[] = $page->title ; ?>
    @include('admin.pages.includes.page_list_row', ['page' => $page, 'level' => $level+1, 'parents' => $parents])
@endforeach
