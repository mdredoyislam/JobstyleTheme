<?php
/*
    Template Name: Products
*/
	get_header(); 
?>

<!-- 
    =======================================
           start banner  section
    =======================================
-->
<section class="banner_section blog-page-banner" id="sescion_title">
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
			<div class="col-lg-5">
				<div class="licence-img">
					<img src="<?php echo $jobstyle_redux_opt['road-occupancy-img']['url']; ?>" alt="licence Img" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="licence-text">
					<h3 class="licence-title">
						<?php echo $jobstyle_redux_opt['road-occupancy-title']; ?>
					</h3>
					<?php echo $jobstyle_redux_opt['road-occupancy-desc']; ?>
					<?php if(isset($jobstyle_redux_opt['road-occupancy-list'])  && !empty($jobstyle_redux_opt['road-occupancy-list'])): ?>
					<ul class="licence-list">
						<?php 
							foreach($jobstyle_redux_opt['road-occupancy-list'] as $licencelistvalue):
						if(empty($licencelistvalue)){
							continue;
						}
						?>
						<li><img src="<?php echo $jobstyle_redux_opt['road-occupancy-list-icon-img']['url']; ?>" alt="icon"> <span><?php echo $licencelistvalue; ?></span></li>
						<?php endforeach; ?>
					</ul>
					<?php endif ?>
					<!-- common button -->
					<div class="common_btn_wrapper">
						<?php
						$checkout_url = WC()->cart->get_checkout_url();
					?>
    
         <a href="<?php echo $checkout_url.'?add-to-cart='. $jobstyle_redux_opt['road-occupancy-button-url']; ?>" class="common_btn">
						<?php echo $jobstyle_redux_opt['road-occupancy-button-label']; ?></a>
          
         
						 
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
           start trafic control  section
    =======================================
-->
<section class="trafic-control-section" id="traffic-control-title">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="licence-text trafic-text">
					<h3 class="licence-title">
						<?php echo $jobstyle_redux_opt['traffic-control-title']; ?>
					</h3>
					<?php echo $jobstyle_redux_opt['traffic-control-desc']; ?>
					<?php if(isset($jobstyle_redux_opt['traffic-control-list']) && !empty($jobstyle_redux_opt['traffic-control-list'])): ?>
					<ul class="licence-list">
						<?php 
							foreach($jobstyle_redux_opt['traffic-control-list'] as $traficlistvalue):
						if(empty($traficlistvalue)){
							continue;
						}
						?>
						<li><img src="<?php echo $jobstyle_redux_opt['traffic-control-list-icon-img']['url']; ?>" alt="icon"> <span><?php echo $traficlistvalue; ?></span></li>
						<?php endforeach; ?>
					</ul>
					<?php endif ?>
					<!-- common button -->
					<div class="common_btn_wrapper">
						 
						<a href="<?php echo $checkout_url.'?add-to-cart='. $jobstyle_redux_opt['traffic-control-button-url']; ?>" class="common_btn">
						<?php echo $jobstyle_redux_opt['traffic-control-button-label']; ?></a>
						
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="licence-img">
					<img src="<?php echo $jobstyle_redux_opt['traffic-control-img']['url']; ?>" alt="trafic Img" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 
    =======================================
           end trafic control  section
    =======================================
-->
<!-- 
    =======================================
           start Traffic Management Plan  section
    =======================================
-->
<section class="trafic-management-plan-section"  id="traffic-management-title">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="licence-img">
					<img src="<?php echo $jobstyle_redux_opt['traffic-management-img']['url']; ?>" alt="licence Img" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="licence-text">
					<h3 class="licence-title">
						<?php echo $jobstyle_redux_opt['traffic-management-title']; ?>
					</h3>
					<?php echo $jobstyle_redux_opt['traffic-management-desc']; ?>
					<?php if(isset($jobstyle_redux_opt['traffic-management-list'])  && !empty($jobstyle_redux_opt['traffic-management-list'])): ?>
					<ul class="licence-list">
						<?php 
							foreach($jobstyle_redux_opt['traffic-management-list'] as $managementlistvalue):
						if(empty($managementlistvalue)){
							continue;
						}
						?>
						<li><img src="<?php echo $jobstyle_redux_opt['traffic-management-list-icon-img']['url']; ?>" alt="icon"> <span><?php echo $managementlistvalue; ?></span></li>
						<?php endforeach; ?>
					</ul>
					<?php endif ?>
					<!-- common button -->
					<div class="common_btn_wrapper">
					 
						
						
						<a href="<?php echo $checkout_url.'?add-to-cart='. $jobstyle_redux_opt['traffic-management-button-url']; ?>" class="common_btn">
						<?php echo $jobstyle_redux_opt['traffic-management-button-label']; ?></a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 
    =======================================
           end Traffic Management Plan  section
    =======================================
