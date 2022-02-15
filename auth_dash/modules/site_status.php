<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('site_maintenance_mode') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= site_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="<?= site_url() ?>/settings"><?= translate('site_configuration') ?></a></li>
                  <li class="active"><a href="<?= site_url() ?>/site_status"><?= translate('site_maintenance_mode') ?></a></li>
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
         <div class="col-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <form class="forms-sample" method="post" id="site_bakim_form" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="site_url"><?= translate('site_opening_date') ?></label>
                              <div id="datepicker-popup" class="input-group date datepicker">
                                 <input type="text" class="form-control" name="acilis_tarih" value="<?= site_status('open_date') ?>">
                                 <span class="input-group-addon input-group-append border-left">
                                 <span class="mdi mdi-calendar input-group-text"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="site_url"><?= translate('site_opening_time') ?></label>
                              <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                                 <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                                    <input type="text" name="acilis_zaman" class="form-control datetimepicker-input" value="<?= site_status('open_time') ?>" data-target="#timepicker-example">
                                    <div class="input-group-addon input-group-append"><i class="mdi mdi-clock input-group-text"></i></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="baslik"><?= translate('title') ?></label>
                        <input type="text" class="form-control form-control-sm" name="baslik" id="baslik" value="<?= site_status('title') ?>">
                     </div>
                     <div class="form-group">
                        <label for="aciklama"><?= translate('content') ?></label>
                        <textarea id="aciklama" name="aciklama" class="form-control" rows="4"><?= site_status('content') ?></textarea>
                     </div>
                     <div class="form-group">
                        <label class="d-block" for="status"><?= translate('active') ?> / <?= translate('deactive') ?></label>
                        <label class="switch">
                        <input type="checkbox" name="status" id="status" value="1" <?= (site_status('status')==1) ? 'checked=""' : ''  ?>>
                        <span class="slider"></span>
                        </label>                      
                     </div>
                     <button type="submit" name="site_bakim_modu" id="site_bakim_submit" class="btn btn-success btn-icon-text btn-sm">
                     <i class="mdi mdi-spin mdi-loading"></i>                                                   
                     <?= strtoupper(translate('update')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   