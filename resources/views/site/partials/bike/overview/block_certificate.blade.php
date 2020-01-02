@if(count($bike->certificates) > 0)
<div class="row">
    <div class="col-12 block-colors mb-4">
        <a href="{{ $bike->certificates->first()->file('cerfile') }}" download target="_blank" class="bigbutton bigbutton-blue"><i class="fas fa-file-pdf"></i> Certificat de conformité</a>
    </div>
</div>
@endif
