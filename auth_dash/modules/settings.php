<div class="main-panel">
  <div class="content-wrapper">
  <div class="page-header">
  <div class="page-title mt-0 mb-0">
    <h3><?= translate('global_settings'); ?></h3>
    <div class="crumbs">
      <ul id="breadcrumbs" class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="icon-home menu-icon"></i></a></li>
        <li><a href="#"><?= translate('site_configuration'); ?></a></li>
        <li class="active"><a href="#"><?= translate('global_settings'); ?></a></li>
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
        <form class="forms-sample" method="post" id="settings_form" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <?= translate("upload_logo") ?> 
              </div>
              <div class="card-body">
                <div class="form-group">
                <label><?= translate("logo") ?></label>
                  <input type="file" id="logo_file" name="logo_file" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate("select_photo_file") ?>">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                    </span>
                  </div>
                </div>
                <div class="form-group" id="for_main_logo">
                  <div class="row">
                    <?php if (!empty(settings('logo'))) { ?>
                    <a class="mx-auto swipebox" href="../assets/uploads/logo/<?= settings('logo'); ?>">
                      <img src="../assets/uploads/logo/<?= settings('logo'); ?>" style="max-height:70px;height: 70px;">
                    </a>
                    <?php } ?>
                  </div>
                </div>                     
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
               <?= translate('logo_for_mail'); ?>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label><?= translate("upload_logo") ?></label>
                  <input type="file" id="mail_logo" name="mail_logo" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate("select_photo_file") ?>">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                    </span>
                  </div>
                </div>  
                <div class="form-group" id="for_mail_logo">
                  <div class="row">
                    <?php if (!empty(settings('mail_logo'))) { ?>
                    <a class="mx-auto swipebox" href="../assets/uploads/logo/footer/<?= settings('mail_logo'); ?>">
                      <img src="../assets/uploads/logo/footer/<?= settings('mail_logo'); ?>" style="max-height:70px;height: 70px;">
                    </a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
                <?= translate('upload_favicon') ?>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label><?= translate("favicon") ?></label>
                  <input type="file" name="favicon" id="favicon" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate("select_photo_file") ?>">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                    </span>
                  </div>
                </div>
                <div class="form-group" id="for_favicon">
                  <div class="row">
                   <?php if (!empty(settings('favicon'))) { ?>
                    <a class="mx-auto swipebox" href="../assets/uploads/favicon/<?= settings('favicon'); ?>">
                      <img src="../assets/uploads/favicon/<?= settings('favicon'); ?>" style="max-height:70px;height: 70px;">
                    </a>
                    <?php } ?>
                  </div>
                </div>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header">
               <?= translate('watermark'); ?>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label><?= translate("upload_signature") ?></label>
                  <input type="file" id="signature" name="signature" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate("select_photo_file") ?>">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                    </span>
                  </div>
                </div>  
                <div class="form-group" id="for_signature">
                  <div class="row">
                    <?php if (!empty(settings('watermark'))) { ?>
                    <a class="mx-auto swipebox" href="../assets/uploads/signature/<?= settings('watermark'); ?>">
                      <img src="../assets/uploads/signature/<?= settings('watermark'); ?>" style="max-height:70px;height: 70px;">
                    </a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
         <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="row">
                  <div class="col-lg-3 grid-margin grid-margin-lg-0">
                    <div class="card-body">
                      <h4 class="card-title"><?= translate('color') ?> 1 (<?= translate('main_color') ?>)</h4>
                      <input type="text" name="renk1" class="color-picker" value="<?= settings('color_1') ?>" />
                    </div>
                  </div>
                  <div class="col-lg-3 grid-margin grid-margin-lg-0">
                    <div class="card-body">
                      <h4 class="card-title"><?= translate('color') ?> 2</h4>
                      <input type="text" name="renk2" class="color-picker" value="<?= settings('color_2') ?>" />
                    </div>
                  </div>
                  <div class="col-lg-3 grid-margin grid-margin-lg-0">
                    <div class="card-body">
                      <h4 class="card-title"><?= translate('color') ?> 3</h4>
                      <input type="text" name="renk3" class="color-picker" value="<?= settings('color_3') ?>" />
                    </div>
                  </div>
                  <div class="col-lg-3 grid-margin grid-margin-lg-0">
                    <div class="card-body">
                      <h4 class="card-title"><?= translate('color') ?> 4</h4>
                      <input type="text" name="renk4" class="color-picker" value="<?= settings('color_4') ?>" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="form-group">
            <label for="site_url"><?= translate('site_url'); ?></label>
            <input type="text" class="form-control form-control-sm" name="site_url" id="site_url" value="<?= settings('site_url'); ?>">
          </div>  
          <div class="form-group">
            <label for="site_url"><b>İdarə Paneli giriş link adresi (Örnək: admin, panel, dashboard <code style="font-weight: bold;">Not: Azərbaycan hərflərindən istifadə etmək qadağandır.!</code>)</b></label>
            <input type="text" class="form-control form-control-sm" name="yonetim" id="yonetim" value="<?= settings('dash_url'); ?>">
          </div>      

          <div class="form-group">
            <label for="site_title"><?= translate('site_title'); ?></label>
            <input type="text" class="form-control form-control-sm" name="site_title" id="site_title" value="<?= settings('site_title'); ?>">
          </div>
          
          <div class="form-group">
            <label for="language"><?= translate('system_language') ?></label>
            <select class="form-control form-control-sm" id="language" name="language">
              <?php 
              $sql = "SELECT * FROM language_list WHERE status=1";
              $run = mysqli_query($conn,$sql);
              while ($rows = mysqli_fetch_array($run)) {
               ?>
              <option value="<?= $rows['lang_field'] ?>" <?= (settings('translation')==$rows['lang_field']) ? 'selected="selected"' : '' ?>><?= $rows['name'] ?></option>
              <?php } ?>                   
            </select>
          </div>
          
           <div class="form-group">
            <label for="timezone"><?= translate('timezone') ?></label>
            <select class="form-control form-control-sm" id="timezone" name="timezone">
              <?php foreach (timezone_list() as $key => $value) {  ?>
              <option value="<?= $key ?>" <?= (settings('timezone')==$key) ? 'selected="selected"' : '' ?>><?= $value; ?></option>
              <?php } ?>                   
            </select>
          </div>
          <div class="form-group">
            <label for="date_format"><?= translate('date_format') ?></label>
            <select class="form-control form-control-sm" id="date_format" name="date_format">
              <?php foreach (getDateformat() as $key => $value) {  ?>
              <option value="<?= $key ?>" <?= (settings('date_format')==$key) ? 'selected="selected"' : '' ?>><?= $value; ?></option>
              <?php } ?>                   
            </select>
          </div>
          <div class="form-group">
            <label for="cuurency_symbol"><?= translate('currency_symbol'); ?></label>
            <input type="text" class="form-control form-control-sm" name="currency_symbol" id="currency_symbol" value="<?= settings('currency_symbol'); ?>">
          </div>
          <div class="form-group">
             <label for="tags">SEO etikətlər (Keywords) <small>(Sözün sonuna vergül qoyaraq etikətləri ayırın)</small></label>
             <input name="site_keyw" id="tags" value="<?= settings('seo_keywords') ?>" />
          </div>
          <div class="form-group">
            <label for="maxlength-textarea">SEO Açıklama (Description)</label>
            <textarea id="maxlength-textarea" name="site_desc" class="form-control" maxlength="260" rows="4"><?= settings('seo_description') ?></textarea>
          </div>
          <div class="form-group">
            <label for="copyright"><?= translate('text_for_copyright'); ?></label>
            <input type="text" class="form-control form-control-sm" name="copyright" id="copyright" value="<?= settings('frontend_footer_text') ?>">
          </div>  
          <div class="form-group">
            <label for="dashboard_copyright"><?= translate('dashboard_copyright_text'); ?></label>
            <input type="text" class="form-control form-control-sm" name="dashboard_copyright" id="dashboard_copyright" value="<?= settings('dashboard_footer_text') ?>">
          </div>              
          <button name="genel_ayarlar" id="update_settings" class="btn btn-success btn-icon-text btn-sm">
            <i class="mdi mdi-spin mdi-loading"></i>                                                   
            <?= strtoupper(translate('update')); ?>
          </button>
        </form>           
      </div>
    </div>
  </div>
</div>
</div>
<div class="loader" style="display: none">
    <div class="loading"><?= translate('please_wait'); ?></div>
</div>