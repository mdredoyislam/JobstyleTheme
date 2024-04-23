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
                <div class="banner_title_wrapper product-title-wrapper">
                    <div class="about_label_wrapper text-center">
                        <button class="precision_label_btn"><?php esc_html( the_title() ); ?></button>
                    </div>
                    <p class="banner_title text-center banner_title_contact"><?php echo get_field('sescion_title'); ?></p>              
                </div>
            </div>
        </div>
		<div class="row align-items-center">
			<?php
			$thumbUrl = get_the_post_thumbnail_url();
			$columClass = 12;
			if(!empty($thumbUrl)){
				?>
				<div class="col-lg-5">
				<div class="licence-img">
					<img src="<?php echo $thumbUrl; ?>" alt="licence Img" class="img-fluid">
				</div>
			</div>
			<?php
				$columClass = 7;
			}
			
			?>
			
			<div class="col-lg-<?php echo $columClass; ?>">
				<div class="licence-text"> 
						<?php  the_content(); ?>
					 
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
<?php get_footer(); ?>