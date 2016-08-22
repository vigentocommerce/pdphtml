<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/font-awesome-4.4.0/css/font-awesome.min.css">


	<!-- JS -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.fittext.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="pdpwrapper" class="pdp-wrap">
	<div>
		<div class="pdp-toplinks bkg-grey text-right">
			<ul class="pdp-container">
				<li><a href="#">Blog</a></li>
				<li><a href="#">Live Chat</a></li>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</div>
		<div class="pdp-header">
			<div class="pdp-container">
				<div class="row">
					<div class="col-lg-3 col-xs-7 hidden-sm hidden-md">
						<a href="#" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" height="35px" /></a>
					</div>
					<div class="hidden-lg col-md-1 hidden-xs col-sm-1">
						<a href="#" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-m.svg" alt="logo" height="35px" /></a>
					</div>
					<div class="col-lg-9 col-xs-5 col-sm-11 col-md-11 text-right">
						<ul class="header-nav hidden-xs">
							<li><a href="#">Ways to sell</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Shop Resources</a></li>							
						</ul>
						<ul class="header-nav">
							<li>
								<a class="menu-sidebar-right">More +</a>
								<div class="header-nav-sidebar">									
									<div class="menu-sidebar-container right">
										<div class="menu-sidebar-top">
											<div id="close_sidebar_btn" class="close-sidebar-btn">
												<span class="tri-close" id="tri_close">
													<span></span>
												</span>
											</div>
											<a href="#" class="pdp-btn2 pdp-btn-demo over"><span>Start my demo</span></a>
										</div>										
										<ul>
											<li><a href="#">Way to sell</a></li>
											<li><a href="#">Feature</a></li>
											<li><a href="#">Pricing</a></li>
											<li class="dropdown">
												<a class="nav-list collapsed" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">Service</a>
												<ul class="header-nav-sub collapse" id="collapse1">
													<li><a href="#">Service 1</a></li>
													<li><a href="#">Service 2</a></li>
													<li><a href="#">Service 3</a></li>
													<li><a href="#">Service 4</a></li>							
													<li><a href="#">Service 5</a></li>							
												</ul>
											
											</li>
											<li class="dropdown">
												<a class="nav-list collapsed" role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Tool</a>
												<ul class="header-nav-sub collapse" id="collapse2">
													<li><a href="#">Tool 1</a></li>
													<li><a href="#">Tool 2</a></li>
													<li><a href="#">Tool 3</a></li>
													<li><a href="#">Tool 4</a></li>							
												</ul>
											</li>
										</ul>
									</div>							
								</div>
							</li>
						</ul>
						<a href="#" class="pdp-btn2 pdp-btn-demo hidden-xs"><span><i class="fa fa-caret-right"></i> Start my demo</span></a>
					</div>
				</div>
			</div>
		</div>	
		
	</div>

	

