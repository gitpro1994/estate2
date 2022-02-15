<?php 
$title = settings('site_title').'-'.translate('contact');
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

<div class="page-title-area" style="background-image: url(<?= site_url() ?>/assets/uploads/backgrounds/contact/<?= back_photo('contact') ?>)">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="page-title-content">
					<h2><?= translate('contact') ?></h2>
					<ul>
						<li><a href="<?= site_url() ?>"><?= translate('home') ?></a></li>
						<li><?= translate('contact') ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="contact-info-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="contact-info-box">
               <div class="icon">
                  <i class="flaticon-pin"></i>
               </div>
               <h3><?= translate('address') ?></h3>
               <span><?= settings('address') ?><br>&nbsp;</span>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-info-box">
               <div class="icon">
                  <i class="flaticon-phone-call"></i>
               </div>
               <h3><?= translate('phone') ?></h3>
               <span><a href="tel:<?= settings('mobileno') ?>"><?= settings('mobileno') ?></a></span>
               <span>&nbsp;</span>                    
            </div>
         </div>
         <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
            <div class="contact-info-box">
               <div class="icon">
                  <i class="flaticon-email"></i>
               </div>
               <h3><?= translate('email') ?></h3>
               <span><a href="mailto:<?= settings('email') ?>"><span><?= settings('email') ?></span></a></span>                      
            </div>
         </div>
      </div>
   </div>
</section>
<section class="contact-area ptb-100">
   <div class="container">
      <div class="contact-inner">
        <div class="row m-0">
            <div class="col-lg-12 col-md-12 p-0">
                <div id="map">
                 	<iframe src="https://snazzymaps.com/embed/214685" style="width:100%;height: 550px;"></iframe>   
               	</div>
            </div>
        </div>          
       </div>
    </div>
<div class="bg-map"><img src="tema/genel/uploads/logo/logo.svg" alt="image"></div>
</section>


    <!-- START  -->
    <?php include_once "partials/section_subscribe.php"; ?>  
    <!-- END  -->
    
    <!-- START  -->
    <?php include_once "partials/footer.php"; ?>
    <!-- END  -->