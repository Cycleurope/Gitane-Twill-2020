@if($family->file('book', app()->getLocale()) != '')
<section id="download-book" class="py-5">
    <div class="container">
        <div class="row">
            <a href="{{ $family->file('book', app()->getLocale()) }}" target="_blank" download class="col-12 bigbutton bugbutton-blue"><i class="fa fa-file-pdf"></i>&nbsp; Télécharger le catalogue</a>
        </div>
    </div>
</section>
@endif