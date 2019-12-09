@if(count($bike->geometries) > 0)
<section id="product-geometries" class="py-5 {{ $bike->geometries_theme }}">
    <div class="container">
        <div class="row">
            <div class="g-head g-head-white g-head-a20">g head-white
        </div>
        <div class="col-12">
            <h2 class="text-uppercase">@lang('bike.geometry.plural')</h2>
        </div>
        <div class="col-12 col-lg-6" style="background-color:#111114 !important;">
            <img src="{{ $bike->geometries->first()->image('picture', 'default', ['w' => 1200]) }}" alt="">
        </div>
        <div class="col-12 col-lg-6">
            @include('site.partials.geometries.table')
        </div>
    </div>
</section>
@endif