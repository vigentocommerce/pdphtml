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

	<!-- load angular -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/angular.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/angular-route.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app-document.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/lib/dirPagination.js"></script>
	<!-- JS -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.fittext.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="pdpwrapper" class="pdp-wrap">
<div class="page-header-topbar ng-scope">
<div class="topbar-doc">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 topbar-left">
				<a href="#" class="navbar-brand logo"><img ng-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" class="brand-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg"></a>
				<!--a id="menu-toggle" href="#" class="navbar-brand toggle-nav text-green"><i class="fa fa-bars fa-lg"></i></a-->
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topbar-right">
				<ul class="nav navbar-nav navbar-right">
					<!--
					<li><a target="_blank" href="#" class="text-green">Store</a></li>
					-->
		
					<li>
						<button class="pdp-btn" type="button" data-target="#modal_login" data-toggle="modal">Sign in</button>
					</li>
				</ul>
				<!-- ngIf: currentPage != 'search' && currentPage != 'login' -->
				<form class="search navbar-form navbar-right search-nav-collapse ng-pristine ng-valid ng-scope" ng-submit="$event.preventDefault();header_search();" ng-if="currentPage != 'search' &amp;&amp; currentPage != 'login'" action="packtlib/search_results" method="get">
					<div class="form-group pull-right form-group-inline">
						<div class="input-group">
						  <input type="text" placeholder="Search the library..." value="" name="query" class="form-control">
						  <span class="input-group-btn"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></span>
						</div>
					</div>
				</form><!-- end ngIf: currentPage != 'search' && currentPage != 'login' -->
				<!-- ngIf: currentPage == 'search' -->
			</div>
		</div>
	</div>
</div>
<div aria-labelledby="modal_login" role="dialog" tabindex="-1" id="modal_login" class="modal fade in"  aria-hidden="false">
	<div role="document" class="modal-dialog login-modal">
		<div class="modal-content">
			<div class="modal-body login-form">
				<h2 id="myModalLabel" class="text-center">Sign In</h2>
				<form class="form-signin ng-pristine ng-valid" ng-submit="login()">
					<input type="email" placeholder="Email" id="exampleInputEmail1" class="form-control margin-bottom-20" name="email">
					<input type="password" placeholder="Password" id="exampleInputPassword1" class="form-control margin-bottom-20" name="password">
					<div class="form-group">
						<a class="margin-bottom-20 text-green" target="_self" href="#">Forgotten Password?</a>
					</div>
					<input type="submit" value="Submit" class="pdp-btn">
				</form>
			</div>
			<div class="modal-footer text-center">
				<a class="text-green"  target="_self" href="#">Create a New Account</a>
			</div>
		</div>
	</div>
</div>

	

