<div class="col-6 col-md-4 mb-4">
    <h5>@lang('common.bike.plural')</h5>
    <ul>
    @foreach($homenav as $item)
        <li class="nav-item current-item"><a href="{{ route('site.families.show', ['locale' => app()->getLocale(
            ), 'family' => $item->slug ])}}">{{ $item->translate(app()->getLocale())->title }}</a></li>
    @endforeach
    </ul>
</div>