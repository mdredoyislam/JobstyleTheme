<?php
/*
    Template Name: Signin
*/
get_header();
global $user_ID;
global $wpdb;
?>
<!-- 
    =======================================
           start banner  section
    =======================================
-->
<section class="banner_section blog-page-banner">
	<div class="container">
		<div class="row">
			<?php
			/*if(!$user_ID){
				if($_POST){
					$username = $wpdb->escape($_POST['username']);
					$password = $wpdb->escape($_POST['password']);
					$login_array = array();
					$login_array['user_login'] = $username;
					$login_array['user_password'] = $password;
					$verify_user = wp_signon($login_array, true);
				if(!is_wp_error($verify_user)){
					echo "<script>window.location = '".site_url()."/wp-admin/'</script>";
				}else{
					echo "Invalid Data";
				}
					
				}else{*/
			
			if ( is_user_logged_in() ) {
					echo "<script>window.location = '".site_url()."/wp-admin/'</script>";
			}
			
			?>
			<div class="col-lg-12">
				<div class="signin-form-wrapper">
					<div class="signin-form-title">
						<h3>
							Log in to your account!
						</h3>
					</div>
					
						<?php echo do_shortcode('[woocommerce_my_account]'); ?>
				<!--	<form method="post">
						<div class="input_wrapper">
							<label for="name">User Name</label>
							<input type="text" id="name" class="input_control" name="username" placeholder="Username">
						</div>
						<div class="input_wrapper">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" class="input_control" placeholder="password">
							<span class="pass-role">Your password must consist of at least 8 characters or more.</span>
						</div>
						<div class="join_community_btn_wrapper">
							<button type="submit" class="common_outline_btn sign-in-btn">
								Sign In
							</button>
						</div>
						
					</form>-->
					<h4 class="new-user-reg">
							New user? Please register <a href="https://dev.wp.otterdev.io/jobsyte/sign-up/">here</a>
						</h4>
				</div>
			</div>
			<?php
			/*}
			}else{
				echo "User Loged in";
			}*/
			?>
		</div>
	</div>
</section>
		
<?php get_footer(); ?>