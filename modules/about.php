<?php 
$title = settings('site_title').'-'.translate('about');
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



<div class="page-title-area" style="background-image: url(<?= site_url() ?>/assets/uploads/pages/<?= menuByUrl('our-story','cover_photo') ?>)">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2><?= translate('our_story') ?></h2>
					<ul>
						<li><a href="<?= site_url() ?>" title="<?= translate('home') ?>"><?= translate('home') ?></a></li>
						<li><?= translate('our_story') ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="about-area ptb-100">
	<div class="container">
		<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="about-image">
						<div class="container">
							<img src="<?= site_url() ?>/assets/uploads/pages/<?= menuByUrl('our-story','cover_photo') ?>" alt="<?= translate('our_story') ?>" title="<?= translate('our_story') ?>">                  
						</div>                        
					</div>
				</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-content">                        
					<h2><?= translate('our_story') ?></h2>
					<p></p>
					<p><?= word_to_trans_seo(menuByUrl('our-story','page_content')) ?></p>
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