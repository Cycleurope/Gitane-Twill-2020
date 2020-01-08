<div class="row gblock-feature gblock-left-content-right-picture {{ $block->input('block_theme') }}">
    <div class="col-12 col-md-6 col-xl-5 px-0 ml-xl-auto order-last">
        <div class="inner">
            <div class="feature-content">
                @if($block->translatedInput('side_title') != '')
                <div><span class="title">{{ $block->translatedinput('side_title') }}</span></div>
                @endif
                @if($block->translatedInput('side_subtitle') != '')
                <div><span class="subtitle">{{ $block->translatedinput('side_subtitle') }}</span></div>
                @endif
                <p>{{ $block->translatedinput('side_content') }}</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 px-0 picture-container order-first order-md-last">
        <img src="{{ $block->image('feature', 'squared') }}" alt="" class="d-block d-lg-none">
        <img src="{{ $block->image('feature', 'default') }}" alt="" class="d-none d-lg-block">
    </div>
</div>