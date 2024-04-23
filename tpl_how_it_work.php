<?php
/*
    Template Name: How it work
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
		<div class="row">
			<div class="timeline">
				<div class="row">
					<!--Time Line Item Wrapper-->
					<div class="timeline-item">
						<div class="timeline-inner">
							<div class="timeline-no timeline-first">
								 <span>1</span>
							</div>
							<img src="<?php echo $jobstyle_redux_opt['fillinthe-form-img']['url']; ?>" alt="img">
							<h3>
								 <?php echo $jobstyle_redux_opt['fillinthe-form-title']; ?>
							</h3>
							<?php echo $jobstyle_redux_opt['fillinthe-form-desc']; ?>
						</div>
					</div>
					<!--Time Line Item Wrapper-->
					<!--Time Line Item Wrapper-->
					<div class="timeline-item">
						<div class="timeline-inner">
							<div class="timeline-no">
								 <span>2</span>
							</div>
							<img src="<?php echo $jobstyle_redux_opt['processtopayment-form-img']['url']; ?>" alt="img">
							<h3>
								 <?php echo $jobstyle_redux_opt['processtopayment-form-title']; ?>
							</h3>
							<?php echo $jobstyle_redux_opt['processtopayment-form-desc']; ?>
						</div>
					</div>
					<!--Time Line Item Wrapper-->
					<!--Time Line Item Wrapper-->
					<div class="timeline-item">
						<div class="timeline-inner">
							<div class="timeline-no">
								 <span>3</span>
							</div>
							<img src="<?php echo $jobstyle_redux_opt['giveustime-form-img']['url']; ?>" alt="img">
							<h3>
								 <?php echo $jobstyle_redux_opt['giveustime-form-title']; ?>
							</h3>
							<?php echo $jobstyle_redux_opt['giveustime-form-desc']; ?>
						</div>
					</div>
					<!--Time Line Item Wrapper-->
					<!--Time Line Item Wrapper-->
					<div class="timeline-item">
						<div class="timeline-inner">
							<div class="timeline-no">
								 <span>4</span>
							</div>
							<img src="<?php echo $jobstyle_redux_opt['download-file-form-img']['url']; ?>" alt="img">
							<h3>
								 <?php echo $jobstyle_redux_opt['download-file-form-title']; ?>
							</h3>
							<?php echo $jobstyle_redux_opt['download-file-form-desc']; ?>
						</div>
					</div>
					<!--Time Line Item Wrapper-->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="how-it-work-btn text-center mt-5">
					<a href="<?php echo $jobstyle_redux_opt['download-file-form-pdf']['url']; ?>" download class="common_btn">
						Get Your Traffic Document
					</a>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- 
    =======================================
           end banner  section
    =======================================
-->
<!-- 
    =======================================
           start product Plan  section
    =======================================
-->
<section class="product-plan-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="product-plan-text">
					<h3 class="product-plan-title">
						Need help?
					</h3>
					<p>
						Reach out to us so we can help you!
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product-plan-button">
					<a <?php if($jobstyle_redux_opt['need-a-plan-button-target'] == 1): ?>target="__blank"<?php endif; ?> href="<?php echo $jobstyle_redux_opt['need-a-plan-button-url']; ?>" class="common_btn">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 
    =======================================
           end product Plan  section
    =======================================
-->
<?php get_footer(); ?>