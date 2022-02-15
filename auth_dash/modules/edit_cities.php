<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('edit_city') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="<?= base_url() ?>/cities"><?= translate('cities_list') ?></a></li>
                  <li><a href="#"><?= translate('edit_city') ?></a></li>
                  <li class="active"><a href="#"><?= cityById($_GET['id'],'city_name') ?></a></li>
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
         <div class="col-md-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <form class="forms-sample" id="city_edit_form" method="post" action="" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="title"><?= translate('city_name') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                        <input type="text" class="form-control form-control-sm" name="city_name" id="city_name" value="<?= cityById($_GET['id'],'city_name') ?>">
                     </div>
                     
                     <input type="hidden" name="city_id" id="city_id" value="<?= $_GET['id'] ?>">
                     <div class="form-group mb-2">						
                        <label class="switch">
                           <?php $status = (cityById($_GET['id'],'status')==1) ? 'checked' : ''; ?>
                        <input type="checkbox" name="status" id="status" value="1" <?= $status; ?>>
                        <span class="slider"></span>
                        </label>
                        <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>
                     </div>
                     
                     <button id="edit_city" type="submit" name="edit_city" class="btn btn-primary btn-icon-text btn-sm">
                     <i class="mdi mdi-file-check btn-icon-prepend"></i>
                     <?= strtoupper(translate('update')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
