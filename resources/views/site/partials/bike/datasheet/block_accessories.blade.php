@if( !$bike->emptyAccessories() )
<li id="specs-accessories">
    <h4>@lang('bike.datasheet.accessory.plural')</h4>
    @if(!empty($bike->translate(app()->getLocale())->mudguards))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.mudguards')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->mudguards }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->racks))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.rack.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->racks }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->chainguard))
    <dl class="row"> 
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.chainguard')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->chainguard }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->lightings))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.lighting.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->lightings }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->stand))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.stand')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->stand }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->plus))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.plus')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->plus }}</dd>
    </dl>
    @endif
</li>
@endif