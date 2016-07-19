var mst = jQuery.noConflict();	
	mst(function(){
		mst(window).scroll(function() {
			if (mst(this).scrollTop() >= 82) {
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
		// For Document Page
		mst('#menu-toggle').click(function () {
			mst('#wrapper-doc').toggleClass('expand');
		});
		//right
		mst('.menu-sidebar-right').click(function () {
			if (mst('.menu-sidebar-container.right').css("right") == "-300px") {
			  mst('.menu-sidebar-container.right').animate({right: '0px'}, 150);
			  mst('.close-sidebar-btn').addClass('sidebar-active');
			} 
			else  {
			  mst('.menu-sidebar-container.right').animate({right: '-300px'}, 150); 
			} 
		});
		mst(document).click(function(){
			if(mst('.menu-sidebar-container.right').css('right') == '0px' && mst('.menu-sidebar-right').hasClass('on') ) {
				mst('.menu-sidebar-container.right').animate({right: '-300px'}, 150);
				mst('.menu-sidebar-right').toggleClass("on");
				mst('.close-sidebar-btn').removeClass('sidebar-active');	
			}
		})
		/* mst('.menu-sidebar-right').click(function () {
			mst(this).toggleClass("on");	
		});  */
		mst('#close_sidebar_btn').click(function () {
			mst('.menu-sidebar-right').removeClass("on");
			mst('.menu-sidebar-container.right').animate({right: '-300px'}, 150);
			mst('.close-sidebar-btn').removeClass('sidebar-active');
		}); 
		 
	});


	