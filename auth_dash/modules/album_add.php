<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('create_new_album') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('photo_gallery') ?></a></li>
               <li class="active"><a href="#"><?= translate('create_new_album') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" method="post" id="album_add_form" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="title"><?= translate('title') ?></label>
                     <input type="text" class="form-control form-control-sm" name="title" id="title" value="" />
                  </div>
                  <div class="form-group row col-md-6">
                     <label><?= translate('album_cover_photo') ?></label>
                     <input type="file" name="album_cover" id="album_cover" class="file-upload-default">
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
                     <label for="aciqlama"><?= translate('album_text') ?></label>
                     <textarea name="aciqlama" id="myTextarea"></textarea>
                  </div>
                  <div class="card mb-4">
                     <div class="card-header">
                        <?= mb_strtoupper(translate('seo_configuration')) ?>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <label for="maxlength-textarea">Səhifə Açıqlama (description)</label>
                           <textarea id="maxlength-textarea" name="description"  class="form-control" maxlength="260" rows="4"></textarea>
                        </div>
                        <div class="form-group mb-0">
                           <label for="tags">Səhifə Meta <small>(Kəlimənin sonuna vergül qoyun)</small></label>
                           <input name="keywords" id="tags" value="" />
                        </div>
                     </div>
                  </div>
                  <button type="submit" name="album_add" id="album_add" class="btn btn-primary btn-icon-text btn-sm">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i>
                  <?= strtoupper(translate('save')) ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>