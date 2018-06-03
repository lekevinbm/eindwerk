$(document).ready(function(){
    $(document).on ("click", ".delete-image-cross", function () {
        var block_element =  $(this).parents(".app-block-icon")
        $(block_element).empty();
        $(block_element).append("<img src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDQgNTA0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MDQgNTA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzExLjMsMTA4Ljc0Yy0xNS4zMDQsMC0yNy43NTIsMTIuNDQ0LTI3Ljc1MiwyNy43NTJjMC4wMDQsMTUuMywxMi40NTIsMjcuNzQ0LDI3Ljc1MiwyNy43NDRzMjcuNzUyLTEyLjQ0LDI3Ljc1Mi0yNy43NDQgICAgQzMzOS4wNTIsMTIxLjE4OCwzMjYuNjA0LDEwOC43NCwzMTEuMywxMDguNzR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUyLjE2NCwyODYuMWMtNDkuOTkyLDAtOTAuNTA4LDQwLjUyLTkwLjUwOCw5MC41YzAsNDkuOTg0LDQwLjUxNiw5MC41MDgsOTAuNTA4LDkwLjUwOHM5MC41MTItNDAuNTI0LDkwLjUxMi05MC41MDggICAgQzM0Mi42NzYsMzI2LjYyLDMwMi4xNTYsMjg2LjEsMjUyLjE2NCwyODYuMXogTTMwMy4xNDgsMzg3LjMyOGgtMzkuMzM2djQwLjM0NGMwLDYuNDc2LTUuMzM2LDExLjc0NC0xMS44MTIsMTEuNzQ0ICAgIHMtMTEuODEyLTUuMjY0LTExLjgxMi0xMS43NDR2LTQwLjM0NGgtMzkuMTcyYy02LjQ3NiwwLTExLjc0OC01LjMzNi0xMS43NDgtMTEuODEyczUuMjY4LTExLjgxMiwxMS43NDgtMTEuODEyaDM5LjE3MnYtMzguMTY4ICAgIGMwLTYuNDcyLDUuMzM2LTExLjc0NCwxMS44MTItMTEuNzQ0czExLjgxMiw1LjI2OCwxMS44MTIsMTEuNzQ0djM4LjE2OGgzOS4zMzZjNi40NzYsMCwxMS43NDgsNS4zMzYsMTEuNzQ4LDExLjgxMiAgICBTMzA5LjYyNCwzODcuMzI4LDMwMy4xNDgsMzg3LjMyOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMzU2LDM2Ljg5MkgxOS45NzZDOS4xMiwzNi44OTIsMCw0Ni41NiwwLDU3LjQxNnYyOTkuNDk2YzAsMTAuODYsOS4xMiwxOC42LDE5Ljk3NiwxOC42aDExOC4wNTYgICAgYzAtNjMsNTEuMi0xMTQuMTI0LDExNC4xMzItMTE0LjEyNGM2Mi45MzYsMCwxMTQuMTM2LDUxLjEyNCwxMTQuMTM2LDExNC4xMjRoMTE4LjA1NmMxMC44NTYsMCwxOS42NDQtNy43NDQsMTkuNjQ0LTE4LjZWNTcuNDE2ICAgIEM1MDQsNDYuNTYsNDk1LjIxMiwzNi44OTIsNDg0LjM1NiwzNi44OTJ6IE0zOTEuNSwxNzIuNTUybC03NC40NTYsNzQuNDcyTDIwMy43MTIsMTMzLjcwOGMtMS41NC0xLjU0LTQuMDI0LTEuNTQtNS41NjQsMCAgICBsLTcxLjg4NCw3MS44OGwtMzIuODE2LTMyLjgxMmMtMS41MzYtMS41NC00LjE3Mi0xLjU0LTUuNzA4LDBsLTUyLjMwNCw1Mi4xNlY3Mi4zMjhINDY4LjU2djE3MS43NDhsLTcxLjUtNzEuNTI0ICAgIEMzOTUuNTIsMTcxLjAxMiwzOTMuMDQsMTcxLjAxMiwzOTEuNSwxNzIuNTUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=' />");
        
        var section_id = $(block_element).parents(".slide-page").attr('id');
        $("#"+section_id+" .add-image-block .app-block-text").text('Foto toevoegen (optioneel)');
        $("input#"+section_id+".problem-image").val("");
    });
});

$(".pay-method-select").change(function() {
    if(this.checked) {
        var method = $(this).attr('id').split('-')[0];
        $('#credit-charge-form #method').val(method);
    }
});

$(".choose-problem-select").change(function() {
    if(this.checked) {
        var problem_type = $(this).attr('id').split('-')[0];
        var problem_category = $(this).attr('id').split('-')[1];
        $('#'+problem_category+'-problem-form #problem-type').val(problem_type);
    }
});

$(".add-image-block-btn").bind("click", (function () {
    var section_id = $(this).parents(".slide-page").attr('id');
    $("#"+section_id+" .problem-image").trigger("click");
}));

$('input.problem-image').change(function(){
    var section_id = $(this).parents(".slide-page").attr('id');
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            $("#"+section_id+" .add-image-block .app-block-icon").empty();
            $("#"+section_id+" .add-image-block .app-block-icon").append("<img class='uploaded-problem-image'>");
            $("#"+section_id+" .add-image-block .app-block-icon").append("<span class='delete-image-cross active'><i class='fas fa-times-circle'></i></span>")
            $("#"+section_id+" .add-image-block .app-block-icon img").attr('src', e.target.result);

            $("#"+section_id+" .add-image-block .app-block-icon img").on('load', function() { 
                $("#"+section_id+" .add-image-block .app-block-text").text('Foto wijzigen');
            });

            $("#"+section_id+" .add-image-block .app-block-icon img").on('error', function() { 
                $("#"+section_id+" .add-image-block .app-block-icon").empty();
                $("#"+section_id+" .add-image-block .app-block-text").text('Foto toevoegen (optioneel)');
                $("#"+section_id+" .add-image-block .app-block-icon").append("<img src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDQgNTA0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MDQgNTA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzExLjMsMTA4Ljc0Yy0xNS4zMDQsMC0yNy43NTIsMTIuNDQ0LTI3Ljc1MiwyNy43NTJjMC4wMDQsMTUuMywxMi40NTIsMjcuNzQ0LDI3Ljc1MiwyNy43NDRzMjcuNzUyLTEyLjQ0LDI3Ljc1Mi0yNy43NDQgICAgQzMzOS4wNTIsMTIxLjE4OCwzMjYuNjA0LDEwOC43NCwzMTEuMywxMDguNzR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUyLjE2NCwyODYuMWMtNDkuOTkyLDAtOTAuNTA4LDQwLjUyLTkwLjUwOCw5MC41YzAsNDkuOTg0LDQwLjUxNiw5MC41MDgsOTAuNTA4LDkwLjUwOHM5MC41MTItNDAuNTI0LDkwLjUxMi05MC41MDggICAgQzM0Mi42NzYsMzI2LjYyLDMwMi4xNTYsMjg2LjEsMjUyLjE2NCwyODYuMXogTTMwMy4xNDgsMzg3LjMyOGgtMzkuMzM2djQwLjM0NGMwLDYuNDc2LTUuMzM2LDExLjc0NC0xMS44MTIsMTEuNzQ0ICAgIHMtMTEuODEyLTUuMjY0LTExLjgxMi0xMS43NDR2LTQwLjM0NGgtMzkuMTcyYy02LjQ3NiwwLTExLjc0OC01LjMzNi0xMS43NDgtMTEuODEyczUuMjY4LTExLjgxMiwxMS43NDgtMTEuODEyaDM5LjE3MnYtMzguMTY4ICAgIGMwLTYuNDcyLDUuMzM2LTExLjc0NCwxMS44MTItMTEuNzQ0czExLjgxMiw1LjI2OCwxMS44MTIsMTEuNzQ0djM4LjE2OGgzOS4zMzZjNi40NzYsMCwxMS43NDgsNS4zMzYsMTEuNzQ4LDExLjgxMiAgICBTMzA5LjYyNCwzODcuMzI4LDMwMy4xNDgsMzg3LjMyOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMzU2LDM2Ljg5MkgxOS45NzZDOS4xMiwzNi44OTIsMCw0Ni41NiwwLDU3LjQxNnYyOTkuNDk2YzAsMTAuODYsOS4xMiwxOC42LDE5Ljk3NiwxOC42aDExOC4wNTYgICAgYzAtNjMsNTEuMi0xMTQuMTI0LDExNC4xMzItMTE0LjEyNGM2Mi45MzYsMCwxMTQuMTM2LDUxLjEyNCwxMTQuMTM2LDExNC4xMjRoMTE4LjA1NmMxMC44NTYsMCwxOS42NDQtNy43NDQsMTkuNjQ0LTE4LjZWNTcuNDE2ICAgIEM1MDQsNDYuNTYsNDk1LjIxMiwzNi44OTIsNDg0LjM1NiwzNi44OTJ6IE0zOTEuNSwxNzIuNTUybC03NC40NTYsNzQuNDcyTDIwMy43MTIsMTMzLjcwOGMtMS41NC0xLjU0LTQuMDI0LTEuNTQtNS41NjQsMCAgICBsLTcxLjg4NCw3MS44OGwtMzIuODE2LTMyLjgxMmMtMS41MzYtMS41NC00LjE3Mi0xLjU0LTUuNzA4LDBsLTUyLjMwNCw1Mi4xNlY3Mi4zMjhINDY4LjU2djE3MS43NDhsLTcxLjUtNzEuNTI0ICAgIEMzOTUuNTIsMTcxLjAxMiwzOTMuMDQsMTcxLjAxMiwzOTEuNSwxNzIuNTUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=' />");    
                $("input#"+section_id+".problem-image").val("");
            });
        }
        reader.readAsDataURL(this.files[0]);
    }
});
