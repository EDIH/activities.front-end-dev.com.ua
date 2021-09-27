@extends('adminlte::page')
@section('title', __('picture.list'))
@section('content_header')
    @include('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.picture.list')
        ],
        [
            'label' => __('picture.list'),
            'url' => route('admin.picture.list')
        ],
        [
            'label' => __('picture.add')
        ]
    ])
@endsection

@php($locales = config('app.locales'))

@section('content')

    <div class="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            @foreach($sites as $count => $site)

                <li role="presentation" @if($count == 0) class="active" @endif>
                    <a href="#tab-{{ $site->id }}" aria-controls="#tab-{{ $site->id }}" role="tab" data-toggle="tab">{{ $site->url }}</a>
                    {!! "&nbsp;" !!} {{--  TODO удалить после стилизирования    --}}
                </li>

            @endforeach

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            @foreach($sites as $count => $site)

                <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $site->id }}">

                    <h2>{{ $site->url }}</h2>

                    @if($site->template)
                        @include('admin.templates.' . $site->template->path . '.index', ['pictures' => $model, 'site' => $site])
                    @endif


                </div>

            @endforeach

        </div>

    </div>
@endsection
