@if( !$bike->emptyFrameset() )
<li id="specs-frameset">
    <h4>@lang('bike.datasheet.frameset')</h4>
    @if(!empty($bike->translate(app()->getLocale())->frame))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.frame')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->frame }}</dd>
    </dl>
    @endif
    @if(!empty($bike->translate(app()->getLocale())->fork))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.fork')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->fork }}</dd>
    </dl> 
    @endif
    @if(!empty($bike->translate(app()->getLocale())->rear_suspension))
    <dl class="row">
        <dt class="col-12 col-md-4"><span class="text-capitalize">@lang('bike.datasheet.rear_suspension')</span></dt>
        <dd class="col-12 col-md-8">{{ $bike->translate(app()->getLocale())->rear_suspension }}</dd>
    </dl>   
    @endif      
</li>
@endif