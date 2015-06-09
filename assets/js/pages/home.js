define(['jquery','bxSlider'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
			$('.bxslider').bxSlider({
				pager:false
			});

			$('#btn-slide').click(function(){
		      $("ul#menus-top-section").slideToggle(300);
		    });

		    //grid to list homepage
		    function get_list(){
		        $(".tab-post").css("overflow-x", "hidden");
		        $(".tab-post").css("overflow-y", "scroll");
		        $(".tab-post").css("height", "500px");
		        $(".post").css("text-align", "left");
		        $(".post").css("display", "block");
		        $(".tab-title").css("float", "right");
		    }

		    function get_grid(){
		        location.reload();
		    }

		    $('.list').click(function() {
		        get_list();
		    });

		    $('.grid').click(function() {
		        get_grid();
		    });
		};
	}
});