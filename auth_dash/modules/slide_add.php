<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('add_new_slide') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('slider_management') ?></a></li>
               <li class="active"><a href="#"><?= translate('add_new_slide') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" id="slide_add_form" method="post" enctype="multipart/form-data">                   
                  <div class="form-group">
                     <label for="title"><?= translate('slide_title') ?></label>
                     <input type="text" class="form-control form-control-sm" name="title" id="title" value="" />
                  </div>
                  <div class="form-group">
                     <label for="url"><?= translate('slide') ?> URL</label>
                     <input type="text" class="form-control form-control-sm" name="url" id="url" value="" />
                  </div>
                  <div class="form-group">
                     <label for="video_url"><?= translate('video') ?> URL</label>
                     <input type="text" class="form-control form-control-sm" name="video_url" id="video_url" value="" />
                  </div>
                  <div class="form-group">
                     <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" name="newtab" id="newtab" class="form-check-input" >Açılanda  yeni tabda açılsın ?<i class="input-helper"></i></label>
                     </div>
                  </div>
                  <div class="form-group row col-md-6">
                     <label><?= translate('select_slide_photo') ?></label>
                     <input type="file" name="slide_photo" id="slide_photo" class="file-upload-default">
                     <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?> ">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                        </span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="d-block" for="status"><?= translate('status') ?></label>
                     <label class="switch">
                     <input type="checkbox" name="status" id="status" value="1" checked>
                     <span class="slider"></span>
                     </label>
                  </div>
                  <div class="form-group">
                     <label for="aciqlama"><?= translate('slide_text') ?></label>
                     <textarea class="form-control" id="aciqlama" name="aciqlama"></textarea>
                  </div>
                  <button type="submit" name="add_slider" id="add_slider" class="btn btn-primary btn-icon-text btn-sm">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i>
                  <?= translate('save') ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>