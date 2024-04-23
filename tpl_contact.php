<?php
/*
    Template Name: Contact
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
                <div class="banner_title_wrapper contact-title-wrapper">
                    <div class="about_label_wrapper text-center">
                        <button class="precision_label_btn"><?php esc_html( the_title() ); ?></button>
                    </div>
                    <p class="banner_title text-center banner_title_contact"><?php echo get_field('sescion_title'); ?></p>              
                </div>
            </div>
        </div>
		<div class="row address-row">
			<div class="col-lg-4">
				<div class="single-address-wrapper">
					<div class="single-address-icon">
						<img class="contact_icon" src="<?php echo $jobstyle_redux_opt['address-icon-img']['url']; ?>" alt="icon">
					</div>
					<h4><?php echo $jobstyle_redux_opt['address-title']; ?></h4>
					<ul>
						<li><?php echo $jobstyle_redux_opt['address-field']; ?></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-address-wrapper">
					<div class="single-address-icon">
						<img class="contact_icon" src="<?php echo $jobstyle_redux_opt['phone-icon-img']['url']; ?>" alt="icon">
					</div>
					<h4><?php echo $jobstyle_redux_opt['phone-title']; ?></h4>
					<ul>
						<li><?php echo $jobstyle_redux_opt['phone-field']; ?></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-address-wrapper">
					<div class="single-address-icon">
						<img class="contact_icon" src="<?php echo $jobstyle_redux_opt['Email-icon-img']['url']; ?>" alt="icon">
					</div>
					<h4><?php echo $jobstyle_redux_opt['email-title']; ?></h4>
					<ul>
						<li><?php echo $jobstyle_redux_opt['email-field']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="contact-form-page">
					<div class="contact-form-title">
						<h3><?php echo $jobstyle_redux_opt['jobstyle-contact-form-title']; ?></h3>
					</div>
					<?php
						$shortcode = do_shortcode($jobstyle_redux_opt['jobstyle-contact-form-shortcode']);
						echo $shortcode;
					?>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="powered-by-contact">
					<p>
						Powered by
					</p>
					<img src="https://dev.wp.otterdev.io/jobsyte/wp-content/uploads/2022/01/Group-886-1.png" alt="Powered By Img">
				</div>
			</div>
		</div>
    </div>
</section>
<section class="google-map">
	<div class="contact-map">
		<iframe src="<?php echo $jobstyle_redux_opt['jobstyle-map-url']; ?>" width="100%" height="712" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>
<!-- 
    =======================================
           end banner  section
    =======================================
-->
<?php get_footer(); ?>