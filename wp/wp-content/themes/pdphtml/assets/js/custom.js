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
		/* Auto resize heading */
		mst('.banner-content h1').fitText({ minFontSize: '20px', maxFontSize: '38px' });
		mst('.banner-content h3').fitText({ minFontSize: '15px', maxFontSize: '18px' });
		/* Add active class */
		mst('.nodisplay').css("display","none");
		//Click event of sub-tab
		mst('.panel-title a').click(function(){
			mst('li.panel').removeClass('active');
			mst(this).parents("li.panel").addClass('active');
			var title = mst(this).parent("h4.panel-title").find("h1").html();
			var content = mst(this).parent("h4.panel-title").find(".content").html();
			mst(this).parents(".wrap-content").find(".book-content h2").addClass('title').html(title);
			mst(this).parents(".wrap-content").find(".book-content p").html(content);
		});
		//Load default default
		mst('.tab-content').find('#content').addClass('active');
		mst('.nav.nav-tabs li a').click(function(){
			//remove class active of all tab-content 
			mst(this).parents('.sidebar-content').find('#accordion_book li').removeClass('active');
			mst('#page-content-wrapper .titlepage h2').removeClass('title').text("");
			mst('#page-content-wrapper .book-content p').text("");
		})

	});



	