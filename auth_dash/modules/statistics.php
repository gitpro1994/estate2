<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('statistics') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url(); ?>"><i class="icon-home menu-icon"></i></a></li>
               <li class="active"><a href="#"><?= translate('statistics') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" method="post" id="statistics" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="child"><?= translate('student') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="child" id="child" value="<?= statistics('child') ?>" />
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="staff"><?= translate('staff') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="staff" id="staff" value="<?= statistics('staff') ?>" />
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="parent"><?= translate('parent') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="parent" id="parent" value="<?= statistics('parent') ?>" />
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="mezun"><?= translate('graduate') ?></label>
                     <div class="input-group">
                        <input type="text" class="form-control form-control-sm" name="mezun" id="mezun" value="<?= statistics('mezun') ?>" />
                     </div>
                  </div>
              
                  <button type="submit" name="update_statistics" id="update_statistics" class="btn btn-success btn-icon-text btn-sm">
                  <i class="mdi mdi-spin mdi-loading"></i>                                                    
                  <?= translate('update'); ?>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>