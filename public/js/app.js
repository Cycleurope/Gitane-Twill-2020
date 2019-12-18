$(document).ready(function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiY3ljbGV1cm9wZSIsImEiOiJjazM1eWRtdHIxNDB0M2NtcXhzdWlhM3A4In0.lEz4u41ef6BjjWPcr-4eHg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [3.69812, 48.5212],
        zoom: 9
    });

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
                $.each(data.stores, function(i, store){
                    if(store.address1 != '') {
                        address_line1 = store.address1;
                        br = "<br>";
                    }
                    if(store.address2 != '') {
                        address_line2 = "<br>"+store.address2;
                        br = "<br>";
                    }
                    store_item = 
                    `<div class="col-12 col-sm-6 col-lg-4 mb-5">
                        <h4>`+store.shopname+`</h4>
                        `+address_line1+address_line2+`
                        `+br+store.postalcode+` `+store.city+`
                        <br /><i class="fas fa-phone"></i> `+store.phone+`
                        <br /><i class="fas fa-paper-plane"></i> `+store.email+`
                        <br />LatLng `+store.latitude+'-'+store.longitude+`
                    </div>`;
                    $("#stores-list").append(store_item);
                    if(store.longitude != null & store.latitude != null) {
                        item = {
                            type: 'Store',
                            geometry: {
                                type: 'Point',
                                coordinates: [store.longitude, store.latitude]
                            },
                            properties: {
                                title: store.shopname,
                                description: store.postalcode+' '+store.city+'<hr />Tel : 03.25.39.39.39'
                            }
                        }
                        storesJSON.stores.push(item);
                    }
                });
                console.log(storesJSON);
                storesJSON.stores.forEach(function(marker) {

                    var el = document.createElement('div');
                    el.className = 'marker';
                  
                    new mapboxgl.Marker(el)
                      .setLngLat(marker.geometry.coordinates)
                      .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                      .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
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