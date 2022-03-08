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
                        <h2><?= translate('login') ?></h2>
                        <form class="form-horizontal" id="login-form" method="post">
                            <div class="form-group">
                                <label for="rtcl-user-login" class="control-label">
                                    <?= translate('phone_number_username_or_email') ?>
                                    <strong class="rtcl-required">*</strong>
                                </label>
                                <input type="text" name="username" autocomplete="username" id="username" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="rtcl-user-pass" class="control-label">
                                    <?= translate('password'); ?> <strong class="rtcl-required">*</strong>
                                </label>
                                <input type="password" name="password" id="password" autocomplete="current-password" class="form-control" required />
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <button type="submit" name="rtcl-login" id="login" class="btn btn-primary" value="login">
                                    <?= translate('login') ?>
                                </button>
                                <div class="form-check">
                                    <input type="checkbox" name="rememberme" id="rememberme" value="forever" />
                                    <label class="form-check-label" for="rememberme"> <?= translate('remember_me') ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="rtcl-forgot-password">
                                    <a href="#"><?= translate('forgot_your_password') ?></a>
                                </p>
                            </div>
                            <div class="form-group">
                                <p class="rtcl-forgot-password">
                                    <a href="<?= site_url() ?>register"><?= translate('dont_have_an_account_?') ?> <?= translate('register') ?></a>
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