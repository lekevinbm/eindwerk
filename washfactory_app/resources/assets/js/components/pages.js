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

$('.page-slide-activator').click(function(){
    var activator_id = $(this).attr('id').split('-');
    activator_id.splice(-1,1);
    var target_id = activator_id.join('-');
    console.log(target_id);
    $('#'+target_id).addClass('active-child-slide');
    $('#slide-page-1').addClass('non-active-top-slide');
});

var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++) {
    if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
        a[i].onclick=function() {
                window.location=this.getAttribute("href");
                return false; 
        }
    }
}