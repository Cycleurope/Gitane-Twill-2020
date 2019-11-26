@if(count($bike->blocks) > 0)
<section id="product-features">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                {!! $bike->renderBlocks() !!}
            </div>
        </div>
    </div>
</section>
@endif