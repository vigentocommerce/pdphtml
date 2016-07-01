var mst = jQuery.noConflict();
	mst(document).ready(function() {
	 	
	});
	mst(function(){
		mst(window).scroll(function() {
			if (mst(this).scrollTop() >= 100) {
				mst('.pdp-header').addClass('stickytop');
				mst('.header-nav').css('opacity', '0');
				mst(".pdp-btn-demo, .pdp-header .logo").hover(function(){
					mst('.header-nav').css('opacity', '1');
					}, function(){
					//mst('.header-nav').css('opacity', '0');
				});	
			}
			else {
				mst('.pdp-header').removeClass('stickytop');
				mst('.header-nav').css('opacity', '1');
			}
		});
	});