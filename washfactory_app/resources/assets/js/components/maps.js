if($('#laundry-room-map').length){
    $('#laundry-room-map').gmap3({
        address: "Antwerpen",
        zoom: 10,
        mapTypeId : google.maps.MapTypeId.ROADMAP,
        fullscreenControl: false,
        mapTypeControl: false,
        navigationControl: false,
        scrollwheel: false,
        streetViewControl: false
    });
}

$(document).ready(function(){
    $(document).on ("click", ".hide-large-map-block", function () {
        $('#laundry-room-map').removeClass('large');
        $('.hide-large-map-block').addClass('non-active');
    });
});

$('#laundry-room-map').click(function(){
    $(this).addClass('large');
    $('.hide-large-map-block').removeClass('non-active');
});
