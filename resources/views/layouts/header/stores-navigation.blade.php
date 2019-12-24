@if(Route::currentRouteName() == "site.stores.index")
    @if($display_global_stores)
    <div id="stores-navigation">
        <div class="container-fluid">
            <div class="row px-3 py-2">
                <a href="#stores-france" class="badge badge-pill store-nav-item current-item">France</a>
                @if(count($european_stores) > 0)
                <a href="#stores-europa" class="badge badge-pill store-nav-item">@lang('common.europa')</a>
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
@endif