<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('edit_video_slide') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('slider_management') ?></a></li>
               <li class="active"><a href="#"><?= translate('edit_video_slide') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" id="slide_edit_video_form" method="post" enctype="multipart/form-data"> 
               <?php 
               $id = clean($_GET['id']);
               $sel = "SELECT * FROM slide_videos WHERE id='".$id."'";
               $ru  = mysqli_query($conn,$sel);
               $bax = mysqli_fetch_array($ru)
                ?>       
                  <div class="form-group">
                     <label for="video"><?= translate('video') ?> URL</label>
                     <input type="text" class="form-control form-control-sm" name="video" id="video" value="<?= $bax['video'] ?>" />
                  </div>
                  <input type="hidden" name="video_id" value="<?= $id ?>">
                  <div class="form-group">
                     <label class="d-block" for="status"><?= translate('status') ?></label>
                     <label class="switch">
                     <input type="checkbox" name="status" id="status" value="1" <?= ($bax['status']==1) ? 'checked' : '' ?>>
                     <span class="slider"></span>
                     </label>
                  </div>
                 
                  <button type="submit" name="edit_slider_video" id="edit_slider_video" class="btn btn-primary btn-icon-text btn-sm">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i>
                  <?= translate('save') ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>