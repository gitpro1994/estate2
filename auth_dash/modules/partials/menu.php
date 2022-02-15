<?php if(!defined("icaze")){ die("No Access"); } ?>
<div class="container-fluid page-body-wrapper">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <li class="nav-item sidebar-category mt-4">
         <span style="margin-left: -10px;"><?= translate('menu'); ?></span>
      </li>

      <li class="nav-item">
         <a class="nav-link" href="<?= base_url() ?>">
         <i class="icon-home  menu-icon"></i>
         <span class="menu-title"><?= translate('home'); ?></span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#site-yonetimi" aria-expanded="false" aria-controls="site-yonetimi">
         <i class="icon-settings menu-icon"></i>
         <span class="menu-title"><?= translate('site_configuration'); ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="site-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/settings"><?= translate('global_settings'); ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/social_links"><?= translate('social_network_settings') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/contact_settings"><?= translate('contact_settings') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/smtp_settings"><?= translate('smtp_mail_settings') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/site_status"><?= translate('site_maintenance_mode') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/apis_settings"><?= translate('api_settings') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/background_images"><?= translate('background_images') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/theme_settings"><?= translate('theme_settings') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/moduls"><?= translate('modules_settings') ?></a>
               </li>
               <!-- <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/home_order"><?= translate('sort_of_home_modules') ?></a>
               </li> -->
               <li class="nav-item"> 
                  <a class="nav-link" href="?page=modal-message"><?= translate('modal_message') ?></a>
               </li>              
            </ul>
         </div>
      </li>

      <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#dil-yonetimi" aria-expanded="false" aria-controls="dil-yonetimi">
         <i class="icon-globe menu-icon"></i>
         <span class="menu-title"><?= translate('language_configuration'); ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="dil-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/language_list"><?= translate('language_list') ?></a>
               </li>                           
            </ul>
         </div>
      </li>
       <li class="nav-item ">
         <a class="nav-link" href="<?= base_url() ?>/password_blacklist">
         <i class="icon-shield menu-icon"></i>
         <span class="menu-title"><?= translate('password_blacklist') ?></span>
         </a>
      </li>
      <li class="nav-item ">
         <a class="nav-link" href="<?= base_url() ?>/logs">
         <i class="icon-reload menu-icon"></i>
         <span class="menu-title"><?= translate('system_logs') ?></span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#menu-yonetimi" aria-expanded="false" aria-controls="menu-yonetimi">
         <i class="icon-menu menu-icon"></i>
         <span class="menu-title"><?= translate('menu_management'); ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="menu-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/menu_list"><?= translate('menu_list') ?></a>
               </li>
            </ul>
         </div>
      </li>
      <li class="nav-item sidebar-category mt-4">
         <span style="margin-left: -10px;"><?= translate('content_management') ?></span>
      </li>
   
      <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#elan-melumatlari" aria-expanded="false" aria-controls="haber-yonetimi">
         <i class="icon-list menu-icon"></i>
         <span class="menu-title"><?= translate('ads_credentials') ?></span>
         <i class="menu-arrow"></i>
         </a>  
         <div class="collapse " id="elan-melumatlari">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/cities"><?= translate('cities') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/regions"><?= translate('regions') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/settlements"><?= translate('settlements') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/metro_stations"><?= translate('metro_stations') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/hashtags"><?= translate('hashtags') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/ads_type"><?= translate('ads_type') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/realty_kind"><?= translate('realty_kind') ?></a>
               </li>
            </ul>
         </div>
      </li>

       <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#advertisements" aria-expanded="false" aria-controls="advertisements">
         <i class="icon-docs menu-icon"></i>
         <span class="menu-title"><?= translate('advertisements') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="advertisements">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/add_advertisements"><?= translate('add_advertisements') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/advertisements"><?= translate('all_advertisements') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/blog_list"><?= translate('blog_list') ?></a>
               </li>
            </ul>
         </div>
      </li>

      <!-- <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#slider-yonetimi" aria-expanded="false" aria-controls="slider-yonetimi">
         <i class="icon-picture menu-icon"></i>
         <span class="menu-title"><?= translate('slider_management') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="slider-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/slide_add"><?= translate('add_new_slide') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/slide_list"><?= translate('slide_list') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/slide_video_add"><?= translate('add_new_video_slide') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/video_slide_list"><?= translate('video_slide_list') ?></a>
               </li>
            </ul>
         </div>
      </li> -->

      <!-- <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#foto-galeri" aria-expanded="false" aria-controls="foto-galeri">
         <i class="icon-camera menu-icon"></i>
         <span class="menu-title"><?= translate('photo_gallery') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="foto-galeri">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/album_add"><?= translate('create_new_album') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/album_list"><?= translate('albums_list') ?></a>
               </li>
            </ul>
         </div>
      </li> -->
     <!--  <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#video-galeri" aria-expanded="false" aria-controls="video-galeri">
         <i class="icon-social-youtube menu-icon"></i>
         <span class="menu-title"><?= translate('video_gallery') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="video-galeri">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/add_video"><?= translate('add_new_video') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/videos_list"><?= translate('videos_list') ?></a>
               </li>
            </ul>
         </div>
      </li> -->
        
      <!-- <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#ekip-yonetimi" aria-expanded="false" aria-controls="ekip-yonetimi">
         <i class="icon-user menu-icon"></i>
         <span class="menu-title"><?= translate('staff') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="ekip-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/staff_add"><?= translate('add_new_staff') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/staff_list"><?= translate('staff_list') ?></a>
               </li>
            </ul>
         </div>
      </li> -->
      
       <!-- <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#service-yonetimi" aria-expanded="false" aria-controls="service-yonetimi">
         <i class="icon-docs menu-icon"></i>
         <span class="menu-title"><?= translate('services') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="service-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/service_add"><?= translate('add_new_service') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/service_list"><?= translate('services_list') ?></a>
               </li>
            </ul>
         </div>
      </li> -->

      <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#soru-yonetimi" aria-expanded="false" aria-controls="soru-yonetimi">
         <i class="icon-question menu-icon"></i>
         <span class="menu-title">S.S.S</span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="soru-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="?page=sss-list">Suallar</a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="?page=sual-add">Yeni Sual əlavə et</a>
               </li>
            </ul>
         </div>
      </li>
       <!-- <li class="nav-item  ">
         <a class="nav-link" data-toggle="collapse" href="#sayfa-yonetimi" aria-expanded="false" aria-controls="sayfa-yonetimi">
         <i class="icon-note menu-icon"></i>
         <span class="menu-title"><?= translate('page_management') ?></span>
         <i class="menu-arrow"></i>
         </a>
         <div class="collapse " id="sayfa-yonetimi">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/page_add"><?= translate('add_new_page') ?></a>
               </li>
               <li class="nav-item "> 
                  <a class="nav-link " href="<?= base_url() ?>/page_list"><?= translate('page_list') ?></a>
               </li>
            </ul>
         </div>
      </li> -->
     
    
    
     <!--  <li class="nav-item ">
         <a class="nav-link" href="#">
         <i class="icon-speech menu-icon"></i>
         <span class="menu-title">CV göndərənlər</span> <span style="padding: 2px 5px;" class="badge badge-outline-danger">0</span>
         </a>
      </li>
      <li class="nav-item ">
         <a class="nav-link" href="#">
         <i class="icon-bubbles menu-icon"></i>
         <span class="menu-title">Ziyarətçi Fikirləri</span> <span style="padding: 2px 5px;" class="badge badge-outline-danger">0</span>
         </a>
      </li> -->
      <li class="nav-item sidebar-category mt-4">
         <span style="margin-left: -10px;"><?= translate('another') ?></span>
      </li>
      <li class="nav-item ">
         <a class="nav-link" href="<?= base_url() ?>/visitors">
         <i class="icon-calendar menu-icon"></i>
         <span class="menu-title"><?= translate('visitor') ?></span>
         </a>
      </li>
      <!-- <li class="nav-item ">
         <a class="nav-link" href="<?= base_url() ?>/statistics">
         <i class="icon-layers menu-icon"></i>
         <span class="menu-title"><?= translate('statistics') ?></span>
         </a>
      </li> -->
      <li class="nav-item">
         <a class="nav-link" href="#" id="logout">
         <i class="icon-power menu-icon"></i>
         <span class="menu-title"><?= translate('logout') ?></span>
         </a>
      </li>
   </ul>
</nav>