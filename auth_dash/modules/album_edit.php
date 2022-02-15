<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('edit_album') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="#"><?= translate('blog_management') ?></a></li>
                  <li><a href="#"><?= translate('edit_album') ?></a></li>
                  <li class="active"><a href="#"><?= albumById($_GET['id'],'album_name') ?></a></li>
               </ul>
            </div>
         </div>
         <div class="col col-auto mt-5 d-inline-block float-right">
           <label class="float-right text-white badge badge-danger ml-1">
               <big><?= translate('your_device'); ?>: <?= user_brauzer($_SERVER['HTTP_USER_AGENT']); ?></big>
           </label> 
           <label class="badge badge-secondary m-t-10"><?= translate('your_ip') ?> : <big><b><?= getIP(); ?></b></big></label> 
           <label class="badge badge-dark m-t-10"><?= translate('last_visited_page'); ?> : <big><b><?= user_data('last_page',$_SESSION['loggedin_id']) ?></b></big></label>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <form class="forms-sample" id="album_edit_form" method="post" action="" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="title"><?= translate('album_name') ?></label>
                        <input type="text" class="form-control form-control-sm" name="title" id="title" value="<?= albumById($_GET['id'],'album_name') ?>">
                     </div>
                    <?php if(!empty(albumById($_GET['id'],'album_kapak'))){ ?>
                     <div class="form-group row col-md-2">
                        <div id="lightgallery" class="row lightGallery">
                           <a href="../../assets/uploads/photo_gallery/<?=albumById($_GET['id'],'album_kapak') ?>">
                              <img src="../../assets/uploads/photo_gallery/<?=albumById($_GET['id'],'album_kapak') ?>" class="img-responsive img-thumbnail" style="margin-bottom:2px;width:100%;">
                           </a>
                        </div>
                        <a style="width: 100%;" class="btn btn-danger btn-sm popconfirm" title="" href="<?= base_url() ?>/del_album_cover/<?=$_GET['id'] ?>" data-original-title="<?= translate('delete_photo') ?>"><i class="far fa-trash-alt"></i> <?= translate('delete_photo') ?></a>
                     </div>
                     <?php } ?>
                     <div class="form-group row col-md-6">
                        <label><?= translate('album_cover_photo') ?></label>
                        <input type="file" name="album_cover_photo" id="album_cover_photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                           <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                           <span class="input-group-append">
                           <button class="file-upload-browse btn btn-primary btn-sm" type="button">
                              <i class="icon-cloud-upload font-12"></i> <?= translate('select_photo') ?>
                           </button>
                           </span>
                        </div>
                     </div>
                     <input type="hidden" name="album_id" id="album_id" value="<?= $_GET['id'] ?>">
                     <div class="form-group mb-2">						
                        <label class="switch">
                           <?php $status = (albumById($_GET['id'],'album_status')==1) ? 'checked' : ''; ?>
                        <input type="checkbox" name="status" id="status" value="1" <?= $status; ?>>
                        <span class="slider"></span>
                        </label>
                        <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>						
                     </div>
                    
                     
                     <div class="form-group">
                        <label for="myTextarea"><?= translate('blog_content_text') ?></label>
                        <textarea name="album_info" id="album_info"  class="form-control" rows="4"><?= albumById($_GET['id'],'album_info') ?></textarea>
                     </div>

                     <div class="card mb-4">
                        <div class="card-header">
                           <?= strtoupper(translate('seo_configuration')) ?>
                        </div>
                        <div class="card-body">
                           <div class="form-group">
                              <label for="maxlength-textarea">SEO Açıqlama (Description)</label>
                              <textarea id="maxlength-textarea" name="description" class="form-control" maxlength="260" rows="2"><?= albumById($_GET['id'],'album_desc') ?></textarea>
                           </div>
                           <div class="form-group mb-0">
                              <label for="tags">Səhifə Meta <small>(Kəlimənin sonuna vergül qoyun)</small></label>
                              <input name="keywords" id="tags" value="<?= albumById($_GET['id'],'album_keyw') ?>" /> 
                           </div>
                        </div>
                     </div>
                     <button id="album_edit" type="submit" name="album_edit" class="btn btn-primary btn-icon-text btn-sm">
                     <i class="mdi mdi-file-check btn-icon-prepend"></i>
                     <?= strtoupper(translate('update')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
