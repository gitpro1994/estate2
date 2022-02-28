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
<script src="<?= base_url() ?>/assets/js/tooltips.js"></script>
<script src="<?= base_url() ?>/assets/js/codeEditor_mirror.js"></script>
<script src="<?= base_url() ?>/assets/js/editorDemo.js"></script>
<script src="<?= site_url() ?>/assets/js/validator.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/multiselect/jquery.multiselect.js"></script>
<script src="<?= base_url() ?>/assets/vendors/multiselect2/js/jquery.multi-select.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url() ?>/assets/js/jquery.popconfirm.js"></script>
<script src="<?= base_url() ?>/assets/js/light-gallery.js"></script>
<script src="<?= base_url() ?>/assets/vendors/datetimepicker/jquery.datetimepicker.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript">
	$("#check_number").click(function() {
		$('#check_number').prop("disabled", true);
		let url = $("#base_url").val();
		var form = $("#add_new_listing");

		var phone_number = $('#phone_number').val();
		$.ajax({
			url: url + "/core/ajax/get_user.php",
			method: "POST",
			data: {
				phone_number: phone_number
			},
			success: function(data) {
				data = JSON.parse(data);
				if (data['status'] == 200) {
					$("#name").val(data.name + ' ' + data.surname);
					$("#email").val(data.email);
					$("#phone_number").val(data.phone_number);
					$("#name").attr("disabled", true);
					$("#email").attr("disabled", true);
					$("#phone_number").attr("disabled", true);
					$('#user_kind').find('option[value="' + data.user_kind + '"]').attr('selected', true);
					$('#check_number').prop("disabled", false);
					$('#check_number').css("display", "none");
					$("#emlak-ozellikleri").show(1000);
					Toast.fire({
						icon: data['icon'],
						title: data['message']
					})
				} else if (data['status'] == 204) {
					$("#name").val();
					$("#email").val();
					$("#name").attr("disabled", false);
					$("#email").attr("disabled", false);
					$('#check_number').prop("disabled", false);
					$('#check_number').css("display", "none");
					$("#emlak-ozellikleri").show(1000);
					Toast.fire({
						icon: data['icon'],
						title: data['message']
					})
				} else {
					$("#name").val();
					$("#email").val();
					$("#name").attr("disabled", false);
					$("#email").attr("disabled", false);
					$('#check_number').prop("disabled", false);
					$("#emlak-ozellikleri").hide(1000);
					Toast.fire({
						icon: data['icon'],
						title: data['message']
					})
				}
			}
		})

	});


	$('#area_div').hide();
	$('#space_div').hide();
	$('#office_kind_div').hide();
	$('#number_of_floors_div').hide();
	$('#located_on_the_floor_div').hide();
	$('#payment_method_div').hide();
	$('#mortgage_div').hide();
	$('#region_div').hide();
	$('#settlement_div').hide();
	$('#hashtag_div').hide();
	$('#hashtags_result').hide();

	$('#kind_id').on("change", function(e) {
		var kind_id = $(this).val();
		if (kind_id == 1) {
			$('#mortgage_div').fadeIn('slow');
			$('#payment_method_div').fadeOut('slow');
		} else if (kind_id == 2) {
			$('#mortgage_div').fadeOut('slow');
			$('#payment_method_div').fadeIn('slow');
		}

	});

	$('#type_id').on("change", function(e) {
		var type_id = $(this).val();

		if (type_id == 1 || type_id == 2 || type_id == 3) {
			$('#rooms_div').show();
			$('#number_of_floors_div').show();
			$('#located_on_the_floor_div').show();
			$('#area_div').show();
			$('#office_kind_div').hide();
			$('#space_div').hide();
			$('#settlement_div').hide();
			$('#square_div').html('(m<sup>2</sup>)');
		} else if (type_id == 4) {
			$('#rooms_div').show();
			$('#space_div').show();
			$('#number_of_floors_div').hide();
			$('#located_on_the_floor_div').hide();
			$('#office_kind_div').hide();
			$('#settlement_div').hide();
			$('#square').html('(m<sup>2</sup>)');

		} else if (type_id == 5) {

			$('#space_div').show();
			$('#office_kind_div').hide();
			$('#rooms_div').hide();
			$('#number_of_floors_div').hide();
			$('#located_on_the_floor_div').hide();
			$('#settlement_div').hide();
			$('#square').html('(m<sup>2</sup>)');

		} else if (type_id == 6) {

			$('#office_kind_div').show();
			$('#rooms_div').show();
			$('#area').show();
			$('#space_div').hide();
			$('#number_of_floors_div').hide();
			$('#located_on_the_floor_div').hide();
			$('#settlement_div').hide();
			$('#square').html('(m<sup>2</sup>)');

		} else if (type_id == 8) {

			$('#office_kind_div').hide();
			$('#rooms_div').hide();
			$('#space_div').hide();
			$('#area_div').show();
			$('#number_of_floors_div').hide();
			$('#located_on_the_floor_div').hide();
			$('#settlement_div').hide();
			$('#square').html('(sot)');

		} else {

			$('#office_kind_div').hide();
			$('#rooms_div').hide();
			$('#space_div').hide();
			$('#area_div').show();
			$('#number_of_floors_div').hide();
			$('#located_on_the_floor_div').hide();
			$('#settlement_div').hide();
			$('#square').html('(m<sup>2</sup>)');
		}

	});

	$('#city_id').on("change", function(e) {
		$('#region_div').fadeOut("slow");
		$('#region_id').val("");
		$('#settlement_div').fadeOut("slow");
		$('#settlement_id').val("");

		var city_id = $(this).val();
		var url = $("#base_url").val();
		if (city_id == 8) {
			$.ajax({
				url: url + '/core/ajax/get_regions.php',
				method: "POST",
				data: {
					city_id: city_id
				},
				success: function(data) {
					var data_parsed = JSON.parse(data);
					if (data_parsed.length > 0) {
						jQuery('#region_div').fadeIn('slow');
						jQuery.each(data_parsed, function(i, value) {
							$('#region_id').append('<option value=' + value.id + '>' + value.region_name + '</option>');
						});
					} else {
						$('#region_div').fadeOut('slow ');
					}
				}
			});
		}
	});

	$('#region_id').on("change", function(e) {
		var region_id = $('#region_id').val();
		$('#settlement_div').fadeOut("slow");

		var url = $("#base_url").val();

		$.ajax({
			url: url + '/core/ajax/get_settlements.php',
			method: "POST",
			data: {
				region_id: region_id
			},
			success: function(data) {
				var data_parsed = JSON.parse(data);
				if (data_parsed.length > 0) {
					jQuery('#settlement_div').fadeIn('slow');
					jQuery.each(data_parsed, function(i, value) {
						$('#settlement_id').append('<option value=' + value.id + '>' + value.settlement_name + '</option>');
					});
				} else {
					$('#settlement_div').fadeOut('slow ');
				}
			}
		});
	});

	$('#region_id').on("change", function(e) {
		var region_id = $('#region_id').val();
		$('#hashtag_div').fadeOut("slow");

		var url = $("#base_url").val();

		$.ajax({
			url: url + '/core/ajax/get_hashtags.php',
			method: "POST",
			data: {
				region_id: region_id
			},
			success: function(data) {
				var data_parsed = JSON.parse(data);
				if (data_parsed.length > 0) {
					jQuery('#hashtag_div').fadeIn('slow');
					jQuery('#hashtags_result').fadeIn('slow');
					jQuery.each(data_parsed, function(i, value) {
						$('#all_hashtags_result').append('<div class="col-md-6"><label for="hashtag_name"><input type="checkbox" name="hashtag_name" value=' + value.hashtag_name + '>' + value.hashtag_name + '</label></div>');
					});
				} else {
					jQuery('#hashtag_div').fadeOut('slow');
					jQuery('#hashtags_result').fadeOut('slow');
				}
			}
		});
	});
</script>


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

</body>

</html>
<?php mysqli_close($conn); ?>