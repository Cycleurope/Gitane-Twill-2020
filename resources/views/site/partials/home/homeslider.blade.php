@if(count($slides) > 0)
<div id="home-slider" class="owl-carousel">
    @foreach($slides as $slide)
    <div class="slide">
        <img src="{{ $slide->image('mobile_slide', 'default') }}" alt="" class="d-block d-sm-none">
        <img src="{{ $slide->image('square_slide', 'default') }}" alt="" class="d-none d-sm-block d-lg-none">
        <img src="{{ $slide->image('tablet_slide', 'default') }}" alt="" class="d-none d-lg-block d-xl-block">
        <img src="{{ $slide->image('desktop_slide', 'default') }}" alt="" class="d-none d-xl-block">
        <div class="overlay"></div>
        <div class="caption">
            <div class="container">
                <div class="row">
                    @if($slide->translate(app()->getLocale())->title != "")
                    <div class="col-12 mb-5">
                        <span class="heading">{{ $slide->translate(app()->getLocale())->title }}</span>
                    </div>
                    @endif
                    @if($slide->translate(app()->getLocale())->link != "")
                    <div class="col-12">
                        <a href="{{ $slide->translate(app()->getLocale())->link }}" 
                            class="flatbutton"
                            @if( $slide->target_blank )
                            target="_blank"
                            @endif
                            >{{ $slide->translate(app()->getLocale())->label }}</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif