<?php
/*
    Template Name: Home Page 
*/
get_header(); 
?>

<!-- 
    =======================================
           start banner  section
    =======================================
-->
<section class="banner_section home-banner-sescion">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 order-1">
                <div class="banner_title_wrapper">
                    <h3 class="banner_title" style="color: <?php echo $jobstyle_redux_opt['hero-title-color']; ?> !important"><?php echo $jobstyle_redux_opt['hero-title']; ?></h3>
                </div>
                <div class="banner_description_wrapper">
                    <p class="banner_description" style="color: <?php echo $jobstyle_redux_opt['hero-desc-color']; ?> !important"><?php echo $jobstyle_redux_opt['hero-desc']; ?></p>
                </div>
                <div class="info row">
                    <div class="icon-info-box pr-3">
                        <div class="icon-info-box-item">
                            <div class="icon-info-box-icon"><span class="rt-icon">
                                <img decoding="async" class=" ls-is-cached lazyloaded" src="https://www.radiustheme.com/wp-content/uploads/2022/03/box-tick-1.svg" data-src="https://www.radiustheme.com/wp-content/uploads/2022/03/box-tick-1.svg" alt="SVG Icon"><noscript><img decoding="async" class="lazyload" src="https://www.radiustheme.com/wp-content/uploads/2022/03/box-tick-1.svg" alt="SVG Icon"></noscript></span>
                            </div>
                            <div class="icon-info-box-content">
                                <span class="icon-subtext">100+</span>
                                <h3 class="icon-title">Premium Product</h3>
                            </div>
                        </div>
                    </div>
                    <div class="icon-info-box pr-3">
                        <div class="icon-info-box-item">
                            <div class="icon-info-box-icon"><span class="rt-icon">
                                <img decoding="async" class=" ls-is-cached lazyloaded" src="https://www.radiustheme.com/wp-content/uploads/2022/03/profile-2user-1.svg" data-src="https://www.radiustheme.com/wp-content/uploads/2022/03/profile-2user-1.svg" alt="SVG Icon"><noscript><img decoding="async" class="lazyload" src="https://www.radiustheme.com/wp-content/uploads/2022/03/profile-2user-1.svg" alt="SVG Icon"></noscript></span>
                            </div>
                            <div class="icon-info-box-content">
                                <span class="icon-subtext">220,000+</span>
                                <h3 class="icon-title">Happy Clients</h3>
                            </div>
                        </div>
                    </div>
                    <div class="icon-info-box">
                        <div class="icon-info-box-item">
                            <div class="icon-info-box-icon"><span class="rt-icon">
                                <img decoding="async" class=" ls-is-cached lazyloaded" src="https://www.radiustheme.com/wp-content/uploads/2022/03/receipt-2-1.svg" data-src="https://www.radiustheme.com/wp-content/uploads/2022/03/receipt-2-1.svg" alt="SVG Icon"><noscript><img decoding="async" class="lazyload" src="https://www.radiustheme.com/wp-content/uploads/2022/03/receipt-2-1.svg" alt="SVG Icon"></noscript></span>
                            </div>
                            <div class="icon-info-box-content">
                                <span class="icon-subtext">150,000+</span>
                                <h3 class="icon-title">Tickets Solved</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="home-banner-btn">
					<?php
						//$checkout_url = WC()->cart->get_checkout_url();
					?>
                    <a href="<?php // echo $checkout_url.'?add-to-cart='. $jobstyle_redux_opt['hero-product_id']; ?>" class="common_btn" style="color: <?php //echo $jobstyle_redux_opt['hero-button-text-color']; ?> !important">
					<?php //echo $jobstyle_redux_opt['hero-button-text']; ?></a>
                </div>
                -->
            </div>
            <div class="col-lg-5 order-lg-2 mb-5 mb-lg-0">

                <div class="banner_popup">
                    <img class="w-100 d-block" src="<?php echo $jobstyle_redux_opt['hero-video-overlay-image']['url']; ?>" alt="">
                    <!--<a href="<?php //echo $jobstyle_redux_opt['hero-video-link']; ?>" class="popup_video">
                        <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/banner/palyBtn.png" alt="">
                    </a>-->
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
              start support   section
        =======================================
     -->
    <section class="support_section section_padding">
        <div class="container">
            <div class="support_group justify-content-center justify-content-md-between">
                <!-- item -->
                <div class="support_item mb-4 mb-lg-0">
                    <p class="suport_title"><?php echo $jobstyle_redux_opt['first-block-number']; ?></p>
                    <p class="suport_sub_title mb-0"><?php echo $jobstyle_redux_opt['first-block-title']; ?></p>
                    <p class="suport_sort_descripton mb-0"><?php echo $jobstyle_redux_opt['first-block-desc']; ?></p>
                </div>
                <!-- item -->
                <div class="support_item mb-4 mb-lg-0">
                    <p class="suport_title"><?php echo $jobstyle_redux_opt['secound-block-number']; ?></p>
                    <p class="suport_sub_title mb-0"><?php echo $jobstyle_redux_opt['secound-block-title']; ?></p>
                    <p class="suport_sort_descripton mb-0"><?php echo $jobstyle_redux_opt['secound-block-desc']; ?></p>
                </div>
                <!-- item -->
                <div class="support_item ">
                    <p class="suport_title"><?php echo $jobstyle_redux_opt['third-block-number']; ?></p>
                    <p class="suport_sub_title mb-0"><?php echo $jobstyle_redux_opt['third-block-title']; ?></p>
                    <p class="suport_sort_descripton mb-0"><?php echo $jobstyle_redux_opt['third-block-desc']; ?></p>
                </div>
            </div>
        </div>
        <!-- vector shape -->
        <div class="vector_shap">
            <img class="vector_shap_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/vector_shape.svg" alt="">
        </div>
    </section>
    <!-- 
        =======================================
              end support   section
        =======================================
     -->



    <!-- 
        =======================================
               start best seller map  section
        =======================================
     -->
    <section class="best_seller_map_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section_title_wrapper">
                        <h3 class="section_title mb-0"><?php _e( "Examples", "jobstyle" ); ?></h3>
                    </div>
                </div>
            </div>
		</div>

		<!-- product -->
		<div class="row m-0">
			<div class="col-12 col-sm-12  col-lg-12 mb-4">

				<!-- Product Card Start -->
				<div class="product-slider-wrapper">
					<?php
					$modalid = 1;
					$jobstyle_product = new WP_Query(
						array(
							'post_type'      =>'product',
							'posts_per_page' => -1,
							'order'          => 'DESC'
						)
					);
					while ( $jobstyle_product->have_posts() ) : 
					$jobstyle_product->the_post();
					$product = get_product(get_the_ID());
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
					?>
					<div class="card">
						<div class="card-body">
							<div class="product_img_wrapper">
								<?php //esc_html ( the_post_thumbnail('full', ['class' => 'd-block product_img']) ); ?>
								 <img src="<?php echo $featured_img_url; ?>"  class="d-block product_img"  alt="About us">
								<!--<div class="lock_icon_wraper">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/best_seller/lock.png" alt="">
								</div>-->
							</div>
							<!-- product content -->
							<div class="product_content">

								<!-- product name -->
								<div class="product_name_wrapper mb-2">
									<h3 class="product_name mb-0"><?php esc_html( the_title() ); ?></h3>
								</div>

								<ul class="product_review mb-0">
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/best_seller/start.svg" alt="">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/best_seller/start.svg" alt="">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/best_seller/start.svg" alt="">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/best_seller/start.svg" alt="">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/best_seller/start.svg" alt="">
										</a>
									</li>
								</ul>
								<!-- product price -->
								<div class="product_price_wrapper">
									<p class="product_price mb-0">$<?php echo  esc_html( get_post_meta( get_the_ID(), '_regular_price', true) ); ?></p>
								</div>
								<div class="product_desc"><?php esc_html( the_excerpt() ); ?></div>
								<div class="all_product_btn_wrapper home_product_btn">
								 
										<?php
						$checkout_url = WC()->cart->get_checkout_url();
					?>
    
         <a href="<?php echo $checkout_url.'?add-to-cart='. get_the_ID(); ?>" class="common_btn">
						Get Your Plan</a>
									
								</div>

							</div>
						</div>
					</div>
					<?php 
					endwhile;
					wp_reset_query();
					?>
				</div>
				<!-- Product Card End -->
			</div>
		</div>
    </section>
    <!-- 
        =======================================
               end best seller map  section
        =======================================
     -->


    <!-- 
        =======================================
              start customer review  section
        =======================================
     -->
    <section class="start_customer_review_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section_title_wrapper">
                        <h2 class="section_title mb-0"><?php _e( "Trusted By", "jobstyle" ); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="Partner-wrapper">
						
						 <?php 
                          $jobstylePartners = new WP_Query(
                              array(
                                  'post_type'      =>'partners',
                                  'posts_per_page' => -1,
                                  'order'          => 'ASC'
                              )
                          );
                          while ( $jobstylePartners->have_posts() ) : 
                          $jobstylePartners->the_post(); 
                        ?>
						
                        <div class="single-partner">
							<?php
								the_post_thumbnail( 'full',array('class'=>'img-fluid') ); 
							?> 
                        </div>
						<?php endwhile; ?>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 
        =======================================
              end customer review  section
        =======================================
     -->


    <!-- 
        =======================================
              start precision section
        =======================================
     -->
    <section class="precision_section section_padding">
        <div class="container">
            <?php 
              $jobstyle_about_us = new WP_Query(
                  array(
                      'post_type'      =>'page',
                      'posts_per_page' => -1,
                      'page_id' => '54',
                  )
              );
              while ( $jobstyle_about_us->have_posts() ) : 
              $jobstyle_about_us->the_post();
			  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
            ?>
            <div class="row  ">
                <div class="col-lg-5  mb-5 mb-lg-0">
                    <div class="precision_thumbnail_wrapper">
                        <?php //esc_html ( the_post_thumbnail('large', ['class' => 'd-block w-100']) ); ?>
						 <img src="<?php echo $featured_img_url; ?>"  class="d-block w-100"  alt="About us">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="precision_content ">
                        <div class="precision_label_wrapper">
                            <button class="precision_label_btn"><?php esc_html( the_title() ); ?></button>
                        </div>
                        <!-- section title -->
                        <div class="section_title_wrapper">
                            <p class="section_title mb-0"><?php echo esc_html( get_field('sescion_title') ); ?></p>
                        </div>
                        <!-- precision description -->
                        <div class="precision_description_wrapper">
                            <p class="precision_description mb-0"><?php esc_html( the_content() ); ?></p>
                        </div>

                        <!-- common button -->
                        <div class="common_btn_wrapper">
                            <a href="<?php echo get_home_url(); ?>/about-us/" class="common_btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
                wp_reset_query();
            ?>
        </div>

        <!-- vector shape -->
        <div class="vector_shap">
            <img class="vector_shap_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/vector_shape.svg" alt="">
        </div>
    </section>
    <!-- 
        =======================================
              end precision section
        =======================================
     -->


    <!-- 
        =======================================
              start faq section
        =======================================
     -->
    <section class="faq_section section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title_wrapper">
                <h2 class="section_title"><?php _e( "Frequently Asked Questions", "jobstyle" ); ?></h2>
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
              end faq section
        =======================================
     -->


    <!-- 
        =======================================
            start join community section
        =======================================
    -->
    <section class="join_community_section section_padding">
        <div class="container">
            
            <div class="join_community_section_inner home_join_community">
                <div class="section_title_wrapper">
                    <p class="section_title"><?php _e( "Join our Mailing List!", "jobstyle" ); ?></p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="49" title="Main Contact"]'); ?>
				<?php  if(!empty($jobstyle_redux_opt['privavy-policy-page'])){  ?>
	<div class="privacy-policy-text-btn"> <a href="<?php echo $jobstyle_redux_opt['privavy-policy-page']; ?>"><?php echo $jobstyle_redux_opt['privavy-policy-text']; ?></a> 
				</div>
				<?php } ?>
            </div>
        </div>
    </section>
     
		<!--
        =======================================
            end join community section
        =======================================
     -->



    <!-- 
        =======================================
              start article  section
        =======================================
     -->
    <section class="recent_article section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title_wrapper">
                <h2 class="section_title"><?php _e( "Don’t miss our recent articles", "jobstyle" ); ?></h2>
            </div>
            <div class="row">
                <!-- item -->
                <?php 
                  $jobstyle_blog = new WP_Query(
                      array(
                          'post_type'      =>'post',
                          'posts_per_page' => 3,
                          'order'          => 'ASC',
                      )
                  );
                  while ( $jobstyle_blog->have_posts() ) : 
                  $jobstyle_blog->the_post();
                ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover home-blog-card" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>);">
                        <div class="card_content">
                            <div class="card_content_top">
                                <?php esc_html ( the_post_thumbnail('full', ['class' => 'd-block w-100']) ); ?>
                            </div>
                            <div class="card_content_bottom">
                                <div class="post_date_wrapper">
                                    <p class="post_date mb-0"><?php echo  esc_html( date("M d , Y") ) ?></p>
                                </div>
                                <div class="post_title_wrapper">
									<p class="post_title mb-0"><a href="<?php esc_url( the_permalink() ); ?>"><?php echo substr(get_the_title(), 0, 55); if(strlen(get_the_title()) > 55){echo "[...]";} ?></a></p>
                                </div>
                                <div class="read_article_wrapper">
                                    <a href="<?php esc_url( the_permalink() ); ?>" class="read_article">Read article
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endwhile;
                wp_reset_query();
            ?>
            </div>
        </div>
    </section>
    <!-- 
        =======================================
              end article  section
        =======================================
     -->

<?php get_footer(); ?>