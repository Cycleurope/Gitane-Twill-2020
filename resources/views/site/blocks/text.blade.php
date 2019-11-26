<div class="row block {{$block->input('theme')}}">
    <div class="col-12 text-center py-5">
        @if(!empty($block->translatedInput('title')))
        <h3>{{ $block->translatedInput('title') }}</h3>
        @endif
        {!! $block->translatedInput('content') !!}
    </div>
</div>