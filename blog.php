<?php
/*
    Template Name: Blog Page 
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
                    <p class="banner_title text-center"><?php _e( "Don’t miss our recent articles", "jobstyle" ); ?></p>
                    <div class="search-container">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
		<div class="row mt-5"  id="ajaxnews-container" data-masonry='{ "percentPosition": true }'>
            <?php 
              $jobstyle_blog = new WP_Query(
                  array(
                      'post_type'      =>'post',
                      'posts_per_page' => -1,
					  'posts_per_page'    => 9,
                      'order'          => 'DESC',
                  )
              );
			  $exclude_otterdev_posts = array();
              while ( $jobstyle_blog->have_posts() ) : 
              $jobstyle_blog->the_post();
			  $exclude_otterdev_posts[] = get_the_ID();
            ?>
            <div class="col-lg-4">
                <div class="single-blog-wrapper">
                    <div class="single-blog-thumbnail" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>');">
						<a href="<?php esc_url( the_permalink() ); ?>"></a>
                        <?php esc_html ( the_post_thumbnail('full', ['class' => 'img-fluid']) ); ?>
                    </div>
                    <div class="single-blog-content">
                        <div class="post_title_wrapper">
                            <p class="post_title mb-0">
                                <a href="<?php esc_url( the_permalink() ); ?>"><?php echo substr(get_the_title(), 0, 55); if(strlen(get_the_title()) > 55){echo "[...]";} ?></a>
                            </p>
                        </div>
                        <!-- precision description -->
                        <div class="precision_description_wrapper">
                            <div class="precision_description mb-0">
								<?php echo substr(get_the_excerpt(), 0, 100); if(strlen(get_the_excerpt()) > 100){echo "[...]";} ?>
                            </div>
                        </div>
                       <!-- <div class="post-meta-section">
                            <div class="users-section">
                                <div class="avatar_wrapper">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                </div>
                                <div class="user-info">
                                    <h3 class="user-name"><?php esc_html( the_author() ); ?></h3>
                                    <p class="user-varification"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/Iconcheck.svg"><?php echo esc_html( get_field('author_detact') ); ?></p>
                                </div>
                            </div>
                            <div class="blog_date_wrapper">
                                <p class="post_date mb-0"><?php echo  esc_html( get_the_date('d M') ); ?></p>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
                wp_reset_postdata(); 
			
			
			$max_page_query = array(
                'post_type'         => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page'    => 6,
                'post__not_in'      => $exclude_otterdev_posts

            );

    
            $max_page_number = new WP_Query( $max_page_query );
            wp_reset_postdata();
            $max_page = $max_page_number->max_num_pages;
			
            ?>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="more-airticle-btn text-center"> 
				 <?php if ($max_page) { ?>
                <a href="javascript:void(0)"
                   class="load-more-btn common_btn" id="load-more"
                   data-exclude="<?php echo json_encode($exclude_otterdev_posts);?>" data-btntext="<?php _e('More Articles','otterdev'); ?>" data-btnloading="<?php       _e('Loading...','otterdev'); ?>"
                   data-page="1"
                   data-post="post"
                   data-container="ajaxnews-container"
                   data-perpage="<?php echo esc_attr( 6 ); ?>"
                   data-maxpage="<?php echo esc_attr(  $max_page ); ?>">
                    <?php _e('More Articles','otterdev'); ?>
                </a>
                             

        <?php } ?>
				
            </div>
        </div>
    </div>
</section>
<!-- 
    =======================================
           end banner  section
    =======================================
--> 
<?php get_footer(); ?>