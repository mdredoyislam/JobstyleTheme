<?php get_header(); ?>

<?php
	while ( have_posts() ) : the_post(); 
?>
    <section class="best_seller_map_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                	<?php esc_html ( the_post_thumbnail('full', ['class' => 'w-100 d-block']) ); ?>
                	<div class="product_details_title_wrapper">
                        <p class="product_name"><?php esc_html( the_title() ); ?></p>
                    </div>
                	<p class="sort_description"><?php esc_html( the_content() ); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php
	endwhile;
?>

<?php get_footer(); ?>