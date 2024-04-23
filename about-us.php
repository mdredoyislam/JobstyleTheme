<?php
/*
    Template Name: About Us Page 
*/
get_header(); 
?>
<!-- 
    =======================================
           start banner  section
    =======================================
-->
<section class="banner_section about-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner_title_wrapper">
                    <div class="about_label_wrapper text-center">
                        <button class="precision_label_btn"><?php esc_html( the_title() ); ?></button>
                    </div>
                    <p class="banner_title text-center"><?php echo esc_html( get_field('sescion_title') ); ?></p>              
                </div>
                <div class="precision_thumbnail_wrapper about-banner-image">
                    <img class="d-block w-100" src="<?php echo esc_url( get_field('abou_banner_image')['url'] ); ?>" alt="Image">
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-lg-12">
                <div class="precision_content section_padding">
                    <!-- precision description -->
                    <div class="precision_description_wrapper about-secound-content">
                        <h3 class="about-jobstyle-title"><?php echo   get_field('about_secound_title'); ?></h3>
                        <?php echo   get_field('about_content');?>
                    </div>
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
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- section title -->
                <div class="plan_title_wrapper">
                    <p class="section_title about-plan-title"><?php echo  get_field('about_plan_title'); ?></p>
                </div>
                <div class="plan_description_wrapper">
                    <p class="banner_description"><?php echo esc_html( get_field('about_plan_desc') ); ?></p>
                </div>
                <div class="about-page-btn">
                    <button class="common_btn"><?php echo esc_html( get_field('about_page_plan_btn_text') ); ?></button>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                <img class="d-block w-100" src="<?php echo esc_url( get_field('about_page_plan_image')['url'] ); ?>" alt="Image">
            </div>
        </div>
    </div>
</section>
<!-- 
=======================================
      end support   section
=======================================
-->
<!-- 
=======================================
      start customer review  section
=======================================
-->
<section class="about_customer_review_section section_padding">
<div class="container">
    <div class="owl-carousel owl-theme owl-loaded">
        <?php
          $jobstyle_testimonial = new WP_Query(
              array(
                  'post_type'      =>'testimonial',
                  'posts_per_page' => -1,
                  'order'          => 'ASC'
              )
          );
          while ( $jobstyle_testimonial->have_posts() ) : 
          $jobstyle_testimonial->the_post();
        ?>
        <div class="row justify-content-between">
            <div class="col-md-6 mb-4 mb-md-0 col-lg-4">
                <div class="customer_img_wrapper">
                    <?php esc_html ( the_post_thumbnail('full') ); ?>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-0 col-lg-7">
                <!-- section title -->
                <div class="section_title_wrapper">
                    <p class="section_title mb-0 text-left">
                        <?php esc_html( the_title() ); ?>
                    </p>
                </div>

                <div class="customer_review_inner">
                    <div class="qoate_img_wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/customer_review/left-quote.png" alt="">
                    </div>
                    <div class="review_wrapper">
                        <div class="review_text mb-0">
                            <?php esc_html( the_content() ); ?>
                        </div>
                    </div>
                    <div class="reviewer_name_wrapper">
                        <p class="reviewer_name mb-0"><?php echo esc_html( get_field('reviewer_name') ); ?></p>
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
      end customer review  section
=======================================
-->
<?php get_footer(); ?>