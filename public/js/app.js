$(document).ready(function() {
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

    var store_item;
    var address_line1 = '';
    var address_line2 = '';
    var br;
    $('#no-store').hide();
    $("#departments-selector").change(function() {
        $('#no-store').hide();
        var d = $(this).find("option:selected").val();
        console.log("Selected department : " + d);
        $("#stores-list").empty();
        $.ajax({
            url : '/stores/'+d,
            type : 'GET',
            dataType : 'json',
            success : function(data){
                if(data.length == 0) {
                    $('#no-store').show();
                    console.log("No store");
                }
                $.each(data, function(i, store){
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
                    </div>`;
                    $("#stores-list").append(store_item);
                });
            }
        });
    });
});