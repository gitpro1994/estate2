<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('social_network_settings') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url(); ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('site_configuration'); ?></a></li>
               <li class="active"><a href="?page=social-links"><?= translate('social_network_settings') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" method="post" id="social" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="facebook"><?= translate('facebook') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="facebook" id="facebook" value="<?= social('facebook') ?>" />
                        <div class="input-group-append">
                           <button class="btn btn-sm btn-facebook" type="button">
                           <i class="mdi mdi-facebook"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="instagram"><?= translate('instagram') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="instagram" id="instagram" value="<?= social('instagram') ?>" />
                        <div class="input-group-append">
                           <button class="btn btn-sm btn-instagram" type="button">
                           <i class="mdi mdi-instagram"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="linkedin"><?= translate('linkedin') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="linkedin" id="linkedin" value="<?= social('linkedin') ?>" />
                        <div class="input-group-append">
                           <button class="btn btn-sm btn-linkedin" type="button">
                           <i class="mdi mdi-linkedin"></i>
                           </button>
                        </div>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="youtube"><?= translate('youtube') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="youtube" id="youtube" value="<?= social('youtube') ?>" />
                        <div class="input-group-append">
                           <button class="btn btn-sm btn-youtube" type="button">
                           <i class="mdi mdi-youtube"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="youtube"><?= translate('twitter') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="twitter" id="twitter" value="<?= social('twitter') ?>" />
                        <div class="input-group-append">
                           <button class="btn btn-sm btn-twitter" type="button">
                           <i class="mdi mdi-twitter"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <button type="submit" name="social_links" id="update_socials" class="btn btn-success btn-icon-text btn-sm">
                  <i class="mdi mdi-spin mdi-loading"></i>                                                    
                  <?= translate('update'); ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>