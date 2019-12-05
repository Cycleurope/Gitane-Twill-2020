@if($family->hasImage('desktop_cover'))
<section id="family-cover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="cover-picture"><img src="{{ $family->image('desktop_cover') }}" alt="" width="100%"></div>
                <div class="cover-overlay"></div>
                <div class="cover-label">
                    <h1><span>{{ $family->translate(app()->getLocale())->title }}</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endif