<?php if (!defined("icaze")) {
	die("No Access");
} ?>
<footer class="footer">
	<div class="d-sm-flex justify-content-center justify-content-sm-between">
		<span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><?= translate(settings('dashboard_footer_text')); ?></span>
	</div>
</footer>
</div>
</div>
</div>

<script src="<?= base_url() ?>/assets/js/tinymce.min.js" referrerpolicy="origin"></script>
<script src="<?= base_url() ?>/assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>/assets/js/template.js"></script>
<script src="<?= base_url() ?>/assets/js/settings.js"></script>
<script src="<?= base_url() ?>/assets/js/todolist.js"></script>
<script src="<?= base_url() ?>/assets/js/dashboard.js"></script>
<script src="<?= base_url() ?>/assets/js/file-upload.js"></script>
<script src="<?= base_url() ?>/assets/js/typeahead.js"></script>
<script src="<?= base_url() ?>/assets/js/select2.js"></script>
<script src="<?= base_url() ?>/assets/js/formpickers.js"></script>
<script src="<?= base_url() ?>/assets/js/form-addons.js"></script>
<script src="<?= base_url() ?>/assets/js/x-editable.js"></script>
<script src="<?= base_url() ?>/assets/js/dropify.js"></script>
<script src="<?= base_url() ?>/assets/js/form-repeater.js"></script>
<script src="<?= base_url() ?>/assets/js/bt-maxLength.js"></script>
<script src="<?= base_url() ?>/assets/js/codeEditor_mirror.js"></script>
<script src="<?= base_url() ?>/assets/js/editorDemo.js"></script>
<script src="<?= site_url() ?>/assets/js/validator.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/multiselect/jquery.multiselect.js"></script>
<script src="<?= base_url() ?>/assets/vendors/multiselect2/js/jquery.multi-select.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery.popconfirm.js"></script>
<script src="<?= base_url() ?>/assets/js/light-gallery.js"></script>
<script src="<?= base_url() ?>/assets/js/toast.js"></script>
<script src="<?= base_url() ?>/assets/vendors/datetimepicker/jquery.datetimepicker.js"></script>
<script src="<?= base_url() ?>/assets/js/tooltips.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<?php if ($page == 'logs') : ?>
	<script>
		$(document).ready(function() {
			$(window).scroll(function() {
				var position = $(window).scrollTop();
				var bottom = $(document).height() - $(window).height();
				if (position == bottom) {
					var row = Number($('#row').val());
					var allcount = Number($('#all').val());
					var rowperpage = 3;
					row = row + rowperpage;
					if (row <= allcount) {
						$('#row').val(row);
						$.ajax({
							url: 'core/data/fetch_logs.php',
							type: 'post',
							data: {
								row: row
							},
							success: function(response) {
								$(".post:last").after(response).show().fadeIn("slow");
							}
						});
					}
				}
			});
		});
	</script>
<?php endif; ?>
<script>
	var baseUrl = "<?= base_url() ?>";

	tinymce.init({
		selector: '#myTextarea,#myTextarea2',
		language: 'tr',
		theme: "silver",
		branding: false,
		height: 400,
		fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
		plugins: [
			"image code",
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code filemanager responsivefilemanager fullscreen insertdatetime media nonbreaking",
			"save table directionality emoticons template paste textcolor"
		],
		toolbar: "responsivefilemanager | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image code | print preview media | forecolor backcolor fontsizeselect emoticons",
		image_advtab: true,
		external_filemanager_path: baseUrl + "/assets/vendors/filemanager/",
		filemanager_title: "Fayl Meneceri",
		external_plugins: {
			"responsivefilemanager": baseUrl + "/assets/vendors/tinymce/plugins/responsivefilemanager/plugin.min.js",
			"flickr": baseUrl + "/assets/vendors/tinymce/plugins/flickr/plugin.min.js",
			"youtube": baseUrl + "/assets/vendors/tinymce/plugins/youtube/plugin.min.js",
			"filemanager": baseUrl + "/assets/vendors/filemanager/plugin.min.js"
		},
		filemanager_access_key: "demo"
	});
</script>
<script src="<?= base_url() ?>/assets/js/main.js"></script>

<script>
	function status_control(listing_id, status_code) {
		let url = $("#base_url").val();
		$.ajax({
			url: url + "/core/ajax/status_control.php",
			method: "POST",
			data: {
				listing_id: listing_id,
				status_code: status_code
			},
			success: function(data) {
				data_parsed = JSON.parse(data);
				Toast.fire({
					icon: data_parsed.icon,
					title: data_parsed.message
				});
			}
		})
	}

	function user_status_control(user_id, status_code) {
		let url = $("#base_url").val();
		$.ajax({
			url: url + "/core/ajax/user_status_control.php",
			method: "POST",
			data: {
				user_id: user_id,
				status_code: status_code
			},
			success: function(data) {
				data_parsed = JSON.parse(data);
				Toast.fire({
					icon: data_parsed.icon,
					title: data_parsed.message
				});
			}
		})
	}
</script>
</body>

</html>
<?php mysqli_close($conn); ?>