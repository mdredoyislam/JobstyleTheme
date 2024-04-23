<?php
/*
    Template Name: FAQ
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
                <div class="banner_title_wrapper">
                    <div class="about_label_wrapper text-center">
                        <button class="precision_label_btn"><?php esc_html( the_title() ); ?></button>
                    </div>
                    <p class="banner_title text-center mb-5"><?php echo esc_html( get_field('sescion_title') ); ?></p>              
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-12">
				<div class="accordion" id="faq_accordion">
					<?php
					$jobstyle_faq = new WP_Query(
						array(
							'post_type'      =>'faq',
							'posts_per_page' => -1,
							'order'          => 'ASC'
						)
					);
					while ( $jobstyle_faq->have_posts() ) : 
					$jobstyle_faq->the_post();
					?>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="faq_accordion_heading collapsed" type="button" data-toggle="collapse"
										data-target="#collapse<?php echo  esc_html( get_the_ID() ); ?>">
									<?php esc_html( the_title() ); ?>
									<span>
										<img class="accordion_minus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/minus.png" alt="">
										<img class="accordion_plus" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/plus.png" alt="">
									</span>
								</button>
							</h2>
						</div>
						<div id="collapse<?php echo  esc_html( get_the_ID() ); ?>" class="collapse" data-parent="#faq_accordion">
							<div class="card-body p-0">
								<p class="faq_accordion_description mb-0">
									<?php esc_html( the_content() ); ?>
								</p>
							</div>
						</div>
					</div>
					<?php 
					endwhile;
					wp_reset_query();
					?>
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
        start join community section
    =======================================
 -->  
<!-- 
    =======================================
        end join community section
    =======================================
 -->
<?php get_footer(); ?>