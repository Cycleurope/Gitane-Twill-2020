@if($bike->public_price > 0)
<div class="row">
    <div class="block-price col-12 mb-4">
        <div class="from-price">
            @if($bike->price_from == 1)
                @lang('bike.price_from')
            @endif
        </div>
        @if($bike->public_price > 0)
        <span class="public-price">{!! $bike->friendlyPublicPrice() !!}</span>
        <br><span class="ppgc">@lang('bike.public_price')</span>
        @endif
    </div>
</div>
@endif