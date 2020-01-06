<div class="row">
    <div class="col-12 px-0">
        @if($block->image('default_picture', 'default') != '')
            <img src="{{ $block->image('default_picture', 'default') }}" alt="" width="100%" class="d-none d-lg-block">
        @else
            @if($block->image('desktop_picture', 'default') != '')
                <img src="{{ $block->image('desktop_picture', 'default') }}" alt="" width="100%" class="d-none d-lg-block">
            @endif
        @endif
        @if($block->image('tablet_picture', 'default') != '')
            <img src="{{ $block->image('tablet_picture', 'default') }}" alt="" width="100%" class="d-none d-md-block d-lg-none">
        @endif
        @if($block->image('mobile_picture', 'default') != '')
            <img src="{{ $block->image('mobile_picture', 'default') }}" alt="" width="100%" class="d-block d-md-none">
        @endif

    </div>
</div>