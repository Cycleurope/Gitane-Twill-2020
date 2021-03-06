@if(count($southamerican_stores) > 0)
<section id="stores-southamerica">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2>@lang('common.south_america')</h2>
            </div>
        </div>
        <div class="row">
        @foreach($southamerican_stores as $store)
        <div class="col-12 col-sm-6 col-lg-4 mb-5">
        <h4><span class="flag-icon flag-icon-{{ $store->countries()->first()->alpha2 }}"></span> {{ $store->shopname }}</h4>
            {{ $store->address1 }}
            <br>{{ $store->postalcode }} {{ $store->city }}
            @if($store->phone != '')
            <br /><i class="fas fa-phone"></i> {{ $store->phone }}
            @endif
            @if($store->email != '')
            <br /><i class="fas fa-paper-plane"></i> {{ $store->email }}
            @endif
        </div>
        @endforeach
        </div>
    </div>
</section>
@endif