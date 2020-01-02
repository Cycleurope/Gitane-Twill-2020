@if(count($related_bikes) > 0)
<section id="product-related">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><span>@lang('common.related_products')</span></h2>
            </div>
        </div>
        <div class="row">
            @foreach($related_bikes as $rb)
            @if($rb->id != $bike->id)
            <div href="{{ route('site.bikes.show', ['locale' => app()->getLocale(), 'bike' => $rb->slug]) }}" class="tile col-12 col-sm-6 col-md-4">
                <div class="picture">
                    <img src="{{ $rb->image('gallery', 'default')}}" alt="">
                </div>
                <hr class="animated">
                <div class="info">
                    <div class="plus-text">
                        <span>@lang('bike.discover')</span>
                    </div>
                    <div class="info--name">
                        <h3>{{ $rb->translate(app()->getLocale())->name }}</h3>
                        @if($rb->translate(app()->getLocale())->subname != '')
                        <span class="subname">{{ $rb->translate(app()->getLocale())->subname }}</span>
                        @endif
                    </div>
                    <hr />
                    <div class="from-price">PRIX PUBLIC</div>
                    <div class="public-price">{{ $rb->public_price }} €</div>
                    <div class="colors">
                        @foreach($rb->colors as $c)
                        @if($c->hasImage('color_picture'))
                        <div class="color"><img src="{{ $c->image('color_picture', 'default') }}" alt=""></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div> 
            @endif
            @endforeach
        </div>
    </div>
</section>
@endif