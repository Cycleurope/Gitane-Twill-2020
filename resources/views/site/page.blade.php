@extends('layouts.app')

@section('pageTitle', " - ".$page->translate(app()->getLocale())->title )

@section('content')

<div class="container-fluid">
    <div class="row">
        @if($page->hasImage('cover'))
        <div class="col px-0">
            <img src="{{ $page->image('cover', 'default') }}" alt="" width="100%">
        </div>
        @endif
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col py-5"><h1>{{ $page->title }}</h1></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col mb-5">{!! $page->translate(app()->getLocale())->content !!}</div>
    </div>
</div>

<div class="container-fluid">
    {!! $page->renderBlocks() !!}
</div>
@endsection