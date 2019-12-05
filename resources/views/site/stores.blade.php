@extends('layouts.app')

@section('content')
<div id="cover" class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="cover-picture d-none d-md-block"><img src="/img/desktop_cover_fas.jpg" alt="" width="100%"></div>
            <div class="cover-picture d-block d-md-none"><img src="/img/mobile_cover_fas.jpg" alt="" width="100%"></div>
            <div class="cover-overlay"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col py-5">
            <h1>@lang('common.store.plural')</h1>
        </div>
    </div>
</div>

@include('site.partials.stores.french_stores')
@include('site.partials.stores.european_stores')
@include('site.partials.stores.northamerican_stores')
@include('site.partials.stores.southamerican_stores')
@include('site.partials.stores.african_stores')
@include('site.partials.stores.asian_stores')
@include('site.partials.stores.oceanian_stores')

@endsection