-->
<!-- 
    =======================================
           start Traffic Guidance Scheme  section
    =======================================
-->
<section class="trafic-control-section"   id="traffic-guidance-title">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="licence-text trafic-text">
					<h3 class="licence-title">
						<?php echo $jobstyle_redux_opt['traffic-guidance-title']; ?>
					</h3>
					<?php echo $jobstyle_redux_opt['traffic-guidance-desc']; ?>
					<?php if(isset($jobstyle_redux_opt['traffic-guidance-list'])  && !empty($jobstyle_redux_opt['traffic-guidance-list'])): ?>
					<ul class="licence-list">
						<?php 
							foreach($jobstyle_redux_opt['traffic-guidance-list'] as $traficguidancevalue):
						if(empty($traficguidancevalue)){
							continue;
						}
						?>
						<li><img src="<?php echo $jobstyle_redux_opt['traffic-guidance-list-icon-img']['url']; ?>" alt="icon"> <span><?php echo $traficguidancevalue; ?></span></li>
						<?php endforeach; ?>
					</ul>
					<?php endif ?>
					<!-- common button -->
					<div class="common_btn_wrapper">
					 
						
							<a href="<?php echo $checkout_url.'?add-to-cart='. $jobstyle_redux_opt['traffic-guidance-button-url']; ?>" class="common_btn">
						<?php echo $jobstyle_redux_opt['traffic-guidance-button-label']; ?></a>
						
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="licence-img">
					<img src="<?php echo $jobstyle_redux_opt['traffic-guidance-img']['url']; ?>" alt="trafic Img" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 
    =======================================
           endTraffic Guidance Scheme  section
    =======================================
-->
<!-- 
    =======================================
           start Work Zone Permits  section
    =======================================
-->
<!--
<section class="trafic-management-plan-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="licence-img">
					<img src="<?php echo $jobstyle_redux_opt['work-zone-permits-img']['url']; ?>" alt="licence Img" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="licence-text">
					<h3 class="licence-title">
						<?php echo $jobstyle_redux_opt['work-zone-permits-title']; ?>
					</h3>
					<?php echo $jobstyle_redux_opt['work-zone-permits-desc']; ?>
					<?php if(isset($jobstyle_redux_opt['work-zone-permits-list']) && !empty($jobstyle_redux_opt['work-zone-permits-list'])): ?>
					<ul class="licence-list">
						<?php 
							foreach($jobstyle_redux_opt['work-zone-permits-list'] as $workzonevalue):
						if(empty($workzonevalue)){
							continue;
						}
						?>
						<li><img src="<?php echo $jobstyle_redux_opt['work-zone-permits-list-icon-img']['url']; ?>" alt="icon"> <span><?php echo $workzonevalue; ?></span></li>
						<?php endforeach; ?>
					</ul>
					<?php endif ?>
				 
					<div class="common_btn_wrapper">  
						
							<a href="<?php echo $checkout_url.'?add-to-cart='. $jobstyle_redux_opt['work-zone-permits-button-url']; ?>" class="common_btn">
						<?php echo $jobstyle_redux_opt['work-zone-permits-button-label']; ?></a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->
<!-- 
    =======================================
           end Work Zone Permits  section
    =======================================
-->
<!-- 
    =======================================
           start product Plan  section
    =======================================
-->
<section class="product-plan-section"   id="footer-contact">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="product-plan-text">
					<h3 class="product-plan-title">
						<?php echo $jobstyle_redux_opt['need-a-plan-title']; ?>
					</h3>
					<p>
						<?php echo $jobstyle_redux_opt['need-a-plan-desc']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product-plan-button">
					<a <?php if($jobstyle_redux_opt['need-a-plan-button-target'] == 1): ?>target="__blank"<?php endif; ?> href="<?php echo $jobstyle_redux_opt['need-a-plan-button-url']; ?>" class="common_btn"><?php echo $jobstyle_redux_opt['need-a-plan-button-label']; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 
    =======================================
           end product Plan  section
    =======================================
-->
<?php get_footer(); ?>