@if( !$bike->emptyOther() )
<li id="specs-weight">
    @if(!empty($bike->weight))
    <h4>@lang('bike.datasheet.weight')</h4>
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.weight')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->weight }}</dd>
    </dl>
    @endif
</li>
@endif