$('#register-page-1-btn').click(function(){
    var firstname = $('#register-page-1 #firstname').val();
    var lastname = $('#register-page-1 #lastname').val();
    var password = $('#register-page-1 #password').val();
    var confirmed_password = $('#register-page-1 #password-confirm').val();
    if(firstname && lastname && password && confirmed_password){
        $('#register-page-1').removeClass('active');
        $('#register-page-2').addClass('active');
    }
});