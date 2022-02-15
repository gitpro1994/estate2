<?php if(!defined("icaze")){ die("No Access"); } ?>
<body>
   <div class="container-scroller">
      <div class="theme-setting-wrapper">
         <div id="settings-trigger"><i class="flag-icon flag-icon-<?= (isset($_SESSION['lang_flag'])) ? $_SESSION['lang_flag'] : select_flag($_SESSION['set_lang']) ?>"></i></div>
         <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading"><?= translate('system_language'); ?></p>
            <?php
            if (isset($_SESSION['set_lang'])) {
               $set_lang = isset($_SESSION['set_lang']) ? $_SESSION['set_lang'] : NULL;
            } else {
               $set_lang = settings('translation');
            }
            $languages = mysqli_query($conn,"SELECT id,lang_field,name,flag_key FROM language_list WHERE status = 1");
            while($lang = mysqli_fetch_array($languages)){
            ?>
            <div class="sidebar-bg-options <?=  ($set_lang == $lang['lang_field'] ? 'selected' : ''); ?> ">
               <a href="<?= base_url() ?>/change_lang/<?= $lang['lang_field']; ?>" style="text-decoration: none;">
                  <div class="flag-icon flag-icon-<?= $lang['flag_key']; ?> mr-3"></div><?= $lang['name']; ?>   <?=  ($set_lang == $lang['lang_field'] ? '<i class="fas fa-check"></i>' : ''); ?>
               </a>
            </div>
         <?php } ?>
         </div>
      </div>
   <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <a class="navbar-brand brand-logo" href="<?= base_url() ?>/home">
            KA <?= translate('dashboard'); ?>        
         </a>
         <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>/home">   
            KA
         </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
         <span class="mdi mdi-apps"></span>
         </button>
         <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
               <a href="<?= settings('site_url'); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="icon-globe menu-icon font-13"></i> <?= translate('show_site'); ?></a>
            </li>
            
            <li class="nav-item d-none d-lg-block">               
               <span style="margin: 0;margin-bottom: 10px;font-size: 20px;color: #1f212d;font-weight: 600;"><?= config_date(date("d.m.Y")) ?> &nbsp;</span> 
               <span style="margin: 0;margin-bottom: 10px;font-size: 20px;color: #1f212d;font-weight: 600;" id="clock"></span> 
            </li>
         </ul>
         <ul class="navbar-nav navbar-nav-right">
           <!--  <li class="nav-item dropdown">
               <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="notificationDropdown" href="#" data-toggle="dropdown">
               <i class="mdi mdi-email-outline mx-0"></i>
               <span class="count count-email"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pt-0" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header bg-dark text-white w-100">Oxunmamış mesajlar</p>
                  <p class="text-center pt-5 text-muted">                 
                  Yeni mesaj yoxdur
                  </p>
               </div>

            </li>
 -->            

            <li class="nav-item nav-profile dropdown">
               <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               <img src="<?= base_url() ?>/assets/images/profile/<?=admin_info(has_userdata('loggedin_id'),'avatar') ?>" alt="<?= $_SESSION['username'] ?>">
               </a>
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a href="<?= base_url() ?>/profile" class="dropdown-item">
                  <i class="icon-user text-primary"></i>
                  <?= translate('show_profile') ?>
                  </a>
                  
                  <a href="<?= base_url() ?>/settings" class="dropdown-item">
                  <i class="icon-settings text-primary"></i>
                  <?= translate('settings') ?>
                  </a>
                  <a href="<?= base_url() ?>/logout" class="dropdown-item">
                  <i class="icon-power text-primary"></i>
                  <?= translate('logout') ?>
                  </a>
               </div>
            </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
         <span class="mdi mdi-menu"></span>
         </button>
      </div>
   </nav>