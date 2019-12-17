@extends('layouts.app')
@section('pageTitle', ' - L\'univers Gitane')
@section('content')

@include('site.partials.home.homeslider')
@include('site.partials.home.featured')
@include('site.partials.home.familiesslider')
@include('site.partials.stores.find_a_dealer')

@endsection