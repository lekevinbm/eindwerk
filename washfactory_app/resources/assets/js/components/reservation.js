$(document).ready(function(){
    $('.reserved-device').each(function(index,element){
        var reservation_status = $(element).find('.reserved-device-status-input').val();
        var reservation_block = element;
        if(reservation_status == 'reservation made'){

            // Set the date we're counting down to
            var countDownDate = new Date(new Date($(element).find('.reservation-creation-input').val()).getTime() + 10*60000);

            // Update the count down every 1 second
            var x = setInterval(function() {
            // Time of start
            var datetime_of_reservation_creation = new Date().getTime();
            

            // Find the distance between now an the count down date
            var distance = countDownDate - datetime_of_reservation_creation;

            // Time calculations for minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if(seconds < 10){
                seconds = '0' + seconds;
            }

            // Display the result
            $(element).find('.times-left').text(minutes +":"+seconds);

            // If the count down is finished, write some text 
            if (distance < 0) {
                clearInterval(x);
                alert('Het toestel dat u gereserveerd heeft is weer vrij.');
                $(element).find('.times-left').text("0:00");
                clearUnusedReservations()
            }
            }, 1000);
        }else if(reservation_status == 'running'){
            // Set the date we're counting down to
            var countDownDate = new Date($(element).find('.reservation-end-input').val()).getTime();
            // Update the count down every 1 second
            var x = setInterval(function() {
            // Time of start
            var datetime_of_reservation_creation = new Date().getTime();
            

            // Find the distance between now an the count down date
            var distance = countDownDate - datetime_of_reservation_creation;

            // Time calculations for minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if(seconds < 10){
                seconds = '0' + seconds;
            }

            // Display the result
            $(element).find('.times-left').text(minutes +":"+seconds);

            // If the count down is finished, write some text 
            if (distance < 0) {
                clearInterval(x);
                alert('Uw was is afgelopen.');
                $(element).find('.times-left').text("0:00");
                finishReservations()
            }
            }, 1000);
        }
    });

    if($('.open-reservation-page').length){
        if($('#device-ended-on-input').val()){
            // Set the date we're counting down to
            var countDownDate = new Date($('#device-ended-on-input').val()).getTime();
            // Update the count down every 1 second
            var x = setInterval(function() {
            // Time of start
            var datetime_of_reservation_creation = new Date().getTime();
            

            // Find the distance between now an the count down date
            var distance = countDownDate - datetime_of_reservation_creation;

            // Time calculations for minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if(seconds < 10){
                seconds = '0' + seconds;
            }

            // Display the result
            $('.time-status').text(minutes +":"+seconds);

            // If the count down is finished, write some text 
            if (distance < 0) {
                clearInterval(x);
                alert('Uw was is afgelopen.');
                $('.time-status').text("0:00");
                finishReservations()
            }
            }, 1000);
        }
    }
});

var clearUnusedReservations = function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({url: "/app/reservation/clearunusedreservations", method:"get",success: function(result){             
        location.reload();
    }});
}

var finishReservations = function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({url: "/app/reservation/finishreservations", method:"get",success: function(result){             
        location.reload();
    }});
}
