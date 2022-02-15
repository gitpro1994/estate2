<!DOCTYPE html>
<html lang="az">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= translate('dashboard') ?></title>
	<link rel="stylesheet" href="assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
	<link rel="stylesheet" href="assets/css/vertical-layout-light/style.php">
	<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
				<div class="row flex-grow">
					<div class="col-lg-6 d-flex align-items-center justify-content-center">
						<div class="auth-form-transparent text-left p-3">
							<center>
							<img src="assets/images/kalogo.png"  style="width:50%;">
							</center>
							<div id="error-msg" style="display:none;" class="alert alert-danger" role="alert"></div>
							<form id="login-form" class="pt-3" method="post" action="" autocomplete="off">
								<div class="form-group">
									<label for="kadi"><?= translate('username') ?></label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
											<i class="mdi mdi-account-outline text-primary"></i>
											</span>
										</div>
										<input type="text" class="form-control form-control-lg border-left-0" autofocus=""  name="kadi" id="kadi">
									</div>
								</div>
								<div class="form-group">
									<label for="sifre"><?= translate('password'); ?> </label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
											<i class="mdi mdi-lock-outline text-primary"></i>
											</span>
										</div>
										<input type="password" class="form-control form-control-lg border-left-0"  name="sifre" id="sifre">
									</div>
								</div>
								<div class="my-2 d-flex justify-content-between align-items-center">
									<div class="form-check">
										<label class="form-check-label text-muted">
										<input type="checkbox"  name="beni_hatirla" class="form-check-input">
										<?= translate('remember_me'); ?>
										</label>
									</div>
									<a href="#" data-toggle="modal" data-target="#sifremi-unuttum" data-backdrop="static" data-keyboard="false" data-whatever="@mdo" class="auth-link text-black"><?= translate('forgot_password'); ?>?</a>
								</div>
								<div class="my-3">
									<button type="submit" name="kullanici_giris" id="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><i class="icon-lock"></i> <?= strtoupper(translate('login')); ?></button>
								</div>
							</form>
						<?php 
					// } ?>
						</div>
					</div>
					<div class="col-lg-6 login-half-bg d-flex flex-row">
						<p class="text-white font-weight-medium text-center flex-grow align-self-end"><?= settings('dashboard_footer_text') ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="sifremi-unuttum" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="ModalLabel">Şifrəmi Unutdum</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="col-sm-12">
					<div id="error-recovery" style="display:none;" class="alert alert-danger" role="alert"></div>
					</div>
				<form method="post" id="recovery_password" autocomplete="off">
					
					<div class="modal-body">					
						<div class="form-group mb-0">
							<label for="email" class="col-form-label mb-0">E-Poçt Ünvanınız</label>
							<input type="text" class="form-control" name="email" id="email" />
						</div>					
					</div>
					<div class="modal-footer">
						<button type="submit" name="sifirla" id="sifirla" class="btn btn-success"><i class="icon-refresh"></i> Sıfırla</button>
						<button type="button" class="btn btn-light" data-dismiss="modal"><i class="icon-close"></i> Ləğv et</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
	<script src="assets/js/off-canvas.js"></script>
	<script src="assets/js/hoverable-collapse.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/settings.js"></script>
	<script src="assets/js/todolist.js"></script>
	    <script>
        $(document).ready(function() {
            $("#error-msg").hide(); 
            $('#login').click(function(e) {
                let self = $(this);
                e.preventDefault(); // prevent default submit behavior
                self.prop('disabled', true);
                var data = $('#login-form').serialize(); // get form data
                // sending ajax request to login.php file, it will process login request and give response.

                $.ajax({
                    url: 'core/ajax/login.php',
                    type: "POST",
                    data: data,
                }).done(function(res) {
                    res = JSON.parse(res);
                    // if login successful redirect user to secure.php page.
                    if (res['status']) 
                    {
                        location.href = "home"; // redirect user to secure.php location/page.
                    } else {
                        var errorMessage = '';
                        // if there is any errors convert array of errors into html string, 
                        //here we are wrapping errors into a paragraph tag.
                        $.each(res['msg'], function(index, message) {
                            errorMessage += '<div>' + message + '</div>';
                        });
                        
                        $("#error-msg").html(errorMessage);
                        $("#error-msg").show();
                        self.prop('disabled', false);
                        // location.reload(true);
                    }
                }).fail(function() {
                    alert("error");
                }).always(function() {
                    self.prop('disabled', false);
                });
            });

            /* Recovery Password */
            $("#error-recovery").hide();
            $('#sifirla').click(function(e) {
                let self = $(this);
                e.preventDefault(); // prevent default submit behavior
                self.prop('disabled', true);
                var data = $('#recovery_password').serialize(); // get form data
                // sending ajax request to login.php file, it will process login request and give response.

                $.ajax({
                    url: 'core/ajax/recovery_password.php',
                    type: "POST",
                    data: data,
                }).done(function(res) {
                    res = JSON.parse(res);
                    // if login successful redirect user to secure.php page.
                    if (res['status']) 
                    {
                        // redirect user to secure.php location/page.
                        location.href = "home"; 
                    } else {
                        var errorMessage = '';
                        // if there is any errors convert array of errors into html string, 
                        //here we are wrapping errors into a paragraph tag.
                        $.each(res['msg'], function(index, message) {
                            errorMessage += '<div>' + message + '</div>';
                        });
                        
                        $("#error-recovery").html(errorMessage);
                        $("#error-recovery").show();
                        self.prop('disabled', false);
                        // location.reload(true);
                    }
                }).fail(function() {
                    alert("error");
                }).always(function() {
                    self.prop('disabled', false);
                });
            });

        });
    </script>
</body>
</html>
