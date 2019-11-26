@if(count($bike->colors) > 0)
<div class="row">
    <div class="col-12 col-sm-6 col-lg-12 block-colors mb-4">
        <h4>@lang('bike.color.plural')</h4>
        <ul class="colors-list">
            @foreach($bike->colors as $c)
            <li class="color-item col-10">
                <span class="picto"><img src="{{ $c->image('color_picture', 'default') }}" alt="" height="20"></span> {{ $c->translate(app()->getLocale())->color }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif

