<?php global $jobstyle_redux_opt; ?>



<!-- 
    =======================================
        start join community section
    =======================================
 -->
<section class="join_community_section section_padding join-footer">
    <div class="container">
        <!-- section title -->
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
                start footer section
        =======================================
     -->
    <footer class="footer_section">
        <div class="main_footer">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center">
                    <div class="col-lg-3 mb-5 mb-lg-0 ">
                        <div class="footer_logo">
							<a href="<?php bloginfo("url") ?>">
                            	<img src="<?php echo $jobstyle_redux_opt['jobstyle-footer-logo']['url']; ?>" alt="<?php bloginfo('name'); ?>" style="max-width: 140px;">
							</a>
                        </div>
                        <div class="company_bio">
                            <p class="company_bio_text mb-0"><?php echo $jobstyle_redux_opt['jobstyle-footer-desc']; ?></p>
                        </div>

                        <ul class="footer_social_nav">
							<?php if ($jobstyle_redux_opt['jobstyle-footer-social-media-links']['Facebook'] != null): ?>
                            <li class="footer_social_nav_item">
                                <a href="<?php echo $jobstyle_redux_opt['jobstyle-footer-social-media-links']['Facebook']; ?>" class="footer_social_nav_link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <?php endif; ?>
							
                        
                            <?php if ($jobstyle_redux_opt['jobstyle-footer-social-media-links']['Twitter'] != null): ?>
                            <li class="footer_social_nav_item">
                                <a href="<?php echo $jobstyle_redux_opt['jobstyle-footer-social-media-links']['Twitter']; ?>" class="footer_social_nav_link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if ($jobstyle_redux_opt['jobstyle-footer-social-media-links']['Instagram'] != null): ?>
                            <li class="footer_social_nav_item">
                                <a href="<?php echo $jobstyle_redux_opt['jobstyle-footer-social-media-links']['Instagram']; ?>" class="footer_social_nav_link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if ($jobstyle_redux_opt['jobstyle-footer-social-media-links']['LinkedIn'] != null): ?>
                            <li class="footer_social_nav_item">
                                <a href="<?php echo $jobstyle_redux_opt['jobstyle-footer-social-media-links']['LinkedIn']; ?>" class="footer_social_nav_link">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <?php endif; ?>
							    <?php if ($jobstyle_redux_opt['jobstyle-footer-social-media-links']['Google'] != null): ?>
                            <li class="footer_social_nav_item">
                                <a href="<?php echo $jobstyle_redux_opt['jobstyle-footer-social-media-links']['Google']; ?>" class="footer_social_nav_link">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if ($jobstyle_redux_opt['jobstyle-footer-social-media-links']['YouTube'] != null): ?>
                            <li class="footer_social_nav_item">
                                <a href="<?php echo $jobstyle_redux_opt['jobstyle-footer-social-media-links']['YouTube']; ?>" class="footer_social_nav_link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
						
						<div class="powered-by">
							<p>Powered by:</p>
							<img src="https://dev.wp.otterdev.io/jobsyte/wp-content/uploads/2022/01/Group-886.png" alt="Powered By">
						</div>

                    </div>

                    <div class=" col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="footer_title_wrapper">
                            <p class="footer_title"><?php _e( "Product", "jobstyle" ); ?></p>
                        </div>
                        <?php
                            $footer_nav_one = wp_nav_menu( array(
                                'theme_location' => 'footer_nav_one',
                                'container'         => false,
                                'menu_id'        => 'footer_nav_one',
                                'menu_class'     => 'footer_nav',
                                'echo' => false,
                            ) );
                            $footer_nav_one = str_replace( "menu-item menu-item-type-custom menu-item-object-custom", "footer_nav_item", $footer_nav_one );
                            $footer_nav_one = str_replace( '<a ', '<a class="footer_nav_link" ', $footer_nav_one );
                            echo wp_kses_post( $footer_nav_one );
                        ?>
                    </div>
                    <div class=" col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="footer_title_wrapper">
                            <p class="footer_title"><?php _e( "How it works", "jobstyle" ); ?></p>
                        </div>
                        <?php
                            $footer_nav_two = wp_nav_menu( array(
                                'theme_location' => 'footer_nav_two',
                                'container'         => false,
                                'menu_id'        => 'footer_nav_two',
                                'menu_class'     => 'footer_nav',
                                'echo' => false,
                            ) );
                            $footer_nav_two = str_replace( "menu-item menu-item-type-custom menu-item-object-custom", "footer_nav_item", $footer_nav_two );
                            $footer_nav_two = str_replace( '<a ', '<a class="footer_nav_link" ', $footer_nav_two );
                            echo wp_kses_post( $footer_nav_two );
                        ?>
                    </div>
                    <div class=" col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="footer_title_wrapper">
                            <p class="footer_title"><?php _e( "Company", "jobstyle" ); ?></p>
                        </div>
                        <?php
                            $footer_nav_three = wp_nav_menu( array(
                                'theme_location' => 'footer_nav_three',
                                'container'         => false,
                                'menu_id'        => 'footer_nav_three',
                                'menu_class'     => 'footer_nav',
                                'echo' => false,
                            ) );
                            $footer_nav_three = str_replace( "menu-item menu-item-type-custom menu-item-object-custom", "footer_nav_item", $footer_nav_three );
                            $footer_nav_three = str_replace( '<a ', '<a class="footer_nav_link" ', $footer_nav_three );
                            echo wp_kses_post( $footer_nav_three );
                        ?>
                    </div>
					<!--
                    <div class=" col-md-6 col-lg-2 ">
                        <div class="footer_title_wrapper">
                            <p class="footer_title"><?php _e( "More", "jobstyle" ); ?></p>
                        </div>
                        <?php
                           /* $footer_nav_four = wp_nav_menu( array(
                                'theme_location' => 'footer_nav_four',
                                'container'         => false,
                                'menu_id'        => 'footer_nav_four',
                                'menu_class'     => 'footer_nav',
                                'echo' => false,
                            ) );
                            $footer_nav_four = str_replace( "menu-item menu-item-type-custom menu-item-object-custom", "footer_nav_item", $footer_nav_four );
                            $footer_nav_four = str_replace( '<a ', '<a class="footer_nav_link" ', $footer_nav_four );
                            echo wp_kses_post( $footer_nav_four );
							*/
                        ?>
                    </div>
					-->
                </div>
            </div>
        </div>
        <div class="footer_socket">
            <div class="container">
                <div class="footer_socket_inner">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright_text mb-0"><?php echo $jobstyle_redux_opt['copyright-text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="vector_shap">
            <svg width="240" height="276" viewBox="0 0 240 276" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.1">
                    <path
                        d="M111.876 207.845C111.876 252.914 148.461 289.499 193.53 289.499C238.599 289.499 275.184 252.914 275.184 207.845C275.184 162.776 238.599 126.191 193.53 126.191C147.931 126.191 111.876 162.776 111.876 207.845ZM193 146.87C226.934 146.87 253.975 174.441 253.975 207.845H229.055C229.055 187.697 212.618 171.26 192.47 171.26V146.87H193Z"
                        fill="#00AEEF" />
                    <path
                        d="M386 195.651V175.503L371.154 164.368L361.61 176.563C360.019 118.769 328.736 68.3984 283.137 39.2363L274.124 75.2912C272.533 74.2308 270.412 73.1703 268.291 72.1099L270.942 32.3434L253.445 10.0742C234.357 3.18133 214.209 0 193 0C171.791 0 151.643 3.71155 132.555 10.0742L115.058 32.3434L117.709 72.1099C115.588 73.1703 113.997 74.2308 111.876 75.2912L102.863 39.2363C57.2637 68.3984 25.9808 118.769 24.3901 176.563L14.8461 164.368L0 175.503V195.651H37.6456C37.1154 199.363 37.1154 203.604 37.1154 207.846C37.1154 293.742 106.574 363.201 192.47 363.201C229.055 363.201 262.459 350.475 288.97 329.266L261.929 302.225C242.31 316.541 218.451 325.025 192.47 325.025C127.783 325.025 75.2912 272.533 75.2912 207.846C75.2912 143.159 127.783 90.6676 192.47 90.6676C257.157 90.6676 309.648 143.159 309.648 207.846C309.648 233.297 301.165 257.157 287.379 276.245L314.42 303.286C335.099 276.775 347.824 243.371 347.824 207.316C347.824 203.074 347.824 199.363 347.294 195.121L386 195.651Z"
                        fill="#fff" />
                </g>
            </svg>
            <!-- <img class="vector_shap_img" src="assets/images/footer/vector_shape.svg" alt=""> -->
        </div>
    </footer>
    <!-- 
        =======================================
                end footer section
        =======================================
     -->




    <!-- js -->
    <?php wp_footer(); ?>
</body>

</html>