<?php 
$title = settings('site_title');
$desc  = settings('seo_description');
$keyw  = settings('seo_keywords');
?>
<!-- START HEAD -->
<?php include_once "partials/head.php"; ?>
<!-- END HEAD -->

<!-- START TOPBAR -->
<?php include_once "partials/topbar.php"; ?>
<!-- END TOPBAR -->


<div class="breadcrumb-wrap">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url() ?>"><?= translate('home') ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= translate('404_page') ?></li>
            </ol>
        </nav>
    </div>
</div>

<section class="error-wrap">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="error-box">
               <div class="shape-img1">
                  <img src="<?= site_url() ?>assets/uploads/backgrounds/error/<?= back_photo('error') ?>" alt="shape" width="709" height="285">
               </div>
               <h2 class="error-title"><?= translate('sorry!_this_page_is_not_available') ?></h2>
               <div class="error-button">
                  <a href="<?= site_url() ?>" class="item-btn"><?= translate('go_back_to_home_page') ?></a>
               </div>
            </div>
            <div class="error-shape-list">
               <ul>
                  <li></li>
                  <li></li>
                  <li></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->