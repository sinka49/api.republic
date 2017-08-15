$(document).ready(function(){
    $(".mode-maping").on("click",function () {
        if($(".mode-map").css("display") == "none"){
            $(".mode-map").slideDown(600);
        }
        else if($(".mode-map").css("display") == "block") {
            $(".mode-map").slideUp(600);
        }
    })
    $(".mode-reading").on("click",function () {
        if($(".mode-map").css("display") == "block"){
            $(".mode-map").slideUp(600);
        }
    })

    $("#transport_filters input[type='checkbox']").change( function () {
        var $form = $("#transport_filters");
        $.ajax({
            type: "GET",
            url: "/tours/getDataTours",
            data: $form.serialize()
        }).done(function(data) {
            $(".transportList").html(data);
        }).fail(function() {
            console.log('fail');
        });
    });
});