@if( !$bike->emptyElectricComponents() )
    <li id="specs-e">
        <h4>@lang('bike.datasheet.electric_component.plural')</h4>
        @if(!empty($bike->translate(app()->getLocale())->engine))
        <dl class="row">
            <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.engine')</span></dt>
            <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->engine }}</dd>
        </dl>
        @endif
        @if(!empty($bike->translate(app()->getLocale())->battery))
        <dl class="row">
            <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.battery')</span></dt>
            <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->battery }}</dd>
        </dl>
        @endif
        @if(!empty($bike->translate(app()->getLocale())->display))
        <dl class="row">
            <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.display')</span></dt>
            <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->display }}</dd>
        </dl>
        @endif
        @if(!empty($bike->translate(app()->getLocale())->distance_range))
        <dl class="row">
            <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.distance_range')</span></dt>
            <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->distance_range }}</dd>
        </dl>
        @endif
        @if(!empty($bike->translate(app()->getLocale())->charger))
        <dl class="row">
            <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.charger')</span></dt>
            <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->charger }}</dd>
        </dl>
        @endif
    </li>
    @endif