<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('add_new_page') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="#"><?= translate('page_management') ?></a></li>
                  <li class="active"><a href="#"><?= translate('add_new_page') ?></a></li>
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
                  <form class="forms-sample" id="page_add_form" method="post" action="" enctype="multipart/form-data">
                                                     
                     <div class="form-group">
                        <label for="title"><?= translate('page_title') ?></label>
                        <input type="text" class="form-control form-control-sm" name="title" id="title" value="">
                     </div>
                    
                     <div class="form-group row col-md-6">
                        <label><?= translate('page_cover_photo') ?></label>
                        <input type="file" name="page_cover_photo" id="page_cover_photo" class="file-upload-default">
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
                        <label for="pages"><?= translate('pages') ?></label>
                        <select class="form-control form-control-sm" id="pages" name="pages">
                           <option value="cp_policy"><?= mb_strtoupper(translate('cp_policy')) ?></option>
                           <option value="burger"><?= mb_strtoupper(translate('burger_menu')) ?></option>
                           <?php 
                             $cat = "SELECT * FROM menus WHERE parent_id!=0 AND static!=1";
                             $cru = mysqli_query($conn,$cat);
                             while($n = mysqli_fetch_array($cru)){
                              ?>
                          <option value="<?= $n['seo'] ?>"><?= translate($n['menu_name']); ?></option>
                           <?php } ?>
                        </select>
                      </div>
                     <div class="form-group mb-2">						
                        <label class="switch">
                        <input type="checkbox" name="status" id="status" value="1" checked="">
                        <span class="slider"></span>
                        </label>
                        <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>						
                     </div>
                    
                     <div class="form-group">
                        <label for="myTextarea"><?= translate('page_content') ?></label>
                        <textarea name="content" id="myTextarea" ></textarea>
                     </div>

                     <div class="card mb-4">
                        <div class="card-header">
                           <?= strtoupper(translate('seo_configuration')) ?>
                        </div>
                        <div class="card-body">
                           <div class="form-group">
                              <label for="maxlength-textarea">SEO Açıqlama (Description)</label>
                              <textarea id="maxlength-textarea" name="description" class="form-control" maxlength="260" rows="2"></textarea>
                           </div>
                           <div class="form-group mb-0">
                              <label for="tags">Səhifə Meta <small>(Kəlimənin sonuna vergül qoyun)</small></label>
                              <input name="keywords" id="tags" value="" /> 
                           </div>
                        </div>
                     </div>
                     <button id="add_page" type="submit" name="add_page" class="btn btn-primary btn-icon-text btn-sm">
                     <i class="mdi mdi-file-check btn-icon-prepend"></i>
                     <?= strtoupper(translate('save')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
