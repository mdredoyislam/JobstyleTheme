<?php
/*
    Template Name: Sign Up
*/
get_header();
?>
<!-- 
    =======================================
           start banner  section
    =======================================
-->
<section class="banner_section blog-page-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="signin-form-wrapper">
					<div class="signin-form-title">
						<h3>
							Sign up to start getting plans for your project!
						</h3>
					</div>
					<?php 
					
					if ( is_user_logged_in() ) {
						echo "<script>window.location = '".site_url()."/wp-admin/'</script>";
					}
					?>
					<?php echo do_shortcode('[woocommerce_my_account]'); ?>
					<!--<form method="POST">
						<div class="input_wrapper">
							<label for="username">Username</label>
							<input type="text" id="username" name="username" class="input_control" placeholder="Username">
						</div>
						<div class="input_wrapper">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" class="input_control" placeholder="Enter your password">
							<span class="pass-role">Your password must consist of at least 8 characters or more.</span>
						</div>
						<div class="input_wrapper">
							<label for="password">Confirm Password</label>
							<input type="password" id="password" name="password" class="input_control" placeholder="Enter your password">
							<span class="pass-role">Your password must consist of at least 8 characters or more.</span>
						</div>
						<div class="join_community_btn_wrapper">
							<button type="submit" class="common_outline_btn sign-in-btn">
								Sign Up
							</button>
						</div></form>-->
						<h4 class="new-user-reg">
							Already have an account? Please login <a href="https://dev.wp.otterdev.io/jobsyte/sign-in/">here</a>
						</h4>
					
				</div>
			</div>
		</div>
	</div>
</section>
		
<?php get_footer(); ?>