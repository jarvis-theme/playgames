var dirTema = document.getElementsByTagName('link')[0].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		'jq_ui' : {
			deps : ['jquery'],
		},
		'bxSlider' : {
			deps : ['jquery'],
		},
		'elevateZoom' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},
    "waitSeconds" : 20,
    urlArgs: "v=001",

	paths: {
		// LIBRARY
		jquery 			: dirTema+'assets/js/lib/jquery.min',
		bxSlider		: dirTema+'assets/js/lib/jquery.bxslider.min',
		elevateZoom		: dirTema+'assets/js/lib/jquery.elevatezoom',

		// MAIN LIBRARY
		router          : 'js/router',
		// cart			: 'js/cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		// shopcart      	: 'js/shop_cart',

		// CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
	}
});
require([
	'router',
	'main',
], function(router,main)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
});