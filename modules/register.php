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

<main class="site-main content-area">
	<div class="container">
		<div class="row">

			<div class="col-lg-6 col-sm-12 col-12">
				<div class="page-content-block">
					<div class="col-md-12">
						<h2><?= translate('register') ?></h2>
						<form class="form-horizontal" id="register-form" method="post" >

							<div class="form-group row">
								<label for="name" class="col-sm-4 col-form-label"><?= translate('name') ?></label>
								<div class="col-sm-8">
									<input type="text" name="name" autocomplete="name" id="name" class="form-control" required/>
								</div>
							</div>

							<div class="form-group row">
								<label for="surname" class="col-sm-4 col-form-label"><?= translate('surname') ?></label>
								<div class="col-sm-8">
									<input type="text" name="surname" autocomplete="surname" id="surname" class="form-control" required/>
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-sm-4 col-form-label"><?= translate('email') ?></label>
								<div class="col-sm-8">
									<input type="email" name="email" autocomplete="email" id="email" class="form-control" required/>
								</div>
							</div>

							<div class="form-group row">
								<label for="phone_number" class="col-sm-4 col-form-label"><?= translate('phone_number') ?></label>
								<div class="col-sm-8">
									<input type="text" name="phone_number" autocomplete="phone_number" id="phone_number" class="form-control" required/>
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-sm-4 col-form-label"><?= translate('password') ?></label>
								<div class="col-sm-8">
									<input type="password" name="password" autocomplete="password" id="password" class="form-control" required/>
								</div>
							</div>

							<div class="form-group row">
								<label for="confirm_password" class="col-sm-4 col-form-label"><?= translate('confirm_password') ?></label>
								<div class="col-sm-8">
									<input type="password" name="confirm_password" autocomplete="confirm_password" id="confirm_password" class="form-control" required/>
								</div>
							</div>

							

							<div class="form-group row">
								<label for="user_kind" class="col-sm-4 col-form-label"><?= translate('I_am') ?></label>
								<div class="col-sm-8">
									<select class="single-select form-control" name="user_kind" id="user_kind"> 
										<option value=""><?= translate('please_select_one_item') ?></option>
										<option value="0"><?= translate('share_my_listing') ?></option>
										<option value="1"><?= translate('a_rielitor') ?></option>
									</select>
								</div>
							</div>
							

							<div class="form-group d-flex align-items-center">
								<button type="submit" name="register" id="register" class="btn btn-primary" value="register">
									<?= translate('register') ?>
								</button>
							</div>
							<div class="form-group">
								<p class="rtcl-forgot-password">
									<a href="<?= site_url() ?>login"><?= translate('already_have_an_account_?') ?> <?= translate('login') ?></a>
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<img src="<?= site_url() ?>/assets/img/banner/banner4.png">
			</div>

		</div>
	</div>
</main>



<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->