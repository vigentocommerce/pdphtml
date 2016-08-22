<?php
/**
 * Template Name: Help Page
 *
 * @package WordPress
 * @subpackage MageBay
 * @since MageBay
 */
 
get_header('home');
?>
<!-- Main  -->
		<div class="pdp-main">
			<section class="help-top">
				<div class="container">	
					<div class="pdp-container">
						<h1>Looking for something?</h1>
						<div class="pdp-search-wrapper">
							<form method="GET" action="#" accept-charset="UTF-8">							  
								<input required="required" placeholder='Example: "How do I create a campaign?"' class="search-terms form-control" name="q" id="q" type="text">
								<button class="btn-search" type="submit"> </button>
							</form>
						</div>
					</div>
					
				</div>
			</section>
			<section class="help-container">
				<div class="container">	
					<div class="alert-recent-update">
						<span class="icon"><i class="fa fa-info" aria-hidden="true"></i>icon</span>
						<div class="alert-content">
							<p>
								View the latest Infusionsoft updates
								<a href="#">Latest Update on July 7th, 2016</a>
							</p>
						</div>
					</div>
					<div class="help-items">
						<h3>Browse Instruction Manuals</h3>
						<ul class="row">
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon1"><img src="assets/images/help1.png" alt="" /></span>
									<span class="text">Get Started</span>
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon2"><img src="assets/images/help2.png" alt="" /></span>
									<span class="text">Contact Management</span>
								</a>	
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon3"><img src="assets/images/help3.png" alt="" /></span>
									<span class="text">Campaigns and Broadcasts</span>
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon4"><img src="assets/images/help4.png" alt="" /></span>
									<span class="text"> Sell Online</span>
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon5"><img src="assets/images/help5.png" alt="" /></span>
									<span class="text">Referral Partners</span>
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon6"><img src="assets/images/help6.png" alt="" /></span>
									<span class="text">Sales Teams</span>
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon7"><img src="assets/images/help7.png" alt="" /></span>
									<span class="text">CustomerHub</span>
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="#">
									<span class="icon icon8"><img src="assets/images/help8.png" alt="" /></span>
									<span class="text">Marketplace Apps</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>

		<!-- End Main  -->


<?php get_footer(); ?>