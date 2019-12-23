<section id="stores-france">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-lg-4 px-0">
            <div>
                <select name="departments-selector" id="departments-selector" class="form-control">
                    <option value="" disabled selected>@lang('common.select_a_region')</option>
                    @foreach($departments as $d)
                    <option value="{{ $d->number }}">{{ $d->number }} - {{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
            <div id="dealers-list">
                <div class="alert alert-secondary">Sélectionnez une région ...</div>
            </div>
        </div>
        <div id="map" class="col-8 d-none d-lg-block px-0"></div>
    </div>

    </div>

</section>