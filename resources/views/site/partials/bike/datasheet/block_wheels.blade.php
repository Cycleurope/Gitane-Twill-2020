@if( !$bike->emptyWheels() )
<li id="specs-wheels">
    <h4>@lang('bike.datasheet.wheel.plural')</h4>
    @if(!empty($bike->translate(app()->getLocale())->rims))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.rim.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->rims }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->hubs))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.hub.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->hubs }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->tires))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.tire.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->tires }}</dd>
    </dl>
    @endif
</li>
@endif