<?php
if ( site_url() == "http://localhost/WP/jobsyte/" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function jobstyle_theme_setup() {
    load_theme_textdomain( "jobstyle" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );
}
add_action( "after_setup_theme", "jobstyle_theme_setup" );
//Menu Register
register_nav_menu( "primary", __( "Primary Menu", "jobstyle" ) );


//Menu Register
register_nav_menu( "footer_nav_one", __( "Footer Memu One", "jobstyle" ) );
register_nav_menu( "footer_nav_two", __( "Footer Memu Two", "jobstyle" ) );
register_nav_menu( "footer_nav_three", __( "Footer Memu Three", "jobstyle" ) );
register_nav_menu( "footer_nav_four", __( "Footer Memu Four", "jobstyle" ) );


//Theme Logo Support Customizer
add_theme_support( 'custom-logo', array(
    'height'               => 40,
    'width'                => 140,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );

function jobstyle_assets() {
    wp_enqueue_style( "googlefont","//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap", null, "1.0" );
	wp_enqueue_style( "fontawesome","//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" , null, "1.0" );
    wp_enqueue_style( "bootstrap","//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", null, "1.0" );
    wp_enqueue_style( "magnific-popup-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "owl-carousel-css", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl-theme-css", get_theme_file_uri( "/assets/css/owl.theme.default.min.css" ), null, "1.0" );

    wp_enqueue_style( "slick-css", get_theme_file_uri( "/assets/css/slick.css" ), null, "1.0" );
    wp_enqueue_style( "slick-min-css", get_theme_file_uri( "/assets/css/slick-theme.css" ), null, "1.0" );



    wp_enqueue_style( "common-css", get_theme_file_uri( "/assets/css/common.css" ), null, "1.0" );
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, VERSION );

    wp_enqueue_style( "jobstyle-css", get_stylesheet_uri(), null, VERSION );




    wp_enqueue_script( "jquery-min-js", "//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array( "jquery" ), "1.0", true );
	wp_enqueue_script( "masonry-js", "//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js", array( "jquery" ), "1.0", true );
   // wp_enqueue_script('jquery-3.6.0', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array('jquery'), false, true);
	wp_enqueue_script( "fontawesome", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js", array( "jquery" ), "1.0", true );
    wp_enqueue_script( "magnific-popup-js", get_theme_file_uri( "/assets/js/jquery.magnific-popup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "owl-carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "bootstrap-js","//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array( "jquery" ), "1.0", true );

    wp_enqueue_script( "slick-min-js", get_theme_file_uri( "/assets/js/slick.min.js" ), array( "jquery" ), "VERSION", true );

    wp_enqueue_script( "app-js", get_theme_file_uri( "/assets/js/app.js" ), array( "jquery" ), "VERSION", true );
}
add_action( "wp_enqueue_scripts", "jobstyle_assets" );




function otterdev_ajax_scripts()
{


    wp_enqueue_script('load-more-main', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery'), time(), true);

    wp_localize_script('load-more-main', 'otterdev_loadmore', array(
        'ajaxurl' => admin_url('admin-ajax.php'), // WordPress AJAX
    ));
}

add_action('wp_enqueue_scripts', 'otterdev_ajax_scripts', 9999);



//Custom Post Type
function jobstyle_register_my_cpts_section() {

    /**
     * Post Type: Section.
     */

    $labels = array(
        "name"           => __( "Testimonial's", "jobstyle" ),
        "singular_name"  => __( "Testimonial", "jobstyle" ),
        "featured_image" => __( 'Customar Photo', 'jobstyle' )
    );

    $args = array(
        "label"               => __( "Testimonials", "jobstyle" ),
        "labels"              => $labels,
        "description"         => "",
        "public"              => true,
        "publicly_queryable"  => true,
        "show_ui"             => true,
        "show_in_rest"        => false,
        "rest_base"           => "",
        "has_archive"         => false,
        "show_in_menu"        => true,
        "show_in_nav_menus"   => true,
        "exclude_from_search" => false,
        "capability_type"     => "post",
        "map_meta_cap"        => true,
        "hierarchical"        => false,
        "rewrite"             => array( "slug" => "testimonial", "with_front" => false ),
        "query_var"           => true,
        "menu_position"       => 5,
        "menu_icon"           => "dashicons-businessman",
        "supports"            => array( "title", "editor", "thumbnail","excerpt" ),
        "taxonomies"          => array( 'category' )
    );

    register_post_type( "testimonial", $args );


    $labels = array(
        "name"           => __( "FAQ's", "jobstyle" ),
        "singular_name"  => __( "FAQ", "jobstyle" ),
        "featured_image" => __( 'Customar Photo', 'jobstyle' )
    );

    $args = array(
        "label"               => __( "FAQ's", "jobstyle" ),
        "labels"              => $labels,
        "description"         => "",
        "public"              => true,
        "publicly_queryable"  => true,
        "show_ui"             => true,
        "show_in_rest"        => false,
        "rest_base"           => "",
        "has_archive"         => false,
        "show_in_menu"        => true,
        "show_in_nav_menus"   => true,
        "exclude_from_search" => false,
        "capability_type"     => "post",
        "map_meta_cap"        => true,
        "hierarchical"        => false,
        "rewrite"             => array( "slug" => "faq", "with_front" => false ),
        "query_var"           => true,
        "menu_position"       => 5,
        "menu_icon"           => "dashicons-welcome-learn-more",
        "supports"            => array( "title", "editor", "thumbnail","excerpt" ),
        "taxonomies"          => array( 'category' )
    );

    register_post_type( "faq", $args );
	
	$labels = array(
        "name"           => __( "Work's", "jobstyle" ),
        "singular_name"  => __( "Work", "jobstyle" ),
        "featured_image" => __( 'Work Photo', 'jobstyle' )
    );

    $args = array(
        "label"               => __( "Work's", "jobstyle" ),
        "labels"              => $labels,
        "description"         => "",
        "public"              => true,
        "publicly_queryable"  => true,
        "show_ui"             => true,
        "show_in_rest"        => false,
        "rest_base"           => "",
        "has_archive"         => false,
        "show_in_menu"        => true,
        "show_in_nav_menus"   => true,
        "exclude_from_search" => false,
        "capability_type"     => "post",
        "map_meta_cap"        => true,
        "hierarchical"        => false,
        "rewrite"             => array( "slug" => "work", "with_front" => false ),
        "query_var"           => true,
        "menu_position"       => 5,
        "menu_icon"           => "dashicons-bank",
        "supports"            => array( "title", "editor", "thumbnail","excerpt" ),
        "taxonomies"          => array( 'category' )
    );

    register_post_type( "work", $args );
}

add_action( 'init', 'jobstyle_register_my_cpts_section' );

//Redux Plugin Include

require ( get_theme_file_path('../../plugins/jobstyle-theme-option/redux-core/framework.php') );
require ( get_theme_file_path('../../plugins/jobstyle-theme-option/sample/config.php') );





//load more
function otterdev_load_more()
{

    $post_exclude = json_decode($_POST['posts_exclude']);
    $paged = $_POST['page'];
    $post_per_page = $_POST['per_page'];  

        $args = array(
            'post_type' => "post",
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => $post_per_page,
            'post__not_in' => $post_exclude,
            'paged' => $paged,
        );


 

        global $post;
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();




?>

 
 			<div class="col-lg-4">
                <div class="single-blog-wrapper">
                    <div class="single-blog-thumbnail" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>');">
                        <?php esc_html ( the_post_thumbnail('full', ['class' => 'img-fluid']) ); ?>
                    </div>
                    <div class="single-blog-content">
                        <div class="post_title_wrapper">
                            <p class="post_title mb-0">
                                <a href="<?php esc_url( the_permalink() ); ?>"><?php esc_html( the_title() ); ?></a>
                            </p>
                        </div>
                        <!-- precision description -->
                        <div class="precision_description_wrapper">
                            <div class="precision_description mb-0">
                                <?php esc_html( the_excerpt() ); ?>
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
        else :
        // echo "<p>No post found!</p>";
        endif;
        wp_reset_query();




    die();
}



//Page Slug Body Class
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');

//Search
function jobstyle_search_form( $form ) {
    $homedir      = home_url( "/" );
    $button_label = __( "Search", "jobstyle" );
    $post_type    = <<<PT
<input type="hidden" name="post_type" value="post">
PT;

    if ( is_post_type_archive( 'post' ) ) {
        $post_type = <<<PT
<input type="hidden" name="post_type" value="post">
PT;
    }


    $newform = <<<FORM
	<form method="GET" action="{$homedir}" id="search-blog">
          <div class="search_wrapper">
                <input type="search" placeholder="Search article" class="input_control search_control" value="" name="s">
          </div>
		  {$post_type}
          <button class="common_outline_btn">{$button_label}</button>            
    </form>
FORM;

    return $newform;
}


add_filter( "get_search_form", "jobstyle_search_form" );

/*Login Page Redirect*/
function redirect_to_custom_login_page(){
	wp_redirect(site_url() . "/sign-in");
	exit();
}
add_action("wp_logout", "redirect_to_custom_login_page");
add_action("init", "fn_redirect_wp_admin");
function fn_redirect_wp_admin(){
	global $pagenow;
	if($pagenow == "wp-login.php" && $_GET['action'] != "logout"){
		wp_redirect(site_url() . "/sign-in");
		exit();
	}
}



 add_action( 'woocommerce_register_form', 'wc_register_form_password_repeat' );
function wc_register_form_password_repeat() {
?>
<p class="form-row form-row-wide">
<label for="reg_password2"><?php _e( 'Password Repeat', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>" />
</p>
<?php
}



function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );



function wc_billing_field_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Billing details' :
            $translated_text = __( 'User Information', 'woocommerce' );
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'wc_billing_field_strings', 20, 3 );


//Show product name on order table
function the_dramatist_get_order_prod_name( $order ) {
    $prod_names = array();
    foreach ($order->get_items() as $key => $lineItem) {
        $prod_names[] = $lineItem['name'];
    }
    return implode(",", $prod_names );
}


//My Account orders tab name change
add_filter ( 'woocommerce_account_menu_items', 'misha_rename_downloads' );
function misha_rename_downloads( $menu_links ){
	 
	$menu_links['orders'] = 'My Activity';

	return $menu_links;
}





 /**
 Remove all possible fields
 **/
function wc_remove_checkout_fields( $fields ) {

    // Billing fields
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_email'] );
    unset( $fields['billing']['billing_phone'] );
    unset( $fields['billing']['billing_state'] );
    unset( $fields['billing']['billing_first_name'] );
    unset( $fields['billing']['billing_last_name'] );
    unset( $fields['billing']['billing_address_1'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] );

    // Shipping fields
    unset( $fields['shipping']['shipping_company'] );
    unset( $fields['shipping']['shipping_phone'] );
    unset( $fields['shipping']['shipping_state'] );
    unset( $fields['shipping']['shipping_first_name'] );
    unset( $fields['shipping']['shipping_last_name'] );
    unset( $fields['shipping']['shipping_address_1'] );
    unset( $fields['shipping']['shipping_address_2'] );
    unset( $fields['shipping']['shipping_city'] );
    unset( $fields['shipping']['shipping_postcode'] );

    // Order fields
    unset( $fields['order']['order_comments'] );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );