<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?= site_url() ?>">
    <title><?= $title ?></title>
    <style>
        @-ms-viewport{width:device-width}
    </style>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="X-XSS-Protection" content="0" />
    <meta name="author" content="Karimov Aghakarim Maharram">
    <meta name="publisher" content="Karimov Agency" />
    <meta name="description" content="<?= $desc ?>" />
    <meta name="keywords" content="<?= $keyw ?>" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="googlebot" content="follow, index, all">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index, follow, noodp, noydir">
    <meta name="audience" content="all">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="allow-search" content="yes">
    <meta name="country" content="Azerbaijan">
    <meta name="language" content="az">
    <meta name="content-language" content="az">
    <meta name="format-detection" content="telephone=no">
    <meta name="contact" content="<?= contact('email') ?>">
    <meta name="reply-to" content="<?= contact('email') ?>">
    <meta name="e-mail" content="<?= contact('email') ?>">
    <meta name="abstract" content="<?= translate("estate_az") ?>">
    <meta name="copyright" content="Bütün hüquqlar qorunur © 2021 ESTATE.AZ ">
    <?= api_settings('google_site_verification'); ?>
    <link rel="canonical" href="<?= url_origin() ?>" />
    <link rel="sitemap" type="application/xml" href="<?= site_url() ?>/sitemap.xml" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:width" content="573" />
    <meta property="og:title" content="<?= settings('site_title') ?>" />
    <meta property="og:description" content="<?= settings('seo_description') ?>" />
    <meta property="og:url" content="<?= site_url()?>" />
    <meta property="og:image" content="<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>" />
    <link rel="shortcut icon" type="image/jpg" href="<?= site_url()?>/assets/uploads/favicon/<?= settings('favicon') ?>"/>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon-homlisti.svg"> -->
    <link rel="stylesheet" href="<?= site_url()?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/vendor/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= site_url()?>assets/css/flaticon/font/flaticon.css">
    <!-- <link rel="stylesheet" href="assets/css/nice-select.css"> -->
    <link rel="stylesheet" href="<?= site_url()?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/css/pannellum.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/vendor/noUiSlider/nouislider.min.css">
    <link rel="stylesheet" href="<?= site_url()?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="<?= site_url()?>assets/css/iziModal.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url()?>assets/style.css">   
    <link rel="stylesheet" href="<?= site_url()?>assets/css/yeni.css">   
    <link rel="stylesheet" href="<?= site_url()?>assets/css/dropzone.css">   
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <?= api_settings('google_analytics'); ?>
</head>
<body class="sticky-header">
<input type="hidden" name="base_url" id="base_url" value="<?= site_url() ?>">
<?php  if(modul_functionalities('language')!=0){ ?>
<?php
if (isset($_SESSION['set_lang'])) 
{
    $set_lang = isset($_SESSION['set_lang']) ? $_SESSION['set_lang'] : NULL;
    $_SESSION['set_lang'] = $set_lang;
} 
else 
{
    $set_lang = settings('translation');
    $_SESSION['set_lang'] = $set_lang;
}
?> 

<div class="diller">
    <a data-toggle="modal" data-target="#lang" class="trigger-link" title="<?= translate('select_language') ?>" alt="<?= translate('select_language') ?>">
      <i class="flag-icon rounded-25 flag-icon-<?= (isset($_SESSION['lang_flag'])) ? $_SESSION['lang_flag'] : strtolower(select_flag($_SESSION['set_lang'])) ?>"></i>
    </a>
    <span class="tooltiptext"><?= translate('select_language') ?></span>
</div>
<div id="modal-demo" class="iziModal text-center">
    <div class="p-4">
        <div class="lang">
            <h4><?= translate('please_select_language') ?></h4> 
            <?php 
            $languages  = mysqli_query($conn,"SELECT id,lang_field,name,flag_key FROM language_list WHERE status = 1");
            while($lang = mysqli_fetch_array($languages)){
            ?>
            <a href="<?= site_url() ?>/change_lang/<?= $lang['lang_field']; ?>" class="<?=  ($set_lang == $lang['lang_field'] ? 'activelang' : ''); ?>  dildegis">
                <i class="flag-icon flag-icon-<?= $lang['flag_key']; ?>"></i> <?= strtoupper($lang['flag_key']); ?>   <?=  ($set_lang == $lang['lang_field'] ? '<i class="fas fa-check"></i>' : ''); ?>
            </a>
            <?php } ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php } ?>
<?php  if(modul_functionalities('left_icons')!=0){ ?>
<div class="telefon"> 
    <a href="tel:<?= contact('mobile_phone') ?>" title="Phone" alt="Phone">
        <i class="fas fa-phone"></i>
    </a> 
    <span class="tooltiptext">Phone</span> 
</div>
<div class="whatsapp"> 
    <a href="https://api.whatsapp.com/send?phone=<?= contact('mobile_phone') ?>" target="_blank" title="WhatsApp" alt="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a> 
    <span class="tooltiptext">WhatsApp</span> 
</div>
<div class="instagram"> 
    <a href="<?= social('instagram') ?>" target="_blank" title="Instagram" alt="Instagram">
        <i class="fab fa-instagram"></i>
    </a> 
    <span class="tooltiptext">İnstagram</span> 
</div>
<?php } ?>
<?php 
    if(modul_functionalities('loader')!=0){
 ?>
    <div id="preloader"></div>
<?php } ?>
    

