@if($bike->hasImage('cover'))
<div id="cover" class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="cover-picture">
                @if($bike->hasImage('cover', 'default'))
                <img src="{{ $bike->image('cover', 'default') }}" alt="" width="100%" class="d-none d-lg-block">
                @endif
                @if($bike->hasImage('cover', 'default'))
                <img src="{{ $bike->image('cover', 'default') }}" alt="" width="100%" class="d-none d-md-block d-lg-none">
                @endif
                @if($bike->hasImage('cover', 'squared'))
                <img src="{{ $bike->image('cover', 'squared') }}" alt="" width="100%" class="d-block d-md-none">
                @endif
            </div>
            <div class="cover-overlay"></div>
        </div>
    </div>
</div>
@endif