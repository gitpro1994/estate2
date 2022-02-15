<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('modules_settings') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url(); ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('site_configuration'); ?></a></li>
               <li class="active"><a href="#"><?= translate('modules_settings') ?></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                  
                  <div class="row">
                     <div class="col-md-6">
                        <h6 class="card-title"><?= translate('home_modules') ?></h6>
                        <div id="dragula-event-left" class="py-2">
                           <?php 
                           $mods = "SELECT * FROM modul_functionalities";
                           $modr = mysqli_query($conn,$mods);
                           $say = 0;
                           while ($bb = mysqli_fetch_array($modr)) {
                           $say = $say+1; 
                           ?>
                           <div class="card rounded border mb-2">
                              <div class="card-body p-3">
                                 <div class="media row">
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                       <div class="media-body">
                                          <i class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>	
                                          <h6 class="mb-1"><?= $bb['module_title'] ?></h6>
                                          <p class="mb-0 text-muted">
                                             <?= $bb['module_text'] ?>
                                          </p>
                                       </div>
                                    </div>
                                    <input type="hidden" id="modul_id" name="modul_id" value="<?= $bb['id'] ?>">
                                    <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                       <label class="switch mb-0" style="margin-top: 1px;">
                                       <input type="checkbox" class="chk"  name="sahe<?=$say?>" data-id="<?= $bb['id'] ?>"  <?=($bb['module_status']==1) ? 'checked' : '' ?>  value="sahe<?=$say?>">
                                       <span class="slider"></span>
                                       <input type="hidden" class="modul" name="modul<?= $bb['id'] ?>" data-id="<?= $bb['id'] ?>">
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <?php } ?>
                        </div>
                     </div>

                      <div class="col-md-6">
                        <h6 class="card-title"><?= translate('another_modules') ?></h6>
                        <div id="dragula-event-left" class="py-2">
                           <?php 
                           $mods = "SELECT * FROM modul_functionalities";
                           $modr = mysqli_query($conn,$mods);
                           $say = 0;
                           while ($bb = mysqli_fetch_array($modr)) {
                           $say = $say+1; 
                           ?>
                           <div class="card rounded border mb-2">
                              <div class="card-body p-3">
                                 <div class="media row">
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                       <div class="media-body">
                                          <i class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i> 
                                          <h6 class="mb-1"><?= $bb['module_title'] ?></h6>
                                          <p class="mb-0 text-muted">
                                             <?= $bb['module_text'] ?>
                                          </p>
                                       </div>
                                    </div>
                                    <input type="hidden" id="modul_id" name="modul_id" value="<?= $bb['id'] ?>">
                                    <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                       <label class="switch mb-0" style="margin-top: 1px;">
                                       <input type="checkbox" class="chk"  name="sahe<?=$say?>" data-id="<?= $bb['id'] ?>"  <?=($bb['module_status']==1) ? 'checked' : '' ?>  value="sahe<?=$say?>">
                                       <span class="slider"></span>
                                       <input type="hidden" class="modul" name="modul<?= $bb['id'] ?>" data-id="<?= $bb['id'] ?>">
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <?php } ?>
                        </div>
                     </div>

                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

