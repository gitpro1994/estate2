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
 <div id="wrapper">
<!-- content --> 
<div class="content">
<!-- content -->	
<div class="content">
    <!--  section  -->
    <section class="parallax-section color-bg" data-scrollax-parent="true">
        <div class="container">
            <div class="error-wrap">
                <div class="hero-text-big">
                    <h6>404</h6>
                </div>
                <p><?= translate('page_you_were_looking_for_could_not_be_found') ?>.</p>
                <div class="clearfix"></div>
                <form action="#">
                    <input name="se" id="se" type="text" class="search" placeholder="Search..">
                    <button class="search-submit" id="submit_btn"><i class="fal fa-search"></i> </button>
                </form>
                <div class="clearfix"></div>
                <p>Or</p>
                <a href="<?= site_url() ?>" class="btn color-bg"><?= translate('back_to_home_page') ?></a>
            </div>
        </div>
        <div class="pwh_bg fw-pwh">
            <div class="mrb_pin vis_mr mrb_pin3 "></div>
            <div class="mrb_pin vis_mr mrb_pin4 "></div>
        </div>
    </section>
    <!--  section  end-->
</div>
<!-- content end -->

<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->