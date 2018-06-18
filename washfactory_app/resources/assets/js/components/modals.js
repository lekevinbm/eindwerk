$('.device-square.unoccupied').click(function(){
    var device_id = $(this).attr('id').split('-')[1];
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({url: "/app/devices/getdevice", method:"get",data:{device:device_id},success: function(device){             
        var device_number = device.code_name.split('-')[2];
        if(device.type == 'wash'){
            $('#confirm_modal .device-type-number').text('Wasmachine '+device_number);
        }else{
            $('#confirm_modal .device-type-number').text('Wasdroger '+device_number);
            $('#confirm_modal .switch-row').hide();
        }
        $('#confirm_modal .device-address').html(device.location.name+'<br>'+device.location.postcode+' '+device.location.city);
        $('#create_reservation_form #device-id-input').val(device_id);
    }});
});
$('.device-square.occupied').click(function(){

});

$('#settings-footer-btn').click(function(){
    $('.settings-menu').addClass('active');
    $('.settings-menu-content').addClass('active');
});

$('.settings-menu').click(function(){
    $('.settings-menu-content').removeClass('active');
    $('.settings-menu').removeClass('active');
    
});