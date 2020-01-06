@if(count($bike->blocks) > 0)
<section id="product-features" class="py-0" style="border-top: 1px solid #f4f4f4;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                {!! $bike->renderBlocks() !!}
            </div>
        </div>
    </div>
</section>
@endif