<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('add_new_region') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="<?= base_url() ?>/regions"><?= translate('regions_list') ?></a></li>
                  <li class="active"><a href="#"><?= translate('add_new_region') ?></a></li>
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
                  <form class="forms-sample" id="region_add_form" method="post" action="" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="region_name"><?= translate('region_name') ?></label>
                        <input type="text" class="form-control form-control-sm" name="region_name" id="region_name" value="">
                     </div>                    
                     <div class="form-group">
                        <label for="city"><?= translate('city') ?></label>
                        <select class="form-control form-control-sm" id="city" name="city">
                           <option value=""><?= translate('please_select_one_item') ?></option>
                           <?php 
                             $cat = "SELECT * FROM cities WHERE status=1";
                             $cru = mysqli_query($conn,$cat);
                             while($n = mysqli_fetch_array($cru)){
                              ?>
                          <option value="<?= $n['id'] ?>"><?= translate($n['city_name']); ?></option>
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
                     <button id="add_region" type="submit" name="add_region" class="btn btn-primary btn-icon-text btn-sm">
                     <i class="mdi mdi-file-check btn-icon-prepend"></i>
                     <?= strtoupper(translate('save')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
