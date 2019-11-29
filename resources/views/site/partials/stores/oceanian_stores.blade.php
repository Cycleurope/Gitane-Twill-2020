@if(count($oceanian_stores) > 0)
<section id="stores-oceania" class="py-5">
    <div class="row">
        <div class="col-12"><h2>@lang('common.oceania')</h2></div>
    </div>
    <div class="row">
        @foreach($oceanian_stores as $store)
        <div class="col-12 col-sm-6 col-lg-4 mb-5">
            <h6><span class="flag-icon flag-icon-{{ $store->countries->first()->alpha2 }} mr-2"></span>{{ $store->countries->first()->translate(app()->getLocale())->title }}</h6>
                <h4>{{ $store->shopname }}</h4>
                @if($store->address1 != "")
                {{ $store->address1 }}
                @endif
                @if($store->address2 != "")
                <br />{{ $store->address2 }}
                @endif
                <br />{{ $store->postalcode }} {{ $store->city }}
                @if($store->phone != '')
                <br /><i class="fas fa-phone"></i>&nbsp;{{ $store->phone }}
                @endif
                @if($store->email != '')
                <br /><i class="fas fa-paper-plane"></i>&nbsp;{{ $store->email }}
                @endif
            </div>
        @endforeach
    </div>
</section>
@endif