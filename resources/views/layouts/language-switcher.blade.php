<ul class="nav navbar-nav ml-5 mr-5">
    @if(app()->getLocale() == 'fr')
        <li class="nav-item"><a class="nav-link" href="/lang/en"><span class="flag-icon flag-icon-gb"> </span></a></li>
    @elseif(app()->getLocale() == 'en')
        <li class="nav-item"><a class="nav-link" href="/lang/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
    @else
    @endif
</ul>