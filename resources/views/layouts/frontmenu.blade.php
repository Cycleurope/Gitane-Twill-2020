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
            @include('layouts.current-route-localization-switcher')
        </div>
    </nav>
    @include('layouts.header.families-navigation')
    @include('layouts.header.bikes-navigation')
    @include('layouts.header.stores-navigation')

</header> 