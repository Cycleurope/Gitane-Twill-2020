$(document).ready(function() {

    $('.navbar-toggler').click(function() {
        $(this).toggleClass('open');
    });
    $('#related-accessories').owlCarousel({
        responsive: {
            0: {
                items: 4,
            },
            768: {
                items: 6
            }
        }
    });
    $('#related-bikes').owlCarousel({
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 4
            }
        }
    });
    $('#home-slider').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
    });
    $('#featured-products').owlCarousel({
        loop:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                loop:true
            }
        }
    });
    $('#families-slider').owlCarousel({
        loop:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                loop:false
            }
        }
    });
    $('#product-pictures').owlCarousel({
        'items': 1,
        'loop': true,
        'autoplay': true,
    });
    $('.bike-nav-item').click(function() {
        $('.bike-nav-item').each(function() {
            $(this).removeClass('current-item');
        });
        $(this).addClass('current-item');
    });
    $('.store-nav-item').click(function() {
        $('.store-nav-item').each(function() {
            $(this).removeClass('current-item');
        });
        $(this).addClass('current-item');
    }); 

    mapboxgl.accessToken = 'pk.eyJ1IjoiY3ljbGV1cm9wZSIsImEiOiJjazM1eWRtdHIxNDB0M2NtcXhzdWlhM3A4In0.lEz4u41ef6BjjWPcr-4eHg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [3.69812, 48.5212],
        style: 'mapbox://styles/cycleurope/ck35yw6hf09dl1cpanzup9way',
        zoom: 9,
    });

    map.scrollZoom.disable();
    map.addControl(new mapboxgl.NavigationControl());

    var geoJSON =  {
        type: 'FeaturesCollection',
        features: [{
            type: 'Store',
            geometry: {
                type: 'Point',
                coordinates: [3.69812, 48.5212]
            },
            properties: {
                title: 'CYCLEUROPE INDUSTRIES S.A.S.',
                description: '161, rue Gabriel Péri<br />10104 Romilly-sur-Seine<hr />Tel : 03.25.39.39.39'
            }
        }]
    }

    console.log(geoJSON);

    var storesJSON = {
        type: 'StoresCollection',
        stores: []
    };

    geoJSON.features.forEach(function(marker) {

        var el = document.createElement('div');
        el.className = 'marker';
      
        new mapboxgl.Marker(el)
          .setLngLat(marker.geometry.coordinates)
          .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
          .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
          .addTo(map);

      });


    var scroll = new SmoothScroll('a[href*="#"]',{
        header: '[data-scroll-header]',
        speed: 300
	});

    var store_item;
    var address_line1 = '';
    var address_line2 = '';
    var br;
    $('#no-store').hide();
    $("#departments-selector").change(function() {
        $('#no-store').hide();
        var d = $(this).find("option:selected").val();
        $("#stores-list").empty();
        $.ajax({
            url : '/stores/'+d,
            type : 'GET',
            dataType : 'json',
            success : function(data){
                if(data.department.latitude != null && data.department.longitude != null) {
                    map.flyTo({
                        center: [
                            data.department.longitude,
                            data.department.latitude
                        ],
                        zoom: data.department.mapzoom,
                        essential: true // this animation is considered essential with respect to prefers-reduced-motion
                    });
                }
                if(data.stores.length == 0) {
                    $('#no-store').show();
                    console.log("No store");
                }
                $("#dealers-list").empty();

                $.each(data.stores, function(i, store){
                    $("#dealers-list").append(displayStoreBlock(store));
                    if(store.longitude != null & store.latitude != null) {
                        item = {
                            type: 'Store',
                            velox: store.velox,
                            geometry: {
                                type: 'Point',
                                coordinates: [store.longitude, store.latitude]
                            },
                            properties: {
                                title: store.shopname,
                                isVelox: store.velox,
                                address1: store.address1,
                                address2: store.address2,
                                postalcode: store.postalcode,
                                city: store.city,
                                phone: store.phone,
                                email: store.email,
                            }
                        }
                        storesJSON.stores.push(item);
                    }
                });
                console.log(storesJSON);
                storesJSON.stores.forEach(function(marker) {

                    var el = document.createElement('div');
                    el.className = 'marker';
                    if(marker.velox == true) {
                        el.className = 'marker-velox';
                    }

                    block_velox = '';
                    block_address = '';
                    block_phone = '';
                    block_email = '';

                    if(marker.properties.isVelox) {
                        block_velox = '<h4><span class="velox-label">Velo <span class="and">&</span> Oxygen</span></h4>';
                    }

                    if(marker.properties.address2 != '' && marker.properties.address2 != null) {
                        block_address = marker.properties.address1 + '<br />' + marker.properties.address2 + '<br />' + marker.properties.postalcode + ' ' + marker.properties.city;
                    } else {
                        block_address = marker.properties.address1 + '<br />' + marker.properties.postalcode + ' ' + marker.properties.city;
                    }

                    if(marker.properties.phone != '' && marker.properties.phone != null) {
                        block_phone = '<li><i class="fas fa-phone"></i> ' + marker.properties.phone + '</li>';
                    } else {
                        block_phone = "Pas de phone";
                    }
                    
                    if(marker.properties.email != '') {
                        block_email = '<li><i class="fas fa-paper-plane"></i> ' + marker.properties.email + '</li>';
                    }
                  

                    new mapboxgl.Marker(el)
                        .setLngLat(marker.geometry.coordinates)
                        .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                        .setHTML(
                            `
                            <h3>` + marker.properties.title + `</h3>
                            ` + block_velox
                            + block_address
                            +  `<ul>`
                            + block_phone
                            + block_email
                            + `</ul>`
                        ))
                        .addTo(map);
            
                  });
            }
        });
        $.ajax({
            url : '/geostores/'+d,
            type : 'GET',
            dataType : 'json',
            success : function(data){
            }
        });
    });
});

function displayStoreBlock(store) {
    var store = store;
    store_name = store.shopname;
    store_address1 = store.address1;
    store_address2 = store.address2;
    store_postalcode = store.postalcode;
    store_phone = store.phone;
    store_email = store.email;
    is_velox = store.velox;
    block_velox = '';
    if(is_velox) {
        block_velox = `<h3>VELO & OXYGEN</h3>`;
    }

    if(store_address1 != null || store_address1 != '') {
        block_address1 = store_address1;
    }
    if(store_address2 != null || store_address2 != '') {
        block_address2 = `<br />`+store_address2;
    }

    var tpl = 
    `<div class="dealer-item px-4 py-5">
        <h2>`+store_name+`</h2>
        `+block_velox+`
        `+store_address1+store_address2+`<br />`+store.postalcode+` `+store.city+`
        <hr class="light">
        <i class="fas fa-phone"></i> `+store.phone+`
        <br /><i class="fas fa-paper-plane"></i> `+store.email+`
        <br /><button class="btn btn-framed filled filled-dark">Localiser</button>
    </div>`;

    return tpl;
}