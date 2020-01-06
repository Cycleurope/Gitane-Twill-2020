@if(count($slides) > 0)
<div id="home-slider" class="owl-carousel" style="">
    @foreach($slides as $slide)
    <div class="slide px-0">
        <img src="{{ $slide->image('square_slide', 'default') }}" alt="" class="d-block d-lg-none">
        <img src="{{ $slide->image('tablet_slide', 'default') }}" alt="" class="d-none d-lg-block d-xl-none">
        <img src="{{ $slide->image('desktop_slide', 'default') }}" alt="" class="d-none d-xl-block">
        <div class="overlay"></div>
        <div class="caption">
            <div class="container">
                <div class="row">
                    @if($slide->translate(app()->getLocale())->title != "")
                    <div class="col-12">
                        <div class="heading-container">
                            <span class="heading">{{ $slide->translate(app()->getLocale())->title }}</span>
                        </div>
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