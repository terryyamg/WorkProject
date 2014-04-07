$(document).ready(function(){ 

        $(".tab").click(function () {
            $(".active").removeClass("active");
            $(this).addClass("active");
            $(".content").stop().slideUp();
            var content_show = $(this).attr("title");
            $("#"+content_show).stop().slideDown();
         });
});