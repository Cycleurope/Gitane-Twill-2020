<div class="row">
    @if($block->translatedInput('heading') != '')
    <h2 class="col-12"><span>{{ $block->translatedInput('heading') }}</span></h2>
    @endif
</div>
<div id="boxes" class="row justify-content-center">
    @foreach( $block->children as $feature)
    <div class="box-feature col-12 col-lg-3">
        <div class="box-feature--picture">
            <img src="{{ $feature->image('feature', 'default') }}" alt="">
        </div>
        <div class="box-feature--info">
            <div><span class="title">{{ $feature->translatedInput('title') }}</span></div>
            <div class="content">{!! $feature->translatedInput('content') !!}</div>
        </div>
    </div>
    @endforeach
</div>