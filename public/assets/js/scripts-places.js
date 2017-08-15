$(document).ready(function(){
        $(".container-select-place> div:not(.circleTitle)").on("click", function () {
                    var id = $(this).attr("class");
                    id = id.replace("-border-", "-").replace("border-white", "").replace("border", "").replace(/\s*/g, "").replace("active","");

                    $(".select-place-desc:not(#"+id+")").fadeOut(0,  function () {

                    });
                    $("#"+id).fadeIn(0);

                    /*сделать все лини белыми*/
                    for(var line = 2; line < 6; line++) {
                        var lineClassW = "line-"+line;
                        var imageW = $("."+lineClassW).css("background-image").replace("red","white");
                        $("."+lineClassW).css("background-image", imageW);
                    }

                    /*сделать линии красными включая текущую*/
                    var countLine = id.substr(-1);
                    for(var line = 2; line < parseInt(countLine)+1; line++) {
                        var lineClass = "line-"+line;
                        var image = $("."+lineClass).css("background-image").replace("white","red");
                        $("."+lineClass).css("background-image", image);
                        console.log(parseInt(countLine));
                        if(parseInt(countLine) == 4){
                            var image = $(".line-5").css("background-image").replace("white","red");
                            $(".line-5").css("background-image", image);
                        }
                    }

                    /*убрать вращение исключая текущий элемент*/
                    for(var borderL = 1; borderL < 5; borderL++) {
                        var borderLClassW = "select-place-border-"+borderL;
                        $("."+borderLClassW).removeClass("active");
                    }
                    $(this).addClass("active");

                    /*Сделать белыми обводку*/
                    for(var borderL = parseInt(id.substr(-1)); borderL < 5; borderL++) {
                        var borderLClassW = "select-place-border-"+borderL;
                        $("."+borderLClassW).removeClass("border").addClass("border-white");
                    }
                    /*Сделать красными обводку*/
                    for(var borderL = parseInt(id.substr(-1)); borderL > 0; borderL--) {
                        var borderLClassW = "select-place-border-"+borderL;
                        $("."+borderLClassW).removeClass("border-white").addClass("border");
                    }

            })

    $(".imagelist").owlCarousel({
        items: 1,
        dots:false,
        URLhashListener:true,
        smartSpeed: 800


    });
});