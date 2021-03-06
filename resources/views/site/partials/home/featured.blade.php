@if(count($featured) > 0)
<section id="home-featured" class="py-5">
    <div class="container-fluid px-0">
        <div class="row px-0">
            <div class="col-12 px-0">
                <h2><span>@lang('common.focus')</span></h2>
            </div>
        </div>
        <div class="owl-carousel" id="featured-products">
            @foreach($featured as $f)
            <a href="{{ route('site.bikes.show', ['locale' => app()->getLocale(), 'bike' => $f->slug]) }}" class="tile col-12 px-0">
                <div class="picture">
                    <img src="{{ $f->image('gallery', 'default', ['w' => 600]) }}" alt="" style="width: 100%">
                </div>
                <hr class="animated">
                <div class="info">
                    <div class="plus-text">
                        <span>@lang('bike.discover')</span>
                    </div>
                    <div class="info-name">
                        <div class="name"><h3>{{ $f->translate(app()->getLocale())->name }}</h3></div>
                    <div class="subname">{{ $f->translate(app()->getLocale())->subname }}</div>
                    </div>
                    <hr />
                    <div class="from-price">
                        @if($f->price_from == 1)
                            @lang('bike.price_from')
                        @else
                            @lang('bike.public_price')
                        @endif
                    </div>
                    <div class="public-price">{!! $f->friendlyPublicPrice() !!}</div>
                    <div class="colors">
                        @foreach($f->colors as $c)
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