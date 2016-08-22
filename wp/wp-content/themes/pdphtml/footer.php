<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!-- Footer  -->
		<div class="pdp-footer">
			<div class="pdp-footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<a class="small-logo" href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" /></a>
							<p>This block for Twitter New Feeds</p>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">						
							<div class="top-row">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="f-title">
											<h5>Engage</h5>
										</div>
										<ul class="f-lists">
											<li><a href="#">About</a></li>
											<li><a href="#">Success Stories</a></li>
											<li><a href="#">Become a Partner</a></li>
											<li><a href="#">Find a Partner</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="f-title">
											<h5>Support</h5>
										</div>
										<ul class="f-lists">
											<li><a href="#">Help Center</a></li>
											<li><a href="#">Contact</a></li>
											<li><a href="#">Reach us on Twitter!</a></li>
											<li><a href="#">Known Issues</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="bottom-row">
								<div class="pdp-search-wrapper">
									<form method="GET" action="#" accept-charset="UTF-8">							  
										<input required="required" placeholder="Search terms" class="search-terms form-control" name="q" id="q" type="text">
										<button class="btn-search" type="submit"> </button>
									</form>
								</div>
							</div>       
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 subcribe-block">
							<div class="f-title">
								<h5>Sign up for our mailing list</h5>							
							</div>
							<form action="#" method="post" class="subscribe-form">
								<p>Email:</p>
								<input type="email" name="email" class="subscribe-input form-control" placeholder="Email address">
								<button type="submit" class="subscribe-submit pdp-btn">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="pdp-footer-bottom bkg-grey">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<ul class="f-extra">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Legal</a></li>
							</ul>
							<span class="copy-right">&copy;2016 PDP Inc. All Rights Reserved</span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 text-right">
							<ul class="f-socials">
								<li><a href="#" class="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a></li>
								<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i>linkedin</a></li>
								<li><a href="#" class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i>youtube</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer  -->

	

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
