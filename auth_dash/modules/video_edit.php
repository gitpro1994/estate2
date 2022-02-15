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
               <form class="forms-sample" method="post" id="video_edit_form" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="title"><?= translate('title') ?></label>
                     <input type="text" class="form-control form-control-sm" name="title" id="title" value="<?= videoById($_GET['id'],'video_name') ?>" />
                  </div>
                  <input type="hidden" name="video_id" value="<?= $_GET['id'] ?>">
                  <div class="form-group">
                     <label for="kod"><?= translate('youtube_video_code') ?> <small><a target="_blank" href="http://prntscr.com/l1l6ff"><?= translate('example') ?></a></small></label>
                     <input type="text" class="form-control form-control-sm" name="kod" id="kod" value="<?= videoById($_GET['id'],'youtube_url') ?>">
                  </div>
                  <?php if(!empty(videoById($_GET['id'],'cover_photo'))){ ?>
                     <div class="form-group row col-md-2">
                        <div id="lightgallery" class="row lightGallery">
                           <a href="../../assets/uploads/videos/<?=videoById($_GET['id'],'cover_photo') ?>">
                              <img src="../../assets/uploads/videos/<?=videoById($_GET['id'],'cover_photo') ?>" class="img-responsive img-thumbnail" style="margin-bottom:2px;width:100%;">
                           </a>
                        </div>
                        <a style="width: 100%;" class="btn btn-danger btn-sm popconfirm" title="" href="<?= base_url() ?>/del_video_cover/<?=$_GET['id'] ?>" data-original-title="<?= translate('delete_photo') ?>"><i class="far fa-trash-alt"></i> <?= translate('delete_photo') ?></a>
                     </div>
                     <?php } ?>
                  <div class="form-group row col-md-6">
                     <label><?= translate('video_cover_photo') ?></label>
                     <input type="file" name="video_cover_edit" id="video_cover_edit" class="file-upload-default">
                     <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_photo') ?></button>
                        </span>
                     </div>
                  </div>
                  <div class="form-group mb-1">						
                     <label class="switch">
                        <?php $status = (videoById($_GET['id'],'video_status')==1) ? 'checked' : ''; ?>
                     <input type="checkbox" name="status" id="status" <?= $status ?>>
                     <span class="slider"></span>
                     </label>
                     <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>						
                  </div>
                  
                  <div class="form-group">
                     <label for="aciqlama"><?= translate('video_text') ?></label>
                     <textarea name="aciqlama" id="myTextarea"><?= videoById($_GET['id'],'aciqlama') ?></textarea>
                  </div>
                
                  <button type="submit" name="video_edit" id="video_edit" class="btn btn-primary btn-icon-text btn-sm">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i>
                  <?= strtoupper(translate('save')) ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>