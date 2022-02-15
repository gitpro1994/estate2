<style type="text/css">
* {
  margin: 0;
  padding: 0;
  --transition: 0.15s;
  --border-radius: 0.5rem;
  --background: #ffc107;
  --box-shadow: #ffc107;
}
.cont-main {
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: center;
}

.cont-checkbox {
  width: 450px;
  height: 400px;
  border-radius: var(--border-radius);
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  background: white;
  transition: transform var(--transition);
}

.cont-checkbox:first-of-type {
  margin-bottom: 0.75rem;
  margin-right: 0.75rem;
}

.cont-checkbox:active {
  transform: scale(0.9);
}

input {
  display: none;
}

input:checked + label {
  opacity: 1;
  box-shadow: 0 0 0 3px var(--background);
}

input:checked + label img {
  -webkit-filter: none; /* Safari 6.0 - 9.0 */
  filter: none;
}

input:checked + label .cover-checkbox {
  opacity: 1;
  transform: scale(1);
}

input:checked + label .cover-checkbox svg {
  stroke-dashoffset: 0;
}

label.design {
  display: inline-block;
  cursor: pointer;
  border-radius: var(--border-radius);
  overflow: hidden;
  width: 100%;
  height: 100%;
  position: relative;
  opacity: 0.6;
}

label.design img {
  width: 100%;
  height: 70%;
  object-fit: cover;
  clip-path: polygon(0% 0%, 100% 0, 100% 81%, 50% 100%, 0 81%);
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}

label.design .cover-checkbox {
  position: absolute;
  right: 5px;
  top: 3px;
  z-index: 1;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: var(--box-shadow);
  border: 2px solid #fff;
  transition: transform var(--transition),
    opacity calc(var(--transition) * 1.2) linear;
  opacity: 0;
  transform: scale(0);
}

label.design .cover-checkbox svg {
  width: 13px;
  height: 11px;
  display: inline-block;
  vertical-align: top;
  fill: none;
  margin: 5px 0 0 3px;
  stroke: #fff;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 16px;
  transition: stroke-dashoffset 0.4s ease var(--transition);
  stroke-dashoffset: 16px;
}

label.design .info {
  text-align: center;
  margin-top: 0.2rem;
  font-weight: 2600;
  font-size: 2.8rem;
}

</style>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <div class="page-title mt-0 mb-0">
        <h3><?= translate('theme_settings'); ?> </h3>
        <div class="crumbs">
          <ul id="breadcrumbs" class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
            <li><a href="#"><?= translate('site_configuration'); ?></a></li>
            <li class="active"><a href="#"><?= translate('theme_settings'); ?></a></li>
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
      <div class="col-12">
        <div class="row d-flex justify-content-center">
          <form method="POST">
            <div class="cont-main">
              <div class="cont-checkbox">
                <input type="radio" class="designRadio" name="theme" id="myRadio-1" value="light" <?= (theme()=='light') ? 'checked' : '' ?> />
                <label class="design" for="myRadio-1">
                  <img src="assets/images/light.png" />
                  <span class="cover-checkbox">
                    <svg viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                  </span>
                  <div class="info"><?= translate('light_theme') ?></div>
                </label>
              </div>
              <div class="cont-checkbox">
                <input type="radio" class="designRadio" name="theme" id="myRadio-2" value="dark" <?= (theme()=='dark') ? 'checked' : '' ?> />
                <label class="design" for="myRadio-2">
                  <img src="assets/images/dark.png" />
                  <span class="cover-checkbox">
                    <svg viewBox="0 0 12 10">
                      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                  </span>
                  <div class="info"><?= translate('dark_theme') ?></div>
                </label>
              </div>
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $('input[type=radio][name=theme]').change(function() {
        let radioVal = this.value;
         $.ajax({
          type: 'POST',
          url: 'core/ajax/update_theme.php',
          data: {theme:radioVal},
          dataType: 'json',
          // contentType: false,
          // cache: false,
          // processData:false,
          success: function(data){ 
             if(data.status == 200)
             {
                $.toast({
                  heading: data.title,
                  text: data.message,
                  showHideTransition: 'slide',
                  icon: 'success',
                  loaderBg: '#fff',
                  position: 'top-right'
                })
             }
             if(data.status == 204)
             {
                $.toast({
                  heading: data.title,
                  text: data.message,
                  showHideTransition: 'slide',
                  icon: 'error',
                  loaderBg: '#fff',
                  position: 'top-right'
                })
             }
          }
        }); 
      });
    });
  </script>