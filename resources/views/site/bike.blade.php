@extends('layouts.app')

@section('pageTitle', " - ".$family->translate(app()->getLocale())->title." - ".$bike->translate(app()->getLocale())->name." ".$bike->translate(app()->getLocale())->subname)

@section('content')

@include('site.partials.bike.cover')
@include('site.partials.bike.overview')
@include('site.partials.bike.blocks')
@include('site.partials.bike.datasheet')
@include('site.partials.geometries.section')
@include('site.partials.bike.accessories')
@include('site.partials.bike.related-products')
@include('site.partials.find-a-dealer')
</div>
@endsection