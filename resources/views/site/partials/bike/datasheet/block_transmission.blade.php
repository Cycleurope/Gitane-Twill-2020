@if( !$bike->emptyTransmission() )
<li id="specs-transmission">
    <h4>@lang('bike.datasheet.transmission')</h4>
    @if(!empty($bike->translate(app()->getLocale())->transmission))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.transmission')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->transmission }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->shifters))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.shifters')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->shifters }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->rear_derailleur))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.rear_derailleur')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->rear_derailleur }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->front_derailleur))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.front_derailleur')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->front_derailleur }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->cassette))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.cassette')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->cassette }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->crankset))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.crankset')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->crankset }}</dd>
    </dl>
    @endif
</li>
@endif