<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('edit_staff') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="#"><?= translate('staff') ?></a></li>
                  <li><a href="#"><?= translate('edit_staff') ?></a></li>
                  <li class="active"><a href="#"><?= staffById($_GET['id'],'name') ?> <?= staffById($_GET['id'],'surname') ?></a></li>
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
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <form class="forms-sample" method="post" id="edit_staff_form" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?= staffById($_GET['id'],'id') ?>">
               <div class="form-group">
                  <label for="adi"><?= translate('name') ?></label>
                  <input type="text" class="form-control form-control-sm" name="name" id="name" value="<?= staffById($_GET['id'],'name') ?>">
               </div>
               <div class="form-group">
                  <label for="adi"><?= translate('surname') ?></label>
                  <input type="text" class="form-control form-control-sm" name="surname" id="surname" value="<?= staffById($_GET['id'],'surname') ?>">
               </div>
               <div class="row">
                  <div class="form-group col-md-6">
                     <label><?= translate('position') ?></label>
                     <input type="text" class="form-control form-control-sm" name="position" id="position" value="<?= staffById($_GET['id'],'position') ?>">
                  </div>
               </div>
                <div class="form-group">
                  <label for="department"><?= translate('department') ?></label>
                  <select class="form-control form-control-sm" id="department" name="department">
                     <?php 
                       $cat = "SELECT * FROM staff_category WHERE parent_id=0";
                       $cru = mysqli_query($conn,$cat);
                       while($n = mysqli_fetch_array($cru)){
                        ?>
                    <option value="<?= $n['cat_id'] ?>" <?= (staffById($_GET['id'],'category_id')==$n['cat_id']) ? 'selected' : '' ?>><?= translate($n['cat_name']); ?></option>
                     <?php } ?>
                  </select>
                </div>
               <?php if(!empty(staffById($_GET['id'],'staff_photo'))){ ?>
                     <div class="form-group row col-md-2">
                        <div id="lightgallery" class="row lightGallery">
                           <a href="../../assets/uploads/staff/<?=staffById($_GET['id'],'staff_photo') ?>">
                              <img src="../../assets/uploads/staff/<?=staffById($_GET['id'],'staff_photo') ?>" class="img-responsive img-thumbnail" style="margin-bottom:2px;width:100%;">
                           </a>
                        </div>
                        <a style="width: 100%;" class="btn btn-danger btn-sm popconfirm" title="" href="<?= base_url() ?>/del_staff_photo/<?= staffById($_GET['id'],'id') ?>" data-original-title="<?= translate('delete_photo') ?>"><i class="far fa-trash-alt"></i> <?= translate('delete_photo') ?></a>
                     </div>
                     <?php } ?>
               <div class="form-group row col-md-6">
                  <label><?= translate('profile_image') ?></label>
                  <input type="file" name="staff_photo_edit" id="staff_photo_edit" class="file-upload-default">
                  <div class="input-group col-xs-12">
                     <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                     <span class="input-group-append">
                     <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_photo') ?></button>
                     </span>
                  </div>
               </div>
               <div class="form-group">
                        <label for="myTextarea"><?= translate('info') ?></label>
                        <textarea name="info" id="myTextarea" ></textarea>
                     </div>
               <div class="card mb-4">
                  <div class="card-header">
                     <?= mb_strtoupper(translate('social_media_configuration')) ?>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="facebook">Facebook <?= translate('page_url') ?></label>
                           <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="facebook" id="facebook" value="<?= staffById($_GET['id'],'facebook') ?>">
                              <div class="input-group-append">
                                 <button class="btn btn-sm btn-facebook" type="button">
                                 <i class="mdi mdi-facebook"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="twitter">Twitter <?= translate('page_url') ?></label>
                           <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="twitter" id="twitter" value="<?= staffById($_GET['id'],'telegram') ?>">
                              <div class="input-group-append">
                                 <button class="btn btn-sm btn-twitter" type="button">
                                 <i class="mdi mdi-twitter"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="instagram">Instagram <?= translate('page_url') ?></label>
                           <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="instagram" id="instagram" value="<?= staffById($_GET['id'],'instagram') ?>">
                              <div class="input-group-append">
                                 <button class="btn btn-sm btn-instagram" type="button">
                                 <i class="mdi mdi-instagram"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="linkedin">LinkedIn <?= translate('page_url') ?></label>
                           <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="linkedin" id="linkedin" value="<?= staffById($_GET['id'],'youtube') ?>">
                              <div class="input-group-append">
                                 <button class="btn btn-sm btn-linkedin" type="button">
                                 <i class="mdi mdi-linkedin"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="youtube">Youtube <?= translate('page_url') ?></label>
                           <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="youtube" id="youtube" value="<?= staffById($_GET['id'],'youtube') ?>">
                              <div class="input-group-append">
                                 <button class="btn btn-sm btn-youtube" type="button">
                                 <i class="mdi mdi-youtube"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="form-group mb-2">						
                  <label class="switch">
                  <input type="checkbox" name="status" id="status" value="1" <?= (staffById($_GET['id'],'status')==1) ? 'checked=""' : '' ?>>
                  <span class="slider"></span>
                  </label>
                  <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>						
               </div>
               <div class="form-group mb-2">						
                  <label class="switch">
                  <input type="checkbox" name="anasayfa" id="anasayfa" value="1" <?= (staffById($_GET['id'],'is_home')==1) ? 'checked=""' : '' ?>>
                  <span class="slider"></span>
                  </label>
                  <label class="d-inline-block" style="line-height: 34px;" for="anasayfa">Anasayfa'da Gözüksün mü ?</label>
               </div>
               <button type="submit" name="edit_staff" class="btn btn-primary btn-icon-text btn-sm">
               <i class="mdi mdi-file-check btn-icon-prepend"></i>
               <?= mb_strtoupper(translate('save')) ?>
               </button>
            </form>
         </div>
      </div>
   </div>
</div>
</div>