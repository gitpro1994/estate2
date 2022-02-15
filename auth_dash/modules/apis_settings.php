<div class="main-panel">
   <div class="content-wrapper">
	<div class="page-header">
	   <div class="page-title mt-0 mb-0">
	      <h3>Api Ayarları</h3>
	      <div class="crumbs">
	         <ul id="breadcrumbs" class="breadcrumb">
	            <li><a href="./"><i class="icon-home menu-icon"></i></a></li>
	            <li><a href="//emlakv4.demobul.com.tr/yonetim/api-ayarlari">Site Yönetimi</a></li>
	            <li class="active"><a href="//emlakv4.demobul.com.tr/yonetim/api-ayarlari">Api Ayarları</a></li>
	         </ul>
	      </div>
	   </div>
	    <div class="col col-auto mt-5 d-inline-block float-right">
           <label class="float-right text-white badge badge-danger ml-1">
               <big><?= translate('your_device'); ?>: <?= user_brauzer($_SERVER['HTTP_USER_AGENT']); ?></big>
           </label> 
           <label class="badge badge-secondary m-t-10"><?= translate('your_ip') ?> : <big><b><?= getIP(); ?></b></big></label> 
           <label class="badge badge-dark m-t-10"><?= translate('last_visited_page'); ?> : <big><b><?= user_data('last_visited_page',$_SESSION['loggedin_id']) ?></b></big></label>
         </div>
	</div>
<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <form class="forms-sample" method="post" id="api_form" action="" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="whatsapp"><?= translate('left_side_shortcuts_code') ?></label>
                  <textarea id="whatsapp" name="whatsapp" class="w-100"><?= html_entity_decode(api_settings('left_shortcut_icons')) ?></textarea>
               </div>
               <div class="form-group">
                  <label for="google_analytics"><?= translate('google_analytics_code') ?></label>
                  <textarea id="google_analytics" name="google_analytics" class="w-100"><?= html_entity_decode(api_settings('google_analytics')) ?></textarea>
               </div>
               <div class="form-group">
                  <label for="dogrulama_kodu"><?= translate('google_site_verification_code') ?></label>
                  <textarea id="dogrulama_kodu" name="dogrulama_kodu" class="w-100"><?= html_entity_decode(api_settings('google_site_verification')) ?></textarea>
               </div>
               <div class="form-group">
                  <label for="google_maps"><?= translate("google_map_code") ?></label>
                  <textarea id="google_maps" name="google_maps" class="w-100"><?= html_entity_decode(api_settings('contact_map'))  ?></textarea>
               </div>
               <div class="form-group">
                  <label for="canli_destek"><?= translate("live_support_code") ?></label>
                  <textarea id="canli_destek" name="canli_destek" class="w-100"><?= html_entity_decode(api_settings('live_support')) ?></textarea>
               </div>
               <button type="submit" name="api_ayarlar" id="api_update_button" class="btn btn-success btn-icon-text btn-sm">
               <i class="mdi mdi-spin mdi-loading"></i>                                                    
               <?= strtoupper(translate('update')) ?>
               </button>
            </form>
         </div>
      </div>
   </div>
</div>