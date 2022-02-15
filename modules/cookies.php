<?php 
$title = settings('site_title').'-'.translate('cookie_policy');
$desc  = settings('seo_desc');
$keyw  = settings('seo_keyword');
 ?>
<!-- START  -->
    <?php include_once "partials/head.php"; ?>
    <!-- END  -->

    <!-- START  -->
    <?php include_once "partials/topbar.php"; ?>
    <!-- END  -->

    <!-- START  -->
    <?php include_once "partials/menu.php"; ?>
    <!-- END  -->
    
    <!-- START  -->
    <?php include_once "partials/sidebar.php"; ?>
    <!-- END  -->

    <!-- START  -->
    <?php include_once "partials/modal.php"; ?>
    <!-- END  -->



<div class="page-title-area" style="background-image: url(<?= site_url() ?>/assets/uploads/backgrounds/cookies/<?= back_photo('cookies') ?>)">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2><?= translate('cookie_policy') ?></h2>
					<ul>
						<li><a href="<?= site_url() ?>"><?= translate('home') ?></a></li>
						<li><?= translate('cookie_policy') ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="about-area ptb-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="about-content">                        
					<h2><?= translate('cookie_policy') ?></h2>
					<p></p>
					<p>We use different types of cookies to optimize your experience on our website. Click on the categories below to learn more about their purpose. You may choose which types of cookies to allow and can change your preferences at any time. Remember that disabling cookies may affect your experience on the website. You can learn more about how we use cookies by visiting our Cookie Policy and Privacy Policy</p><p></p>
				</div>
			</div>
		</div>
	</div>
</section>


    <!-- START  -->
    <?php include_once "partials/section_subscribe.php"; ?>  
    <!-- END  -->
    
    <!-- START  -->
    <?php include_once "partials/footer.php"; ?>
    <!-- END  -->