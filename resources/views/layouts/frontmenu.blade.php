<header data-scroll-header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">Gitane</a>     
        <button class="navbar-toggler animated" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span><span></span><span></span>
        </button>          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @foreach($homenav as $f)
                    @if($f->published)
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.families.show', ['locale' => app()->getLocale(
                            ), 'family' => $f->slug ])}}">{{ $f->translate(app()->getLocale())->title }}</a></li>
                    @endif
                @endforeach
            
            </ul>
            <ul class="nav navbar-nav ml-0 mr-0">
                <li class="nav-item fad"><a class="nav-link" href="{{ route('site.stores', ['locale' => app()->getLocale()]) }}"><i class="fas fa-map-marker-alt mr-2"></i> @lang('common.find_a_dealer')</a></li>
            </ul>
            <ul class="nav navbar-nav ml-5 mr-5">
                @if(app()->getLocale() == 'fr')
                    <li class="nav-item"><a class="nav-link" href="/lang/en"><span class="flag-icon flag-icon-gb"> </span></a></li>
                @elseif(app()->getLocale() == 'en')
                    <li class="nav-item"><a class="nav-link" href="/lang/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
                @else
                @endif
            </ul>
        </div>
    </nav>
    @isset($bike)
    <div id="bike-navigation">
        <div class="container-fluid">
            <div class="row px-3 py-2">
                <div id="bike-navigation-left" class="mr-auto">
                    <span class="gitane-logo">G</span>
                    <span class="name">{{ $bike->name}} {{ $bike->subname }}</span>
                    <span class="d-none d-lg-inline">
                    <a id="bn-overview" href="#product-overview" class="badge badge-pill bike-nav-item">@lang('bike.overview')</a>
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
            </div>
        </div>
    </div>
    @endif
    @isset($stores)
    <div id="stores-navigation">
        <div class="container-fluid">
            <div class="row px-3 py-2">
                <a href="#stores-france" class="badge badge-pill store-nav-item current-item">France</a>
                @if(count($european_stores) > 0)
                <a href="#stores-europa" class="badge badge-pill store-nav-item current-item">@lang('common.europa')</a>
                @endif
                @if(count($northamerican_stores) > 0)
                <a href="#stores-northamerica" class="badge badge-pill store-nav-item">@lang('common.north_america')</a>
                @endif
                @if(count($southamerican_stores) > 0)
                <a href="#stores-southamerica" class="badge badge-pill store-nav-item">@lang('common.south_america')</a>
                @endif
                @if(count($african_stores) > 0)
                <a href="#stores-africa" class="badge badge-pill store-nav-item">@lang('common.africa')</a>
                @endif
                @if(count($asian_stores) > 0)
                <a href="#stores-asia" class="badge badge-pill store-nav-item">@lang('common.asia')</a>
                @endif
                @if(count($oceanian_stores) > 0)
                <a href="#stores-oceania" class="badge badge-pill store-nav-item">@lang('common.oceania')</a>
                @endif
            </div>
        </div>
    </div>
    @endif

</header> 