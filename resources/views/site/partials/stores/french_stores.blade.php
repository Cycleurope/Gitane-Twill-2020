<div class="row py-5">
    <div class="col-12"><h2>France</h2></div>
    <div class="col-12">
        <h3>@lang('common.select_a_region')</h3>
        <select name="departments-selector" id="departments-selector" class="form-control">
            <option value="" disabled selected>@lang('common.select_a_region')</option>
            @foreach($departments as $d)
            <option value="{{ $d->number }}">{{ $d->number }} - {{ $d->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="mb-5" id="no-store">
    <h3 class="text-primary">Oups !</h3>
    @lang('common.no_store_for_this_region')</div>
<div id="stores-list" class="row mb-5">    

</div>