@extends('layouts.app')

@section('pageTitle', " - ".$page->translate(app()->getLocale())->title )


@if($page->translate(app()->getLocale())->meta_description != '')
    @section('metaDescription', $page->translate(app()->getLocale())->meta_description)
@endif
@if($page->translate(app()->getLocale())->meta_keywords != '')
    @section('metaKeywords', $page->translate(app()->getLocale())->meta_keywords)
@endif

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
        <div class="col py-5"><h1>{{ $page->translate(app()->getLocale())->title }}</h1></div>
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