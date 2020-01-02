<section id="home-families">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>@lang('common.family.plural')</h2>
            </div>
        </div>
    </div>
    <div id="families-slider" class="owl-carousel">
        @foreach($families as $f)
        <a href="{{ route('site.families.show', ['locale' => app()->getLocale(), 'slug' => $f->getSlug()]) }}">
            <div class="family-tile">
                @if($f->hasImage('tile'))
                <img src="{{ $f->image('tile', 'default', ['w' => 600]) }}" alt="">
                @else
                @endif
                <div class="overlay overlay-default"></div>
                <div class="content">
                    <div class="inner">
                        <h3>{{ $f->translate(app()->getLocale())->title }}</h3>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>