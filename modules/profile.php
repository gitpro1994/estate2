<?php
$title = settings('site_title');
$desc  = settings('seo_description');
$keyw  = settings('seo_keywords');
?>
<!-- START HEAD -->
<?php include_once "partials/head.php"; ?>
<!-- END HEAD -->

<!-- START TOPBAR -->
<?php include_once "partials/topbar.php"; ?>
<!-- END TOPBAR -->
            <!-- header end  -->    
            <!-- wrapper  -->   
            <div id="wrapper">
                <!-- dashbard-menu-wrap --> 
                <div class="dashbard-menu-overlay"></div>
                <?php include_once "partials/dash_sidebar.php"; ?>
                <!-- dashbard-menu-wrap end  -->        
                <!-- content -->    
                <div class="dashboard-content">
                    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
                    <div class="container dasboard-container">
                        <!-- dashboard-title -->    
                        <div class="dashboard-title fl-wrap">
                            <div class="dashboard-title-item"><span><?= translate('dashboard') ?></span></div>
                            <div class="dashbard-menu-header">
                                <div class="dashbard-menu-avatar fl-wrap">
                                    <img src="<?= site_url() ?>assets/images/avatar/<?php echo users_info($_SESSION['id'],'avatar') ?>" alt="">
                                    <h4><?php echo users_info($_SESSION['id'],'name') ." ".users_info($_SESSION['id'],'surname') ; ?></h4>
                                </div>
                                <a href="<?= site_url() ?>logout" class="log-out-btn   tolt" data-microtip-position="bottom"  data-tooltip="<?= translate("log_out") ?>"><i class="far fa-power-off"></i></a>
                            </div>
                            <!--Tariff Plan menu-->
                            
                            <!--Tariff Plan menu end-->                     
                        </div>
                        <!-- dashboard-title end -->        
                        <div class="dasboard-wrapper fl-wrap no-pag">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="dasboard-widget-title fl-wrap">
                                        <h5><i class="fas fa-user-circle"></i>Change Avatar</h5>
                                    </div>
                                    <div class="dasboard-widget-box nopad-dash-widget-box fl-wrap">
                                        <div class="edit-profile-photo">
                                                <img src="<?= site_url() ?>assets/images/avatar/<?php echo users_info($_SESSION['id'],'avatar') ?>" class="respimg" alt="">
                                          
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span>  <?= translate('upload_new_photo') ?></span>
                                                    <input type="file" class="upload" id="avatar_file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-wrap bg-parallax-wrap-gradien">
                                            <div class="bg" data-bg="assets/images/bg/3.jpg" style="background-image: url('assets/images/bg/3.jpg');"></div>
                                        </div>
                                    </div>
                                    <div class="dasboard-widget-title fl-wrap">
                                        <h5><i class="fas fa-key"></i><?= translate('personal_info') ?></h5>
                                    </div>
                                    <form id="profile_form" method="post" action="" enctype="multipart/form-data">
                                        <div class="dasboard-widget-box fl-wrap">
                                            <div class="custom-form">
                                                <label><?= translate('first_name') ?> <span class="dec-icon"><i class="far fa-user"></i></span></label>
                                                <input type="text" id="name" name="name" value="<?= users_info($_SESSION['id'],'name') ?>">
                                                <label><?= translate('surname') ?><span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                                <input type="text" id="surname" name="surname" value="<?= users_info($_SESSION['id'],'surname') ?>">
                                                <label><?= translate('email') ?><span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                                                <input type="text" id="email" name="email" value="<?= users_info($_SESSION['id'],'email') ?>">    
                                                <label><?= translate('phone_number') ?><span class="dec-icon"><i class="far fa-phone"></i> </span></label>
                                                <input type="text" id="phone_number" name="phone_number" value="<?= users_info($_SESSION['id'],'phone_number') ?>">    
                                                          
                                                <button id="update_profile" class="btn color-bg  float-btn"><?= translate('save') ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-5">
                                    <div class="dasboard-widget-title dbt-mm fl-wrap">
                                        <h5><i class="fas fa-key"></i><?= translate('change_password') ?></h5>
                                    </div>
                                    <div class="dasboard-widget-box fl-wrap">

                                        <div class="custom-form">
                                            <span style="color: red" id="error-password"></span>
                                            <div class="pass-input-wrap fl-wrap">
                                                <label><?= translate('current_password') ?><span class="dec-icon"><i class="far fa-lock-open-alt"></i></span></label>
                                                <input type="password" id="old_password" class="pass-input" placeholder="Cari şifrənizi daxil edin" value="">
                                                <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                            </div>
                                            <div class="pass-input-wrap fl-wrap">
                                                <label><?= translate('new_password') ?><span class="dec-icon"><i class="far fa-lock-alt"></i></span></label>
                                                <input type="password" id="new_password" class="pass-input" placeholder="Yeni şifrə" value="">
                                                <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                            </div>
                                            <div class="pass-input-wrap fl-wrap">
                                                <label><?= translate('confirm_new_password') ?><span class="dec-icon"><i class="far fa-shield-check"></i> </span></label>
                                                <input type="password" id="repeat_new_password" class="pass-input" placeholder="Yeni şifrənin təkrarı" value="">
                                                <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                            </div>
                                            <button id="change_password" class="btn color-bg  float-btn"><?= translate('save') ?></button>
                                        </div>

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-footer -->
                    
                    <!-- dashboard-footer end -->               
                </div>
                <!-- content end -->    
                <div class="dashbard-bg gray-bg"></div>
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="<?= site_url() ?>/assets/js/jquery.min.js"></script>
        <script src="<?= site_url() ?>/assets/js/plugins.js"></script>
        <script src="<?= site_url() ?>/assets/js/scripts.js"></script>
        <!-- <script src="<?= site_url() ?>/assets/js/charts.js"></script> -->
        <script src="<?= site_url() ?>/assets/js/dashboard.js"></script>
        <script type="text/javascript">
         $('#update_profile').click(function (e) {
              e.preventDefault();
              var form = $("#profile_form");
              $.ajax
                ({
                  type: "POST",
                  url: "core/ajax/update_profile.php",
                  data: form.serialize(),
                  dataType: "json",
                  success: function (data) {
                     if(data.status == 200)
                           {
                            $(".dashbard-menu-avatar").load(" .dashbard-menu-avatar");
                             Toast.fire({
                                 icon: data.icon,
                                 title: data.message
                             })
                           }
                       else if(data.status == 204)
                       {
                         Toast.fire({
                                 icon: data.icon,
                                 title: data.message
                             })
                       }
                  }
                });
            });
            const Toast = Swal.mixin({
             toast: true,
             position: 'top-end',
             showConfirmButton: false,
             timer: 3000,
             timerProgressBar: true,
             didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
           });
             $(window).bind('load', function() {
            $('img').each(function() {
                if((typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) || this.readyState == 'uninitialized') {
                    $(this).attr('src', '<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>');
                }
            });
        });
        </script>
        <script type="text/javascript">
            $('#error-password').hide();
            $('#change_password').click(function(){

                let url                      = "<?= site_url() ?>";
                let old_pass_text            = "<?= translate('please_insert_old_password') ?>";
                let new_password_text        = "<?= translate('please_insert_new_password') ?>";
                let repeat_new_password_text = "<?= translate('please_insert_confirm_password') ?>";
                let empty                    = "<?= translate('all_input_is_required') ?>";
                let confirm_password         = "<?= translate('password_does_not_match') ?>";

                var old_pass            = document.getElementById('old_password').value.trim();
                var new_password        = document.getElementById('new_password').value.trim();
                var repeat_new_password = document.getElementById('repeat_new_password').value.trim();

                if(old_pass.length == 0 || new_password.length == 0 || repeat_new_password.length == 0)
                {
                    if (old_pass.length == 0) 
                    {
                        $('#error-password').show();
                        $('#error-password').html(old_pass_text);
                    }

                    else if (new_password.length == 0) 
                    {
                        $('#error-password').show();
                        $('#error-password').html(new_password_text);
                    }

                    else if (repeat_new_password.length == 0) 
                    {
                        $('#error-password').show();
                        $('#error-password').html(repeat_new_password_text);
                    }
                } 
                else if (old_pass.length != 0 && new_password.length != 0 && repeat_new_password.length != 0)
                {
                    if(new_password != repeat_new_password)
                    {
                        $('#error-password').show();
                        $('#error-password').html(confirm_password);
                    } 
                    else {
                        $.ajax({
                          url: url + '/core/ajax/change_password.php',
                          method: 'POST',
                          data: {
                             old_pass:old_pass,
                             new_password:new_password
                             }
                        }).done(function(res){

                                res = JSON.parse(res);
                                if (res['status']==200) 
                                {
                                    $('#error-password').show();
                                    $('#error-password').html(res['message']);
                                } 
                                else 
                                {
                                    $('#error-password').show();
                                    $('#error-password').html(res['message']);
                                }
                            }).fail(function(){
                                alert("error");
                            });
                    }
                }
            });

            /* AVATAR CHANGE */
             $('#avatar_file').change(function(){
                var file_data = $('#avatar_file').prop('files')[0];   
                var form_data = new FormData();                  
                form_data.append('avatar_file', file_data);
                $.ajax({
                    url: "core/ajax/avatar_upload.php",
                    type: "POST",
                    data: form_data,
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend:function(){
                           $('.loader').show();
                        }, 
                    success: function(data){
                      $(".edit-profile-photo").load(" .edit-profile-photo");
                      $(".dashbard-menu-avatar").load(" .dashbard-menu-avatar");
                        if(data.status == 200)
                             {
                               Toast.fire({
                                     icon: data.icon,
                                     title: data.message
                                 })
                             }
                         else if(data.status == 204)
                         {
                          Toast.fire({
                                     icon: data.icon,
                                     title: data.message
                                 })
                         }
                    }
                });
            });
             /**************/
            $('#update_profile').click(function(){
                
            });
        </script>
    </body>
</html>