@if($autopromo_title != '' && $autopromo_content != '')
<div class="container">
    <div class="row">
        <div class="col-12 bg-light py-5  px-5 text-center" style="border: 1px solid #f6f6f6;">
            <h3>{{ $autopromo_title }}</h3>
            {!! $autopromo_content !!}
            @if($autopromo_link != '' && $autopromo_label != '')
            <a href="{{ $autopromo_link }}" target='_blank' class="bigbutton" rel='noopener'>{{ $autopromo_label }}</a>
            @endif
        </div>
    </div>
</div>
@endif