define(['jquery','bxSlider','noty'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            // tampilkan error noty
            var msg = $('#message');
            if(msg.length){
                type = $(msg).attr('class');
                text = $(msg).html();
                noty({"text":text,"layout":"top","type":type});    
            }

            //partner slide
            $('.partner').bxSlider({
                pager:false,
                minSlides: 2,
                maxSlides: 7
            });

            $('ul#category > li').click(function(e){
              $(this).closest('li').find('#submenu-left').slideToggle(200);
              $('.clicker').toggleClass('active');
              e.stopPropagation();
            });

            $("ul#category > li > a").click(function () {
                $(this).find("[class^='vnavright']").toggleClass('fa-caret-down fa-caret-right');
            });

            $('.search').click(function() {
               $(".form-search").slideToggle(300);
            });

            //grid to list product single
            function get_list_product(){
                $('.list').removeClass('col-md-3');
                $('.list').removeClass('col-sm-6');
                $('.list').removeClass('col-xs-12');
                $('#single-categories').css("width", "95%");
                $('#single-categories').css("overflow-y", "scroll");
                $('#single-categories').css("height", "700px");
                $('#single-categories').css("margin", "24px 17px");
                $(".tab-title").css("float", "right");
                $(".tab-title").css("margin-right", "16px");
                $(".post-category").css("display", "block");
                $(".post-category").css("text-align", "left");
                $(".list-bottom-single").css("border-bottom", "none");
            }

            function get_grid_product(){
                location.reload();
            }

            $('.list_product').click(function() {
                get_list_product();
            });

            $('.grid_product').click(function() {
                get_grid_product();
            });
        };
    }
});