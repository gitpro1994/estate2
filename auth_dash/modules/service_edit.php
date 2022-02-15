<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('edit_service') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="#"><?= translate('services') ?></a></li>
                  <li><a href="#"><?= translate('edit_service') ?></a></li>
                  <li class="active"><a href="#"><?= translate(serviceById($_GET['id'],'subtitle')) ?></a></li>
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
                  <form class="forms-sample" id="service_edit_form" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="service_id" value="<?= serviceById($_GET['id'],'id') ?>">
                     <div class="form-group">
                        <label for="title"><?= translate('title') ?> </label>
                        <input type="text" class="form-control form-control-sm" name="title" id="title" value="<?= serviceById($_GET['id'],'title') ?>">
                     </div>
                     <div class="form-group">
                        <label for="subtitle"><?= translate('subtitle') ?> </label>
                        <input type="text" class="form-control form-control-sm" name="subtitle" id="subtitle" value="<?= serviceById($_GET['id'],'subtitle') ?>">
                     </div>
                    <?php if(!empty(serviceById($_GET['id'],'photo'))){ ?>
                     <div class="form-group row col-md-2">
                        <div id="lightgallery" class="row lightGallery">
                           <a href="../../assets/uploads/services/<?=serviceById($_GET['id'],'photo') ?>">
                              <img src="../../assets/uploads/services/<?=serviceById($_GET['id'],'photo') ?>" class="img-responsive img-thumbnail" style="margin-bottom:2px;width:100%;">
                           </a>
                        </div>
                        <a style="width: 100%;" class="btn btn-danger btn-sm popconfirm" title="" href="<?= base_url() ?>/del_service_photo/<?=$_GET['id'] ?>" data-original-title="<?= translate('delete_photo') ?>"><i class="far fa-trash-alt"></i> <?= translate('delete_photo') ?></a>
                     </div>
                     <?php } ?>
                     <div class="form-group row col-md-6">
                        <label><?= translate('service_photo') ?></label>
                        <input type="file" name="service_photo" id="service_photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                           <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                           <span class="input-group-append">
                           <button class="file-upload-browse btn btn-primary btn-sm" type="button">
                              <i class="icon-cloud-upload font-12"></i> <?= translate('select_photo') ?>
                           </button>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-2">						
                        <label class="switch">
                           <?php $status =  (serviceById($_GET['id'],'status')==1) ? 'checked=""' : '' ?>
                        <input type="checkbox" name="status" id="status" value="1" <?= $status ?>>
                        <span class="slider"></span>
                        </label>
                        <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>						
                     </div>
                    
                     <div class="form-group">
                        <label for="myTextarea"><?= translate('service_content_text') ?></label>
                        <textarea name="service_content" id="myTextarea" ><?= serviceById($_GET['id'],'content') ?></textarea>
                     </div>

                     <div class="card mb-4">
                        <div class="card-header">
                           <?= strtoupper(translate('seo_configuration')) ?>
                        </div>
                        <div class="card-body">
                           <div class="form-group">
                              <label for="maxlength-textarea">SEO Açıqlama (Description)</label>
                              <textarea id="maxlength-textarea" name="description" class="form-control" maxlength="260" rows="2"><?= serviceById($_GET['id'],'seo_desc') ?></textarea>
                           </div>
                           <div class="form-group mb-0">
                              <label for="tags">Səhifə Meta <small>(Kəlimənin sonuna vergül qoyun)</small></label>
                              <input name="keywords" id="tags" value="<?= serviceById($_GET['id'],'seo_keyw') ?>" /> 
                           </div>
                        </div>
                     </div>
                     <button id="edit_service" type="submit" name="edit_service" class="btn btn-primary btn-icon-text btn-sm">
                     <i class="mdi mdi-file-check btn-icon-prepend"></i>
                     <?= strtoupper(translate('save')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
