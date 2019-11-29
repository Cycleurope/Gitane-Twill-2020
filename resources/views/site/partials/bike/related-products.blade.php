@if(count($related_bikes) > 0)
<section id="product-related" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><span>Dans la même famille</span></h2>
            </div>
        </div>
        <div class="row">
            @foreach($related_bikes as $rb)
            <a href="{{ route('site.bikes.show', ['locale' => app()->getLocale(), 'bike' => $rb->slug]) }}" class="bike-tile col-12 col-sm-6 col-md-3">
                <div class="picture">
                    <img src="{{ $rb->image('gallery', 'default')}}" alt="">
                </div>
                <hr class="animated">
                <div class="info">
                    <div class="plus-text">
                        <span>@lang('bike.discover')</span>
                    </div>
                    <div class="name"><h3>{{ $rb->translate(app()->getLocale())->name }}</h3></div>
                    <div class="subname">{{ $rb->translate(app()->getLocale())->subname }}</div>
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
            </a> 
            @endforeach
        </div>
    </div>
</section>
@endif