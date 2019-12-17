@if(count($bike->certificates) > 0)
<div class="row">
    <div class="col-12 col-sm-6 col-lg-12 block-colors mb-4">

        <a href="{{ $bike->certificates->first()->file('cerfile') }}">{{ $bike->certificates->first()->files()->first() }}</a>
    </div>
</div>
@endif
