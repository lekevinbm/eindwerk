$('.tab-activator').click(function(){
    $('.app-text-row-tab-value').each(function(index,element){
        if($(element).css('display') != 'none'){
            $(element).hide();
            $(element).parent('.tab-activator').find('.faq-carret').empty();
            $(element).parent('.tab-activator').find('.faq-carret').append("<i class='fas fa-caret-right fa-2x'></i>");
        }
    });
    
    if($(this).children('.app-text-row-tab-value').css('display') == 'none'){
        $(this).children('.app-text-row-tab-value').show();
        $(this).find('.faq-carret').empty();
        $(this).find('.faq-carret').append("<i class='fas fa-caret-down fa-2x'></i>");
    }else{
        $(this).children('.app-text-row-tab-value').hide();
        $(this).find('.faq-carret').empty();
        $(this).find('.faq-carret').append("<i class='fas fa-caret-right fa-2x'></i>");
    }
});