<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('contact_settings') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= site_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="<?= site_url() ?>/settings"><?= translate('site_configuration') ?></a></li>
               <li class="active"><a href="<?= site_url() ?>/contact_settings"><?= translate('contact_settings') ?></a></li>
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
               <form class="forms-sample" method="post" id="contact_settings" action="" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="firma_adi"><?= translate('address') ?></label>
                     <input type="text" class="form-control form-control-sm" name="firma_adi" id="firma_adi" value="<?= contact('address'); ?>">
                  </div>
                  <div class="form-group">
                     <label for="firma_telefon"><?= translate('phone') ?></label>
                     <input type="text" class="form-control form-control-sm" name="firma_telefon" id="firma_telefon" value="<?= contact('phone'); ?>">
                  </div>
                  <div class="form-group">
                     <label for="mobile_phone"><?= translate('mobile_phone') ?></label>
                     <input type="text" class="form-control form-control-sm" name="mobile_phone" id="mobile_phone" value="<?= contact('mobile_phone'); ?>">
                  </div>
                  <div class="form-group">
                     <label for="firma_fax"><?= translate('fax') ?></label>
                     <input type="text" class="form-control form-control-sm" name="firma_fax" id="firma_fax" value="<?= contact('fax'); ?>">
                  </div>
                  <div class="form-group">
                     <label for="firma_email"><?= translate('email') ?></label>
                     <input type="text" class="form-control form-control-sm" name="firma_email" id="firma_email" value="<?= contact('email'); ?>" data-inputmask="'alias': 'email'">
                  </div>
                  <button type="submit" name="update_contact" id="update_contact_info" class="btn btn-success btn-icon-text btn-sm">
                  <i class="mdi mdi-spin mdi-loading"></i>                                                   
                  <?= strtoupper(translate('update')) ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>