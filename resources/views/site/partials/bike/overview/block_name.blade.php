<div class="block-name mb-2">
    <span class="reference">{{ $bike->reference }}</span>
    <h1>{{ $bike->translate(app()->getLocale())->name}}
    @if( $bike->translate(app()->getLocale())->subname != '')
        <span>{{ $bike->translate(app()->getLocale())->subname }}</span>
    @endif
    </h1>
</div>