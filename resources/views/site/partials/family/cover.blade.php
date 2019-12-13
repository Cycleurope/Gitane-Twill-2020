<section id="family-cover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="cover-picture">
                    @if($family->hasImage('cover', 'desktop'))
                    <img src="{{ $family->image('cover', 'desktop') }}" alt="" width="100%" class="d-none d-lg-block">
                    @endif
                    @if($family->hasImage('cover', 'tablet'))
                    <img src="{{ $family->image('cover', 'tablet') }}" alt="" width="100%" class="d-none d-md-block d-lg-none">
                    @endif
                    @if($family->hasImage('cover', 'mobile'))
                    <img src="{{ $family->image('cover', 'mobile') }}" alt="" width="100%" class="d-block d-md-none">
                    @endif
                </div>
                <div class="cover-overlay"></div>
                <div class="cover-label">
                    <h1><span>{{ $family->translate(app()->getLocale())->title }}</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
