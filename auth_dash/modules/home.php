<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <div class="page-title mt-0 mb-0">
        <h3><?= translate('dashboard'); ?> </h3>
        <div class="crumbs">
          <ul id="breadcrumbs" class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
            <li class="active"><a href="<?= base_url() ?>"><?= translate('dashboard'); ?></a></li>
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
    <?php if ($_SESSION['ip']!= user_data('ip',$_SESSION['loggedin_id']) || $_SESSION['soft']!=user_data('soft',$_SESSION['loggedin_id'])) {  ?>
    <div class="alert alert-warning" role="alert">
      Hörmətli <b><?= user_data('surname',$_SESSION['loggedin_id']) ?> <?= user_data('name',$_SESSION['loggedin_id']) ?></b>, <br/>Giriş edərkən IP və ya SOFT məlumatlarınızın daha öncəki məlumatlarla uyuşmazlığını aşkar etdik. Şifrənizi qoruyun və ya gec olmadan elə indi dəyişin. <br>
      Əvvəlki IP ünvanı: <b><?php  ?></b>
    </div>
  <?php } ?>
  <?php if ((attemp($_SESSION['username'],'try_count')>=4) || (attemp($_SESSION['email'],'try_count')>0)) {  ?>
    <div class="alert alert-danger" role="alert">
      <?= translate('dear') ?> <b><?= user_data('surname',$_SESSION['loggedin_id']) ?> <?= user_data('name',$_SESSION['loggedin_id']) ?></b>, 
      <br/><?= translate('your_username_is_secured_because_the_wrong_password_was_entered_5_times_with_your_username') ?> . 
      <a href="<?= base_url() ?>/profile"> <?= translate('click_here_and_change_your_password') ?></a> <?= translate('or') ?> <a href="<?= base_url() ?>/clear_attemps"><?= translate('reset_attempts'); ?></a> <br>
      
    </div>
  <?php } ?>
    <div class="row">
      <div class="col-lg-12"> 
        <div class="accordion accordion-multi-colored" id="accordion-1" role="tablist">
          <div class="card">
            <div class="card-header p-3" role="tab" id="heading-1">
              <h6 class="mb-0">
                <a class="" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                  <?= word_to_trans_seo('Helpful explanations about Administrative Panel'); ?>
                </a>
              </h6>
            </div>
            <div id="collapse-1" class="collapse" role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion-1" style="">
              <div class="card-body p-3">
                <p>-<?= translate('dont_use_easy_passwords_like') ?> ( <b>1995, 123, 1234, 123456, 1, admin, user, demo, 2020, 2021 </b> )</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= translate('database') ?><span class="float-right text-success">100%</span></h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted"><?= translate('optimized') ?></p>
                            <p class="text-muted"><?= table_count().' '.translate('table'); ?></p>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-success" style="width:100%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-sm-12 col-md-3 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title"><?= translate('today') ?><span class="float-right text-info"><?php echo count(today_visitor('all')); ?> <?= translate('visitor') ?></span></h4>
                     <div class="d-flex justify-content-between">
                        <p class="text-muted"><?= translate('site_show') ?></p>
                        <p class="text-muted"><?php  echo array_sum(today_visitor('count')); ?></p>
                     </div>
                     <div class="progress progress-md">
                        <div class="progress-bar bg-info" style="width:<?= array_sum(today_visitor('count')); ?>%;" role="progressbar" aria-valuenow="<?=array_sum(today_visitor('count'))?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title"><?= translate('yesterday') ?><span class="float-right text-danger"><?php echo count(yesterday_visitor('all')); ?> <?= translate('visitor') ?></span></h4>
                     <div class="d-flex justify-content-between">
                        <p class="text-muted"><?= translate('site_show') ?></p>
                        <p class="text-muted"><?php  echo array_sum(yesterday_visitor('count')); ?></p>
                     </div>
                     <div class="progress progress-md">
                        <div class="progress-bar bg-danger" style="width:<?= array_sum(yesterday_visitor('count')); ?>%;" role="progressbar" aria-valuenow="<?=array_sum(yesterday_visitor('count'))?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title"><?= translate('sum') ?><span class="float-right text-warning"><?php echo count(all_visitor('all')); ?> <?= translate('visitor') ?></span></h4>
                     <div class="d-flex justify-content-between">
                        <p class="text-muted"><?= translate('site_show') ?></p>
                        <p class="text-muted"><?php  echo array_sum(all_visitor('count')); ?></p>
                     </div>
                     <div class="progress progress-md">
                        <div class="progress-bar bg-warning" style="width:<?= array_sum(all_visitor('count')); ?>%;" role="progressbar" aria-valuenow="<?=array_sum(all_visitor('count'))?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
   <div class="col-12">
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title"><?= translate('all_ads_count') ?><span class="float-right text-success">0 Kişi</span></h4>
                  <div class="d-flex justify-content-between">
                     <p class="text-muted">Tekil Ziyaretçi</p>
                     <p class="text-muted">0</p>
                  </div>
                  <div class="progress progress-md">
                     <div class="progress-bar bg-success" style="width:0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title"><?= translate('all_waiting_ads_count') ?><span class="float-right text-danger">0 Kişi</span></h4>
                  <div class="d-flex justify-content-between">
                     <p class="text-muted">Gösterim</p>
                     <p class="text-muted">0</p>
                  </div>
                  <div class="progress progress-md">
                     <div class="progress-bar bg-danger" style="width:0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title"><?= translate('all_agent_count') ?><span class="float-right text-info">0 Kişi</span></h4>
                  <div class="d-flex justify-content-between">
                     <p class="text-muted">Gösterim</p>
                     <p class="text-muted">0</p>
                  </div>
                  <div class="progress progress-md">
                     <div class="progress-bar bg-info" style="width:0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title"><?= translate('today_new_ads') ?><span class="float-right text-warning">0 Kişi</span></h4>
                  <div class="d-flex justify-content-between">
                     <p class="text-muted">Gösterim</p>
                     <p class="text-muted">0</p>
                  </div>
                  <div class="progress progress-md">
                     <div class="progress-bar bg-warning" style="width:0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>