<?php
	global $jobstyle_redux_opt;
	global $user_ID;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?></title>
    <!-- fonts -->
    <?php wp_head(); ?>
<script type="text/javascript">
    var stylesheet_directory_uri = '<?php echo get_template_directory_uri(); ?>';
</script>
</head>

<body <?php body_class(); ?>>
    <!-- 
        =======================================
                start header section
        =======================================
     -->
    <header class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php bloginfo("url") ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="<?php bloginfo("name"); ?>" style="width: 110px">
                  <!--  <img src="<?php echo $jobstyle_redux_opt['site-logo']['url']; ?>" alt="<?php bloginfo("name"); ?>" style="width: 110px">-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#showNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="showNav">
                        <?php
                            $jobstyle_menu = wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'container'         => false,
                                'menu_id'        => 'primary',
                                'menu_class'     => 'navbar-nav mx-auto nav-item-gap',
                                'echo' => false,
                            ) );
                            $jobstyle_menu = str_replace( "menu-item menu-item-type-custom menu-item-object-custom", "nav-item", $jobstyle_menu );
                            $jobstyle_menu = str_replace( "current-menu-item", "active", $jobstyle_menu );
                            $jobstyle_menu = str_replace( "current_page_item", "", $jobstyle_menu );
                            $jobstyle_menu = str_replace( "menu-item menu-item-type-post_type menu-item-object-page menu-item-home", "nav-item", $jobstyle_menu );
                            $jobstyle_menu = str_replace( '<a ', '<a class="nav-link" ', $jobstyle_menu );
                            echo wp_kses_post( $jobstyle_menu );
                        ?>

                    <div class="right_nav">
                        <ul class="navbar-nav nav-item-gap login-register">
                           <!-- <li class="nav-item ">
                                <a class=" cart_icon" href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/path.png" alt="">
                                </a>
                            </li>-->
							<?php if(!$user_ID){ 
							$url = home_url( '/' );
						
							?>
                            <li class="nav-item login_btn_wrapper">
                                <a class=" login_btn" href="<?php echo $url; ?>sign-in/">Login</a>
                            </li>
							<li class="nav-item login_btn_wrapper">
                                <a class=" login_btn register-btn" href="<?php echo $url; ?>sign-up/">Sign up</a>
                            </li>
							
							<?php }else{ ?>
							<li class="nav-item login_btn_wrapper ">
                                <a class=" login_btn " href="<?php echo $url; ?>my-account/"> <i class="fas fa-user"></i> My Account</a>
                            </li>
							<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- 
        =======================================
                end header section
        =======================================
     -->