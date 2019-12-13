@extends('layouts.app')

@section('pageTitle', " - ".$family->translate(app()->getLocale())->title)
@endsection

@if($family->translate(app()->getLocale())->meta_description != '')
    @section('metaDescription', $family->translate(app()->getLocale())->meta_description)
    òulalala
    @endsection
@endif
@if($family->translate(app()->getLocale())->meta_keywords != '')
    @section('metaKeywords', $family->translate(app()->getLocale())->meta_keywords)
    @endsection
@endif

@section('content')

@include('site.partials.family.cover')
@include('site.partials.family.heading')
@include('site.partials.family.list')
@include('site.partials.find-a-dealer')

@endsection