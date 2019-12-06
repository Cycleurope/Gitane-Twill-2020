@if( !$bike->emptyDataSheet() )
<section id="product-specifications" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><span>@lang('bike.specifications')</span></h2>
                <ul>
                    @include('site.partials.bike.datasheet.block_frameset')
                    @include('site.partials.bike.datasheet.block_electric_components')
                    @include('site.partials.bike.datasheet.block_wheels')
                    @include('site.partials.bike.datasheet.block_transmission')
                    @include('site.partials.bike.datasheet.block_components')
                    @include('site.partials.bike.datasheet.block_accessories')
                    @include('site.partials.bike.datasheet.block_other')
                </ul>
            </div>
        </div>
    </div>
</section>

@endif