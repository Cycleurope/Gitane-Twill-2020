@if( !$bike->emptyComponents() )
<li id="specs-components">
    <h4>@lang('bike.datasheet.component.plural')</h4>
    @if(!empty($bike->translate(app()->getLocale())->saddle))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.saddle')</span></dt>
        <dd class="col-8">{{ $bike->translate(app()->getLocale())->saddle }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->seatpost))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.seatpost')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->seatpost }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->handlebars))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.handlebars')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->handlebars }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->stem))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.stem')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->stem }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->brakes))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.brake.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->brakes }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->pedals))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.pedal.plural')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->pedals }}</dd>
    </dl>
    @endif
</li>
@endif