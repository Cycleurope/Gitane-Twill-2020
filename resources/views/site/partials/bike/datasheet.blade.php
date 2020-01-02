@if( !$bike->emptyDataSheet() )
<section id="product-specifications">
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
        @if($bike->file('datasheet', app()->getLocale()) != '')
        <div class="row">
            <a href="{{ $bike->file('datasheet', app()->getLocale()) }}" download target="_blank" class="col-12 bigbutton bigbutton-dark"><i class="fas fa-file-pdf"></i> Télécharger la fiche technique</a>
        </div>
        @endif
    </div>
</section>

@endif