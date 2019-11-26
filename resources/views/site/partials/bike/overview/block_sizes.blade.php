@if(count($bike->sizes) > 0)
<div class="row">
    <div class="col-12 col-sm-6 col-lg-12 block-sizes mb-4">
        <h4>@lang('bike.size.plural')</h4>
        <ul class="sizes-list">
            @foreach($bike->sizes as $s)
            <li class="size-item">{{ $s->title }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif