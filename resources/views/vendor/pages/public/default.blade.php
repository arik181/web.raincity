@extends('pages::public.default_master')

@section('css')
<link href="{{ app()->isLocal() ? asset('css/default.css') : asset(elixir('css/default.css')) }}" rel="stylesheet">
@endsection

@section('page')
    @if($children)
    <ul class="nav nav-subpages">
        @foreach ($children as $child)
        @include('pages::public._listItem', array('child' => $child))
        @endforeach
    </ul>
    @endif

    {!! $page->present()->body !!}
    @include('galleries::public._galleries', ['model' => $page])

@endsection
