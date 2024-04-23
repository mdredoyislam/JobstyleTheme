<?php get_header(); ?>
<div class="social-share-list leftside-social">
	<ul>
		<li>
			<h5>Share : </h5>
		</li> 
		<li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="facebook" target="_blank"> <i class="fab fa-facebook-f"></i></a></li>
		<li><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ); ?>" class="twitter" target="_blank"> <i class="fab fa-twitter"></i></a></li>
		<li><a href="https://telegram.me/share/url?url=<?php echo urlencode( get_the_title() ); ?>" class="telegram" target="_blank"> <i class="fab fa-telegram"></i></a></li> 
		<li><a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_the_title() ); ?>" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp"></i></a></li>                
	</ul>
</div>
<!-- 
    =======================================
           start banner  section
    =======================================
-->
<section class="banner_section single-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pr-4">
				<?php
				 while ( have_posts() ) : the_post();
				?>
                <div class="blog-details-wrapper">
                    <div class="blog-thumbnail">                        
						<?php
							the_post_thumbnail( 'full',array('class'=>'img-fluid') ); 
						?>
                    </div>
                   <!-- <div class="post-meta-section blog-details-meta-wrapper">
                        <div class="users-section">
                            <div class="avatar_wrapper">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                            </div>
                            <div class="user-info">
                                <h3 class="user-name"><?php  echo get_the_author(); ?></h3>
                                <p class="user-varification">
									<?php //echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
									 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/Iconcheck.svg">
									  <?php echo esc_html( get_field('author_detact') ); ?></p>
                            </div>
                        </div>
                        <div class="blog_date_wrapper">
                            <p class="post_date mb-0">PUBLISHED ON <?php echo  esc_html( get_the_date('M d Y') ); ?></p>
                        </div>
                    </div>-->
                    <div class="banner_title_wrapper mt-36">
                        <p class="banner_title"><?php echo  get_the_title(); ?></p>
                    </div>
                    <div class="details-page-content">
						<?php the_content(); ?>
                      <!--  <h3>Microsoft Patch Management</h3>
                        <p>Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then, she likes it and this supports us too, so I went along without any hassle. At first I was depressed, but then as I asked around and looked around, I ended up having more fun in Las Vegas than I would have thought. And no.</p>

                        <div class="details-page-slider">
                            <div class="single-slide"> 
								<?php
								//	the_post_thumbnail( 'full',array('class'=>'img-fluid') ); 
								?>
                            </div>
                        </div>-->


                     <!--   <h3>Here are some of the better attractions you must see on your visit.</h3>
                        <p>
                            Hoover Dam and the Grand Canyon: Book yourself a seat on any of the many sightseeing tours available and go and watch the architectural marvel that is Hoover Dam built over the Grand canyon which is also a grand sight to see by itself. Black Canyon is another must see as is Lake Mead which is so beautiful just because it is a body of water all surrounded by desert-like nature. Colorado River:</p>
                        <p>
                            While looking at the Dam and Canyon is from above, to see the true beauty of the river, you have to go down. The Colorado river is excellent for river-rafting and water sports, but you do not have to take part if it is not your thing. Instead just sit back and enjoy another of nature’s marvels.
                        </p>


                        <h4 class="mt-5">Bonnie Springs</h4>
                        <p>
                            Who can not resist going to one of the old towns like those in the Western gun slinging movies? Your destination needs to be Old Nevada. There you can delight in an old western town right in the middle of Red Rock Canyon. They host western shootouts too so come prepared, partner! I could go on and on about other attractions like the theme park in Circus Circus, the Gilcrease Nature Sanctuary, the Henderson Bird Viewing Preserve and Mt. Charleston but I think you get the picture. In Las Vegas and hate gambling? Do not despair. Just go out and have some clean un-gambling fun.
                        </p>
-->
                    </div>
                </div>
				
				<?php endwhile; ?>
				
				
				<div class="social-share-list page-bottom-social">
	<ul>
		<li>
			<h5>Share : </h5>
		</li> 
		<li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="facebook" target="_blank"> <i class="fab fa-facebook-f"></i></a></li>
		<li><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ); ?>" class="twitter" target="_blank"> <i class="fab fa-twitter"></i></a></li>
		<li><a href="https://telegram.me/share/url?url=<?php echo urlencode( get_the_title() ); ?>" class="telegram" target="_blank"> <i class="fab fa-telegram"></i></a></li> 
		<li><a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_the_title() ); ?>" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp"></i></a></li>                
	</ul>
</div>
				
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrapper">
                    <form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="search-blog">
                        <div class="search_wrapper">
                            <input type="search" placeholder="Search" class="input_control search_control" value="" name="s">
                        </div>          
                    </form>
                    <div class="sidebar-fetured-post">
                        <h3 class="fetured-title">Featured Articles</h3>
						<?php 
						  $jobstyle_blog = new WP_Query(
							  array(
								  'post_type'      =>'post',
								  'posts_per_page' => 4,
								  'order'          => 'DESC',
							  )
						  );
						  while ( $jobstyle_blog->have_posts() ) : 
						  $jobstyle_blog->the_post();
						?>
                        <div class="fetured-single-post">
                            <div class="fetured-post-image">
                               <a href="<?php esc_url( the_permalink() ); ?>"><?php
									the_post_thumbnail( array(76, 76),array('class'=>'img-fluid') ); 
								   ?></a>
                            </div>
                            <div class="fetured-post-content">
                                <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                <p class="post-date">July 02, 2021</p>
                            </div>
                        </div>
						
						<?php endwhile; ?>   
						   
                      
                    </div>
                    <div class="sidebar-fetured-post">
                        <h3 class="fetured-title">Recent Posts</h3>
						
						<?php 
						  $jobstyle_blog = new WP_Query(
							  array(
								  'post_type'      =>'post',
								  'posts_per_page' => 4,
								  'order'          => 'DESC',
							  )
						  );
						  while ( $jobstyle_blog->have_posts() ) : 
						  $jobstyle_blog->the_post();
						?>
                        <div class="fetured-single-post">
                            <div class="fetured-post-image">
                               <a href="<?php esc_url( the_permalink() ); ?>"><?php
									the_post_thumbnail( array(76, 76),array('class'=>'img-fluid') ); 
								   ?></a>
                            </div>
                            <div class="fetured-post-content">
                                <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                <p class="post-date">July 02, 2021</p>
                            </div>
                        </div>
						
						<?php endwhile; ?>   
                    </div>
                    <div class="sidebar-fetured-post">
                        <h3 class="fetured-title">Featured Tags</h3>
                        <div class="post-tags">
							   <?php  $post_tags =  get_tags();
							 
if ( ! empty( $post_tags ) ) {
    foreach( $post_tags as $post_tag ) {
        echo '<a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a>';
    }
}    ?>  
                        </div>
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
        <div class="row justify-content-center">
            <div class="section_title_wrapper">
                <p class="section_title"><?php _e( "Want more? You might like <br /> these articles", "jobstyle" ); ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
              $jobstyle_blog = new WP_Query(
                  array(
                      'post_type'      =>'post',
                      'posts_per_page' => 3,
                      'order'          => 'DESC',
                  )
              );
              while ( $jobstyle_blog->have_posts() ) : 
              $jobstyle_blog->the_post();
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
                     <!--   <div class="post-meta-section">
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
                wp_reset_query();
            ?>
        </div>
    </div>
</section>
<!-- 
=======================================
      end support   section
=======================================
--> 
<?php get_footer(); ?>