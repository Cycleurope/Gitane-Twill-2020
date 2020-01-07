<ul class="nav navbar-nav ml-5 mr-5">
    @if(Route::currentRouteName() == "site.bikes.show" || Route::currentRouteName() == "site.pages.show" || Route::currentRouteName() == "site.families.show")
        @foreach($slugs as $slug)
            @php($flag_slug = $slug->locale)
            @if($slug->locale != app()->getLocale())
            @if($slug->locale == "en")
                @php ($flag_slug = "gb")
            @else
            @endif
            <li class="nav-item"><a class="nav-link" href="{{ route(Route::currentRouteName(), ["locale" => $slug->locale, "slug" => $slug->slug  ]) }}"><span class="flag-icon flag-icon-{{ $flag_slug }}"> </span></a></li>
            @endif
        @endforeach
    @else
        @if(app()->getLocale() != "en")
        <li class="nav-item"><a class="nav-link" href="/lang/en"><span class="flag-icon flag-icon-gb"> </span></a></li>
        @endif
        @if(app()->getLocale() != "fr")
        <li class="nav-item"><a class="nav-link" href="/lang/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
        @endif
    @endif
</ul>