<?php if(!defined("icaze")){ die("No Access"); } ?>
<!DOCTYPE html>
<html lang="az">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>KA <?= translate('dashboard') ?></title>
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css?<?= rand(999,9999) ?>">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/css/vendor.bundle.base.css?<?= rand(999,9999) ?>">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/css/vendor.bundle.addons.css?<?= rand(999,9999) ?>">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/ti-icons/css/themify-icons.css?<?= rand(999,9999) ?>">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css?<?= rand(999,9999) ?>">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css?<?= rand(999,9999) ?>" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/font-awesome/css/all.css?<?= rand(999,9999) ?>" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css?<?= rand(999,9999) ?>" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/multiselect2/css/multi-select.css?<?= rand(999,9999) ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/lightgallery/css/lightgallery.css?<?= rand(999,9999) ?>">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/summernote/dist/summernote-bs4.css?<?= rand(999,9999) ?>">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/vertical-layout-light/style.css?<?= rand(999,9999) ?>">
	<link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png" />
	<link href="<?= base_url() ?>/assets/vendors/codemirror/lib/codemirror.css?<?= rand(999,9999) ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/vendors/codemirror/theme/neat.css?<?= rand(999,9999) ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/vendors/codemirror/theme/ambiance.css?<?= rand(999,9999) ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/vendors/codemirror/theme/material.css?<?= rand(999,9999) ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/vendors/codemirror/theme/neo.css?<?= rand(999,9999) ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/vendors/datetimepicker/jquery.datetimepicker.css?<?= rand(999,9999) ?>" rel="stylesheet" type="text/css" />
	<?php if ($page=='edit_language'): ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/edit_lang.css?<?= rand(999,9999) ?>">
	<?php endif ?>
    <link href="<?= base_url() ?>/assets/vendors/css/perfect-scrollbar.min.css?<?= rand(999,9999) ?>" rel="stylesheet" >
	<link href="<?= base_url() ?>/assets/vendors/css/jquery.mCustomScrollbar.css?<?= rand(999,9999) ?>" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/vendors/multiselect/jquery.multiselect.css?<?= rand(999,9999) ?>" rel="stylesheet" >
	<script src="<?= base_url() ?>/assets/vendors/js/vendor.bundle.base.js?<?= rand(999,9999) ?>"></script>
	<script src="<?= base_url() ?>/assets/vendors/js/vendor.bundle.addons.js?<?= rand(999,9999) ?>"></script>
	<script src="<?= base_url() ?>/assets/vendors/lightgallery/js/lightgallery-all.min.js?<?= rand(999,9999) ?>"></script>
	<script src="<?= base_url() ?>/assets/vendors/tinymce/tinymce.min.js?<?= rand(999,9999) ?>"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/lib/codemirror.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/addon/edit/matchbrackets.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/mode/htmlmixed/htmlmixed.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/mode/xml/xml.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/mode/javascript/javascript.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/mode/css/css.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/mode/clike/clike.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script src="<?= base_url() ?>/assets/vendors/codemirror/mode/php/php.js?<?= rand(999,9999) ?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			var pageTitle = $("title").text();
			$(window).blur(function() {
				$("title").text("<?= translate('dont_forget_to_close_me') ?> :)");
			});
			$(window).focus(function() {
				$("title").text(pageTitle);
			});
		});
	</script>
</head>
<div class="modal fade" id="session-expire-warning-modal" aria-hidden="true" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Session Expire Warning</h4>
         </div>
         <div class="modal-body">
            Your session will expire in <span id="seconds-timer"></span> seconds. Do you want to extend the session?
         </div>
         <div class="modal-footer">
            <button id="btnOk" type="button" class="btn btn-default" style="padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal; border: 1px solid transparent; border-radius: 4px;  background-color: #428bca; color: #FFF;">Ok</button>
            <button id="btnSessionExpiredCancelled" type="button" class="btn btn-default" data-dismiss="modal" style="padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal; border: 1px solid transparent; border-radius: 4px; background-color: #428bca; color: #FFF;">Cancel</button>
            <button id="btnLogoutNow" type="button" class="btn btn-default" style="padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal; border: 1px solid transparent; border-radius: 4px;  background-color: #428bca; color: #FFF;">Logout now</button>
         </div>
      </div>
   </div>
</div>
<!--End Show Session Expire Warning Popup here -->
<!--Start Show Session Expire Popup here -->
<div class="modal fade" id="session-expired-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Session Expired</h4>
         </div>
         <div class="modal-body">
            Your session is expired.
         </div>
         <div class="modal-footer">
            <button id="btnExpiredOk" onclick="sessionExpiredRedirect()" type="button" class="btn btn-primary" data-dismiss="modal" style="padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal; border: 1px solid transparent; border-radius: 4px; background-color: #428bca; color: #FFF;">Ok</button>
         </div>
      </div>
   </div>
</div>