<style type="text/css">
   .strong-password {
    background-color: #12CC1A;
    border: #0FA015 1px solid;
}
.weak-password {
    background-color: #FF6600;
    border: #AA4502 1px solid;
}
.medium-password {
    background-color: #E4DB11;
    border: #BBB418 1px solid;
}
</style>
<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('my_profile') ?> / <?=admin_info(has_userdata('loggedin_id'),'surname') ?> <?=admin_info(has_userdata('loggedin_id'),'name') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('profile') ?></a></li>
               <li class="active"><a href="#"><?=admin_info(has_userdata('loggedin_id'),'surname') ?> <?=admin_info(has_userdata('loggedin_id'),'name') ?> / <?= translate('edit') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" id="profile_form" method="post" action="" enctype="multipart/form-data">
                  <div class="alert alert-danger" role="alert">
                     <i class="mdi mdi-alert-circle" style="font-size: 50px;line-height: normal;float: left;"></i>
                     <p><?= translate('dont_use_easy_passwords_like') ?> ( <b>1995, 123, 1234, 123456, 1, admin, user, demo, 2020, 2021 </b> )</p>
                     <p><b><?= translate('note') ?>:</b> <?= translate('for_site_settings_you_can_change_from_the') ?> <span style="color:red;"><a href="<?= base_url() ?>/settings"> <?= translate('global_settings') ?></a></span> </p>
                  </div>
                  </br>
                   <?php if(!empty(admin_info(has_userdata('loggedin_id'),'avatar'))){ ?>
                     <div class="form-group row col-md-2">
                        <div id="for_avatar" class="row lightGallery">
                           <a href="<?= base_url() ?>/assets/images/profile/<?=admin_info(has_userdata('loggedin_id'),'avatar') ?>">
                              <img src="<?= base_url() ?>/assets/images/profile/<?=admin_info(has_userdata('loggedin_id'),'avatar') ?>" class="img-responsive img-thumbnail" style="margin-bottom:2px;width:100%;">
                           </a>
                        </div>
                       
                     </div>
                     <?php } ?>
                     <div class="form-group row col-md-6">
                        <label><?= translate('profile_image') ?></label>
                        <input type="file" name="avatar" id="avatar" class="file-upload-default">
                        <div class="input-group col-xs-12">
                           <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                           <span class="input-group-append">
                           <button class="file-upload-browse btn btn-primary btn-sm" type="button">
                              <i class="icon-cloud-upload font-12"></i> <?= translate('select_photo') ?>
                           </button>
                           </span>
                        </div>
                     </div>
                     
                  <div class="form-group">
                     <label for="name"><?= translate('name'); ?></label>
                     <input type="text" class="form-control form-control-sm" name="name" id="name" value="<?=admin_info(has_userdata('loggedin_id'),'name') ?>" />
                  </div>
                  <div class="form-group">
                     <label for="surname"><?= translate('surname'); ?></label>
                     <input type="text" class="form-control form-control-sm" name="surname" id="surname" value="<?=admin_info(has_userdata('loggedin_id'),'surname') ?>" />
                  </div>
                  <div class="form-group">
                     <label for="email"><?= translate('email') ?></label>
                     <input class="form-control form-control-sm" name="email" id="email" value="<?=admin_info(has_userdata('loggedin_id'),'email') ?>" data-inputmask="'alias': 'email'" />
                  </div>
                  <div class="form-group">
                     <label for="username"><?= translate('username') ?> <code style="font-weight:bold;">( <?= translate('the_system_is_sensitive_to_uppercase_and_lowercase_letters_in_the_username') ?> )</code></label>
                     <input type="text" class="form-control form-control-sm" name="username" id="username"  value="<?=admin_info(has_userdata('loggedin_id'),'username') ?>" />
                  </div>
                  <div class="form-group">
                     <label for="sifre"><?= translate('password') ?></label>
                     <input type="text" class="form-control form-control-sm" name="sifre" id="sifre"  placeholder="********************" />
                     <span id="usercheck" class="help-block"></span>
                  </div>
                  <div class="form-group">
                     <label for="second_sifre"><?= translate('second_password') ?></label>
                     <input type="text" class="form-control form-control-sm" name="second_sifre" id="second_sifre"  placeholder="********************" />
                     <span id="usercheck2" class="help-block"></span>
                  </div>
                  <button type="submit" id="update_profile" name="update_profile" class="btn btn-success btn-icon-text btn-sm">
                  <i class="mdi mdi-reload  btn-icon-prepend"></i>                                                    
                  <?= translate('update') ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
