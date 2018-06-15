

var currentPosition;
var locations;
var location_array = [];
var info_window_content_array = [];

$(document).ready(function(){
    $(document).on ("click", ".hide-large-map-block", function () {
        $('#laundry-room-map').removeClass('large');
        $('.hide-large-map-block').addClass('non-active');
    });

    if($('#laundry-room-map').length){
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({url: "/locations/getall", method:"get",success: function(result){             
            locations = result;
            navigator.geolocation.getCurrentPosition(setCurrentPosition,setPostitionBasedOnAddress);
        }});
    }
});

var setCurrentPosition = function(position){
    currentPosition = [position.coords.latitude, position.coords.longitude];
    $('#laundry-room-map').gmap3({
        center: currentPosition,
        zoom: 12,
        mapTypeId : google.maps.MapTypeId.ROADMAP,
        fullscreenControl: false,
        mapTypeControl: false,
        navigationControl: false,
        scrollwheel: false,
        streetViewControl: false
    });
    
    showDetailsOfMap();
}

var setPostitionBasedOnAddress = function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({url: "/user/getaddress", method:"get",success: function(result){             
        currentPosition = result;
        $('#laundry-room-map').gmap3({
            address: currentPosition,
            zoom: 12,
            mapTypeId : google.maps.MapTypeId.ROADMAP,
            fullscreenControl: false,
            mapTypeControl: false,
            navigationControl: false,
            scrollwheel: false,
            streetViewControl: false
        })
        .marker(location_array)
        .infowindow(info_window_content_array)
        .then(function (infowindow) {
            var map = this.get(0);
            var marker = this.get(1);
            marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
        });
        showDetailsOfMap();
    }});
}

var showDetailsOfMap = function(){
    $.each(locations,function(index,location){
        var address_string = location.street_name+" "+location.street_number+", "+location.postcode+" "+location.city+", België";
        location_array.push({address: address_string});
        info_window_content_array.push({content: address_string});
        $('#laundry-room-map').gmap3()
        .route({
            origin:currentPosition,
            destination:location.street_name+" "+location.street_number+", "+location.postcode+" "+location.city+", België",
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        }).directionsrenderer(function (results) {
            location.distance = results.routes[0].legs[0].distance.text.split(' ')[0];
            if(index == locations.length - 1){
                var sorted_locations = locations.sort(function(a,b) {return (a.distance > b.distance) ? 1 : ((b.distance > a.distance) ? -1 : 0);} );
                $.each(locations,function(index,location){
                    $('#page-content').append("<a href='/reservation/create/step2?location="+location.id+"'><div id='choose-device-type-page-activator' class='row app-text-row page-slide-activator'>\
                        <div class='app-text-row-large'><span class='big-text'>"+location.name+"</span><br><span class='small-text'>"+location.postcode+" "+location.city+"</span></div>\
                        <div class='app-text-row-large-value'>"+location.distance+" km</div>\
                        <div class='app-text-row-large-end'><i class='fas fa-angle-right'></i></div>\
                    </div></a>");
                });
                $('#laundry-room-map').gmap3().marker(location_array)
                .infowindow(info_window_content_array)
                .then(function (infowindow) {
                    var map = this.get(0);
                    var marker = this.get(1);
                    console.log(this);
                    marker.addListener('click', function() {
                      infowindow.open(map, marker);
                    });
                });              
            }
        });
    });
};

$('#laundry-room-map').click(function(){
    $(this).addClass('large');
    $('.hide-large-map-block').removeClass('non-active');
});
