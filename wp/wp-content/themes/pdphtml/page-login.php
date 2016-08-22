<?php
/**
 * Template Name: Login Page
 *
 * @package WordPress
 * @subpackage MageBay
 * @since MageBay
 */
 

get_header('home');
?>
<!-- Main  -->
		<div class="pdp-main">
			<div class="container">
				<div class="account-login">
					<div class="page-title">
						<h1>Login or Register an Account</h1>
						<p>Lorem ipsum dolor sit amet, contetur adipisicing elit, sed do eiusmod tempor incididunt labore. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					</div>
					<form id="login-form" method="post" action="#">
						<div class="login-container">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 new-users form-block">
								<div class="form-block-header">
									<h2 class="margin-bottom-15">Sign In</h2>
								</div>

								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" placeholder="Username">
								</div>

								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" placeholder="Password">
								</div>

								<div class="row margin-bottom-20">
									<div class="col-md-12">
										<button type="submit" class="pdp-btn">Sign In</button>
									</div>
								</div>
								<div class="input-group margin-bottom-70 text-white">
									<h4>Forget your Password ?</h4>
									<p>No worries, <a href="#" class="text-green">click here</a> to reset your password.</p>
								</div>
								<div class="social-login">
									<div class="or rounded-x">Or</div>
									<ul class="list-unstyled">
										<li>
											<button class="pdp-btn btn-facebook margin-bottom-20">
												<i class="fa fa-facebook"></i> Sign in with Facebook
											</button>
										</li>
										<li>
											<button class="pdp-btn btn-twitter">
												<i class="fa fa-twitter"></i> Sign in with Twitter
											</button>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 registered-users form-block">
								<div class="form-block-header">
									<h2 class="margin-bottom-10">Sign Up</h2>
									<p class="margin-bottom-20">Lorem ipsum dolor sit amet, conur sicing elit, seddoet dolore magna. aliqua.</p>
								</div>

								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
									<input type="text" class="form-control" placeholder="Your name">
								</div>

								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" placeholder="Username">
								</div>

								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="email" class="form-control" placeholder="Your email">
								</div>

								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" placeholder="Password">
								</div>

								<div class="checkbox margin-bottom-15">
									<label>
										<input type="checkbox">
										<p>I agree to terms &amp; conditions</p>
									</label>

									<label>
										<input type="checkbox">
										<p>Subscribe to our newsletter</p>
									</label>
								</div>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="pdp-btn">Continue</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- End Main  -->

<?php get_footer(); ?>