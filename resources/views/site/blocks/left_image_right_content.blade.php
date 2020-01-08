<div class="row gblock-feature gblock-left-picture-right-content {{ $block->input('block_theme') }}">
    <div class="col-12 col-md-6 col-lg-6 px-0 picture-container">
        <img src="{{ $block->image('feature', 'squared') }}" alt="" class="d-block d-lg-none">
        <img src="{{ $block->image('feature', 'default') }}" alt="" class="d-none d-lg-block">
    </div>
    <div class="col-12 col-md-6 col-xl-5 px-0">
        <div class="inner">
            <div class="feature-content">
                @if($block->translatedInput('side_title') != '')
                <div><span class="title">{{ $block->translatedinput('side_title') }}</span></div>
                @endif
                @if($block->translatedInput('side_subtitle') != '')
                <div><span class="subtitle">{{ $block->translatedinput('side_subtitle') }}</span></div>
                @endif
                {{ $block->translatedinput('side_content') }}
            </div>
        </div>
    </div>
</div>