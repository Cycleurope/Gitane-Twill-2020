<div class="col-6 col-md-4 mb-4">
    <h5>@lang('common.gitane_universe')</h5>
    <ul>
    @foreach($pagesnav as $item)
        <li class="nav-item current-item"><a href="{{ route('site.pages.show', ['locale' => app()->getLocale(
            ), 'page' => $item->slug ])}}">{{ $item->translate(app()->getLocale())->title }}</a></li>
    @endforeach
    </ul>
</div>