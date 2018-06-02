$(".pay-method-select").change(function() {
    if(this.checked) {
        var method = $(this).attr('id').split('-')[0];
        $('#credit-charge-form #method').val(method);
    }
});