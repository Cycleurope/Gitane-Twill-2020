@extends('layouts.app')

@section('pageTitle', " - ".$family->translate(app()->getLocale())->title)
@section('content')

@include('site.partials.family.cover')
@include('site.partials.family.heading')
@include('site.partials.family.list')
@include('site.partials.find-a-dealer')

@endsection