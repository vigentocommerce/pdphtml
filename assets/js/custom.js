var mst = jQuery.noConflict();	
	mst(function(){
		mst(window).scroll(function() {
			if (mst(this).scrollTop() >= 100) {
				mst('.pdp-header').addClass('stickytop');
				mst('.pdp-btn-demo').addClass('over');
				/* mst('.header-nav').css('opacity', '0');
				mst(".pdp-btn-demo, .pdp-header .logo").hover(function(){
					mst('.header-nav').css('opacity', '1');
					}, function(){
				});	 */
			}
			else {
				mst('.pdp-header').removeClass('stickytop');
				/* mst('.header-nav').css('opacity', '1'); */
				mst('.pdp-btn-demo').removeClass('over');
			}
		});
	});
	mst(document).ready(function () {
		mst('.menu-left-responsive').click(function () {
			if (mst('.menu-left-container').css("left") == "-250px") {
			  mst('.menu-left-container').animate({left: '0px'}, 150);
			} 
			else  {
			  mst('.menu-left-container').animate({left: '-250px'}, 150); 
			} 
		});
		mst(document).click(function(){
			if(mst('.menu-left-container').css('left') == '0px' && mst('.menu-left-responsive').hasClass('on') ) {
				mst('.menu-left-container').animate({left: '-250px'}, 150);
				mst('.menu-left-responsive').toggleClass("on");
			}
		})
		mst('.menu-left-responsive').click(function () {
			mst(this).toggleClass("on"); 
		}); // animation = -> x 
	
	});


	