<div class="container py-5">
    <div class="row">
        @foreach($family->bikes as $b)
            @if($b->published)
            <a href="{{ route('site.bikes.show', ['locale' => app()->getLocale(), 'bike' => $b->slug]) }}" class="bike-tile col-12 col-sm-6 col-md-4 px-5 px-sm-2">
                <div class="picture">
                    @if($b->hasImage('gallery'))
                    <img src="{{ $b->image('gallery', 'default', ['w' => 400]) }}" alt="" style="width: 100%">
                    @else
                    <img src="/img/family/default-thumbnail-900-600.jpg" alt="">
                    @endif
                </div>
                <hr class="animated">
                <div class="info">
                    <div class="plus-text">
                        <span>@lang('bike.discover')</span>
                    </div>
                    <div class="name"><h3>{{ $b->translate(app()->getLocale())->name }}</h3></div>
                    <div class="subname">{{ $b->translate(app()->getLocale())->subname }}</div>
                    <hr />
                    @if($b->public_price > 0)
                    <div class="from-price">
                        @if($b->price_from == 1)
                            @lang('bike.price_from')
                        @else
                            @lang('bike.public_price')
                        @endif
                    </div>
                    <div class="public-price">{!! $b->friendlyPublicPrice() !!}</div>
                    <div class="colors">
                        @foreach($b->colors as $c)
                        @if($c->hasImage('color_picture'))
                        <div class="color"><img src="{{ $c->image('color_picture', 'default') }}" alt=""></div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </a>
            @endif
        @endforeach
    </div>
</div>