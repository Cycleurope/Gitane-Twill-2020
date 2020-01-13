@if(count($bike->colors) > 0)
<div class="col-12 block-colors mb-4">
    <h4>Couleurs</h3>
    <div id="colors-palette" class="row">
        @foreach($bike->colors as $c)
        <div class="color-item">
            <div class="picto"><img src="{{ $c->image('color_picture', 'default') }}" alt="" height="20"></div>
            <div class="label">{{ $c->translate(app()->getLocale())->color }}</div>
        </div>
        @endforeach
    </div>
</div>
@endif

