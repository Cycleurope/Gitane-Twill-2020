@if(count($slides) > 0)
<div id="home-slider" class="owl-carousel">
    @foreach($slides as $slide)
    <div class="slide-item">
        <img src="{{ $slide->image('mobile_slide', 'default') }}" alt="" class="d-block d-sm-none">
        <img src="{{ $slide->image('tablet_slide', 'default') }}" alt="" class="d-none d-sm-block d-md-none">
        <img src="{{ $slide->image('desktop_slide', 'default') }}" alt="" class="d-none d-md-block">
        <div class="overlay"></div>
        <div class="content">
            <div class="inner">
                @if($slide->translate(app()->getLocale())->title != "")
                <h1>{{ $slide->translate(app()->getLocale())->title }}</h1>
                @endif
                @if($slide->translate(app()->getLocale())->subheading != "")
                <div class="subheading mb-2"><span>{{ $slide->translate(app()->getLocale())->subheading }}</span></div>
                @endif
                @if($slide->translate(app()->getLocale())->link != "")
                <a href="{{ $slide->translate(app()->getLocale())->link }}" 
                    class="more"
                    @if( $slide->target_blank )
                    target="_blank"
                    @endif
                    >{{ $slide->translate(app()->getLocale())->label }}</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif