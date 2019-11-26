@if($family->translate(app()->getLocale())->description != "")
<section id="family-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 heading">
                <p>{{ $family->translate(app()->getLocale())->description }}</p>
            </div>
        </div>
    </div>
</section>
@endif