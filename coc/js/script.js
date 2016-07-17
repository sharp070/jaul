/*For about us*/
$(document).ready(function(){
    $(".more").click(function(){
        $("#about").modal('show');
    });
});


/*For the video tuts*/
$(function(){
    $('.modal').on('hidden.bs.modal', function (e) {
        $iframe = $(this).find("iframe");
        $iframe.attr("src", $iframe.attr("src"));
    });
});

