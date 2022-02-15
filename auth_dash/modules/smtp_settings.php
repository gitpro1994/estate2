<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('smtp_config') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= site_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="<?= site_url() ?>/settings"><?= translate('site_configuration') ?></a></li>
                  <li class="active"><a href="<?= site_url() ?>/smtp_settings"><?= translate('smtp_config') ?></a></li>
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
                  <form class="forms-sample" method="post" id="smtp_form" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="m_server">SMTP Server</label>
                        <input type="text" class="form-control form-control-sm" name="m_server" id="m_server" value="<?= smtp_config('smtp_server') ?>">
                     </div>
                     <div class="form-group">
                        <label for="m_port">SMTP Port</label>
                        <input type="text" class="form-control form-control-sm" name="m_port" id="m_port" value="<?= smtp_config('smtp_port') ?>">
                     </div>
                     <div class="form-group">
                        <label for="m_sertifika">Mail <?= translate('certificate') ?></label>
                        <select class="js-example-basic-single form-control-sm select2-hidden-accessible" name="m_sertifika" id="m_sertifika" style="width:100%" tabindex="-1" aria-hidden="true">
                           <option value="tls" <?= (smtp_config('mail_certificate')=='tls') ? 'selected' : '' ?>>TLS</option>
                           <option value="ssl" <?= (smtp_config('mail_certificate')=='ssl') ? 'selected' : '' ?>>SSL</option>
                        </select>
                      
                     </div>
                     <div class="form-group">
                        <label for="m_adresi">SMTP Email</label>
                        <input type="text" class="form-control form-control-sm" name="m_adresi" id="m_adresi" value="<?= smtp_config('smtp_email') ?>" data-inputmask="'alias': 'email'">
                     </div>
                     <div class="form-group">
                        <label for="m_parola">SMTP Email Şifre</label>
                        <input type="text" class="form-control form-control-sm" name="m_parola" id="m_parola" value="<?= smtp_config('smtp_email_password') ?>">
                     </div>
                     <div class="form-group">
                        <label class="d-block" for="status"><?= translate('active') ?> / <?= translate('deactive') ?></label>
                        <label class="switch">
                        <input type="checkbox" name="status" id="status" value="1" <?= (smtp_config('status')==1) ? 'checked=""' : ''  ?>>
                        <span class="slider"></span>
                        </label>								
                     </div>
                     <div class="form-group">
                        <label for="m_kime"><?= translate('message_from_e-mail_address') ?></label>
                        <input type="text" class="form-control form-control-sm" name="m_kime" id="m_kime" value="<?= smtp_config('receiver_email') ?>" data-inputmask="'alias': 'email'">
                     </div>
                     <button type="submit" name="mail_ayarlar" id="send_email_config" class="btn btn-success btn-icon-text btn-sm">
                     <i class="mdi mdi-spin mdi-loading"></i>                                                   
                     <?= strtoupper(translate('update')) ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  