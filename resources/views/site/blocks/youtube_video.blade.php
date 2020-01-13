@if($block->input('video_url') != "")
<div class="row gblock-feature gblock-youtube-video justify-content-center">
    <div class="col-12 col-md-6">
        <div class="embed-container">
            {!! YoutubeEmbed::getEmbed($block->input('video_url')) !!}
        </div>
        <div class="video-info">
            @if($block->translatedInput('video_title') != '')
            <div><span class="title">{{ $block->translatedinput('video_title') }}</span></div>
            @endif
            @if($block->translatedInput('video_description') != '')
            <div><span class="subtitle">{!! $block->translatedinput('video_description') !!}</span></div>
            @endif
        </div>
    </div>
</div>
@endif