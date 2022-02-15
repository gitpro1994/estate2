<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('add_new_video') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('video_gallery') ?></a></li>
               <li class="active"><a href="#"><?= translate('add_new_video') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" method="post" id="video_add_form" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="title"><?= translate('title') ?></label>
                     <input type="text" class="form-control form-control-sm" name="title" id="title" value="" />
                  </div>
                  <div class="form-group">
                     <label for="kod"><?= translate('youtube_video_code') ?> <small><a target="_blank" href="http://prntscr.com/l1l6ff"><?= translate('example') ?></a></small></label>
                     <input type="text" class="form-control form-control-sm" name="kod" id="kod" value="">
                  </div>
                  <div class="form-group row col-md-6">
                     <label><?= translate('video_cover_photo') ?></label>
                     <input type="file" name="video_cover" id="video_cover" class="file-upload-default">
                     <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_photo') ?></button>
                        </span>
                     </div>
                  </div>
                  <div class="form-group mb-1">						
                     <label class="switch">
                     <input type="checkbox" name="status" id="status" checked>
                     <span class="slider"></span>
                     </label>
                     <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>						
                  </div>
                  
                  <div class="form-group">
                     <label for="aciqlama"><?= translate('video_text') ?></label>
                     <textarea name="aciqlama" id="myTextarea"></textarea>
                  </div>
                
                  <button type="submit" name="video_add" id="video_add" class="btn btn-primary btn-icon-text btn-sm">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i>
                  <?= strtoupper(translate('save')) ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>