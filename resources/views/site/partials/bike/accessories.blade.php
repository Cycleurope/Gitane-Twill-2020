@if(count($bike->accessories) > 0)
<section id="product-accessories" class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2><span>@lang('bike.accessory.plural')</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel" id="related-accessories">
            @foreach($bike->accessories as $accessory)
            <div class="col">
                <div class="mb-2"><img src="{{ $accessory->image('picture') }}" alt=""></div>
                <div class="text-center"><h5>{{ $accessory->name }}</h5></div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
@endif