<?php
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
                    <div class="search-container search-page-container">
                        <form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="search-blog">
                            <div class="search_wrapper">
                                <input type="search" placeholder="Search article" class="input_control search_control" value="" name="s">
                            </div>
                            <button class="common_outline_btn">Search</button>            
                        </form>
						<div class="filter-wrapper">
							
							<?php 
								$terms = get_the_tags();   
                    			if(!empty($terms)){                
                     		?>
							<div class="tagquery">
								<ul class="list-unstyled taglist">
									<li class="init">Tags</li>
									<?php
										$url = site_url();
										foreach ($terms as $key => $value) {
											 $name = ($value->name);
											 $slug = ($value->slug); 
											 if(!empty($name)){ 
												echo "<li><a href='".$url.'/tag/'.$slug."'>$name</a></li>";
											 }
										}
									?>
								</ul>
								<?php } ?>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row mt-5"  id="ajaxnews-container" data-masonry='{ "percentPosition": true }'>
            <?php
              while ( have_posts() ) : the_post();
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
                       <div class="post-meta-section">
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
                        </div>
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
    </div>
</section>
<!-- 
    =======================================
           end banner  section
    =======================================
--> 
<?php get_footer(); ?>