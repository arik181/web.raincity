@extends('core::admin.master')

@section('title', $model->present()->title)

@section('main')

    @include('core::admin._button-back', ['module' => 'files'])
    <h1 class="@if(!$model->present()->title)text-muted @endif">
        {{ $model->present()->title ?: trans('core::global.Untitled') }}
    </h1>

    {!! BootForm::open()->put()->action(route('admin::update-file', $model->id))->multipart()->role('form') !!}
    {!! BootForm::bind($model) !!}
        @include('files::admin._form')
    {!! BootForm::close() !!}

@endsection
