@if(count($bike->sizes) > 0)
<div class="col-12 col-sm-6 col-xl-12 block-sizes mb-4">
    <h4>Tailles</h4>
    <div id="sizes-palette" class="row">
        @foreach($bike->sizes as $s)
        <div class="size-item">
            <div class="contour"></div>
            <div class="label">{{ $s->title }}</div>
        </div>
        @endforeach
    </div>
</div>
@endif