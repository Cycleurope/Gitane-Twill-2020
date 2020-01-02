@if(Route::currentRouteName() == "site.bikes.show")
<div id="bike-navigation">
    <div class="container-fluid">
        <div class="row">
            <div id="bike-navigation-left" class="mr-auto px-3 py-2">
                <span class="gitane-logo">G</span>
                <span class="name">{{ $bike->name}} {{ $bike->subname }}</span>
                <span class="d-none d-lg-inline">
                <a id="bn-overview" href="#product-overview" class="badge badge-pill bike-nav-item current-item">@lang('bike.overview')</a>
                @if(count($bike->blocks) > 0)
                <a href="#product-features" class="badge badge-pill bike-nav-item">@lang('bike.feature.plural')</a>
                @endif
                @if(!$bike->emptyDatasheet())
                <a href="#product-specifications" class="badge badge-pill bike-nav-item">@lang('bike.specifications')</a>
                @endif
                @if(count($bike->geometries) > 0)
                <a href="#product-geometries" class="badge badge-pill bike-nav-item">@lang('bike.geometry.plural')</a>
                @endif
                @if(count($bike->accessories) > 0)
                <a href="#product-accessories" class="badge badge-pill bike-nav-item">@lang('bike.accessory.plural')</a>
                @endif
                <a href="#product-related" class="badge badge-pill bike-nav-item">@lang('bike.related.plural')</a>
            </span>
            </div>
            <div id="bike-navigation-right" class="ml-auto">
                <a href="{{ route('site.stores', ['locale' => app()->getLocale()]) }}" class="buy-button"><i class="fa fa-shopping-cart"></i><span class="d-none d-md-block">&nbsp;@lang('common.buy_this_bike')</span></span></a>
            </div>
        </div>
    </div>
</div>
@endif