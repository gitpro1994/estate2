<style>
	.bootstrap-select>.dropdown-toggle {
		padding-top: 8px;
		padding-bottom: 8px;
		border-radius: 5px;
	}

	.select2-container-multi .select2-choices .select2-search-field input {
		padding: 7px 5px;
	}

	.select2-container-multi .select2-choices .select2-search-choice {
		background-color: #f5f5f5;
		border: 1px solid #e3e3e3;
		border-radius: 1px;
		padding: 7px 20px;
	}

	.select2-container-multi .select2-search-choice-close {
		left: 5px;
		margin-top: 4px;
	}
</style>

<style>
	/* Main Search with Maps */
	#map-container .main-search-container {
		position: absolute;
		bottom: 50px;
		left: 50%;
		transform: translate(-50%, 100%);
		z-index: 9999;
		transition: all 0.4s;
		width: auto;
	}

	#map-container .main-search-container.active {
		position: absolute;
		bottom: 40px;
		left: 50%;
		transform: translate(-50%, 0);
		z-index: 9999;
	}

	#map-container .main-search-form {
		width: 100%;
		margin-top: 0;
	}

	#map-container .main-search-box {
		padding-bottom: 15px;
		margin-top: 0;
		border-radius: 0 3px 3px 3px;
	}

	#map-container.homepage-map {
		height: 580px;
		overflow: hidden;
	}

	@media (max-width: 1369px) {
		#map-container.homepage-map {
			height: 480px;
		}
	}

	#map-container.homepage-map.overflow {
		overflow: visible;
	}

	a.button.adv-search-btn {
		color: #fff;
		border-radius: 3px 3px 0 0;
		font-size: 16px;
		padding: 0 24px;
		position: relative;
		z-index: 9999;
		margin: 0;
		height: 50px;
		line-height: 50px;
		display: inline-block;
		overflow: visible;
	}

	a.adv-search-btn i {
		font-size: 14px;
		margin-left: 7px;
		transition: 0.2s;
	}

	a.adv-search-btn.active i.fa.fa-caret-up {
		transform: rotate(-540deg);
	}

	#map {
		width: 100%;
		height: 100%;
		padding: 0;
		margin: 0;
	}
</style>

<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR&amp;apikey=f225c725-dda6-42d7-aee6-b822af2b3216" type="text/javascript">
</script>
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<div class="page-title mt-0 mb-0">
				<h3>Emlak Ekle / Düzenle</h3>
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li><a href="./"><i class="icon-home menu-icon"></i></a></li>
						<li><a href="//emlakv4.demobul.com.tr/yonetim/emlak-ekle"><?= translate('all_listings') ?></a></li>
						<li class="active"><a href="add_listing"><?= translate('add_listing') ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" method="post" enctype="multipart/form-data">
							<input id="id" name="id" type="hidden" value="">
							<input id="ozellik" name="ozellik" type="hidden" value="">
							<input id="dil" name="dil" type="hidden" value="1">
							<input id="ilceid" name="ilceid" type="hidden" value="">
							<input id="semtid" name="semtid" type="hidden" value="">
							<input id="uye" name="uye" type="hidden" value="">

							<div class="row">
								<div class="col-8">
									<div class="tab-content tab-content-vertical pt-3 pb-0">
										<form id="add_new_listing" class="forms-sample" method="POST" enctype="multipart/form-data">
											<div class="tab-pane fade show active" id="emlak-bilgileri" role="tabpanel" aria-labelledby="home-tab-vertical">
												<div class="row">
													<div class="form-group col-md-6">
														<label for="adi">Əlaqədar şəxs</label>
														<input type="text" required class="form-control form-control-sm" placeholder="<?= translate('enter_your_name_and_surname') ?>" name="name" id="name" value="" />
													</div>

													<div class="form-group col-md-6">
														<label for="adi">Mobil nömrə</label>
														<input type="text" placeholder="<?= translate('enter_your_phone_number') ?>" class="form-control form-control-sm" name="phone_number" id="phone_number" value="" />
													</div>

													<div class="form-group col-md-6">
														<label for="adi">Mən</label>
														<select class="form-control form-control-sm" name="user_kind" id="user_kind">
															<option><?= translate('please_select_one_item') ?></option>
															<option>Əmlak sahibiyəm</option>
															<option>Vasitəçiyəm</option>
														</select>
													</div>

													<div class="form-group col-md-6">
														<label for="adi">Email</label>
														<input type="email" placeholder="<?= translate('enter_your_email_address') ?>" class="form-control form-control-sm" name="email" id="email" value="" />
													</div>

													<div class="form-group col-md-6" id="number_check_button">
														<label for="adi"></label>
														<button class="btn btn-primary btn-icon-text btn-sm mt-3" name="check_number" id="check_number" type="submit"><?= translate('continue') ?></button>
													</div>

												</div>

											</div>


											<div class="tab-pane" id="emlak-ozellikleri" role="tabpanel" aria-labelledby="contact-tab-vertical">
												<div class="row">
													<div class="form-group col-md-6" id="realty_kind_div">
														<label for="adi"><?= translate('realty_kind') ?></label>
														<select class="form-control form-control-sm" name="kind_id" id="kind_id">
															<option><?= translate('please_select_one_item') ?></option>
															<?php
															$realty_kind  = mysqli_query($conn, "SELECT * FROM realty_kinds WHERE status=1");
															while ($bax = mysqli_fetch_array($realty_kind)) {
															?>
																<option value="<?= $bax['id'] ?>">
																	<?= translate($bax['kind_name']) ?>
																</option>
															<?php } ?>
														</select>
													</div>

													<div class="form-group col-md-6" id="realty_type_div">
														<label for="adi"><?= translate('realty_type') ?></label>
														<select class="form-control form-control-sm" name="type_id" id="type_id">
															<option><?= translate('please_select_one_item') ?></option>
															<?php
															$realty_types  = mysqli_query($conn, "SELECT * FROM realty_types WHERE status=1");
															while ($bax = mysqli_fetch_array($realty_types)) {
															?>
																<option value="<?= $bax['id'] ?>">
																	<?= translate($bax['type_name']) ?>
																</option>
															<?php } ?>
														</select>
													</div>

													<div class="form-group col-md-6" id="cities_div">
														<label for="adi"><?= translate('city') ?></label>
														<select class="form-control form-control-sm" name="city_id" id="city_id">
															<option><?= translate('please_select_one_item') ?></option>
															<?php
															$cities  = mysqli_query($conn, "SELECT * FROM cities WHERE status=1");
															while ($bax = mysqli_fetch_array($cities)) {
															?>
																<option value="<?= $bax['id'] ?>">
																	<?= translate($bax['city_name']) ?>
																</option>
															<?php } ?>
														</select>
													</div>

													<div class="form-group col-md-6" id="office_kind_div">
														<label for="adi"><?= translate('realty_type') ?></label>
														<select class="form-control form-control-sm" name="office_kind" id="office_kind">
															<option><?= translate('please_select_one_item') ?></option>
															<option value="0">Biznes mərkəzi</option>
															<option value="1">Ev / mənzil</option>
															<option value="2">Villa</option>
														</select>
													</div>

													<div class="form-group col-md-6" id="rooms_div">
														<label for="room_number"><?= translate('number_of_rooms') ?></label>
														<input type="text" placeholder="Zəhmət olmasa otaq sayını daxil edin" class="form-control form-control-sm" name="rooms" id="rooms" />
													</div>

													<div class="form-group col-md-6" id="area_div">
														<label for="room_number"><?= translate('area') ?> <span id="square"> (m<sup>2</sup>)</span></label>
														<input type="text" class="form-control form-control-sm" name="area" id="area" />
													</div>

													<div class="form-group col-md-6" id="space_div">
														<label for="room_number"><?= translate('space') ?> (sot)</label>
														<input type="text" class="form-control form-control-sm" name="space" id="space" />
													</div>

													<div class="form-group col-md-6" id="number_of_floors_div">
														<label><?= translate('number_of_floors'); ?></label>
														<input type="text" placeholder="Mənzilin yerləşdiyi mərtəbə" class="form-control form-control-sm" id="floor_no" name="floor_no">
													</div>
													<div class="form-group col-md-6" id="located_on_the_floor_div">
														<label><?= translate('located_on_the_floor'); ?></label>
														<input type="text" placeholder="Binanın ümumi mərtəbəsi" class="form-control form-control-sm" id="building_floor_no" name="building_floor_no">
													</div>

													<div class="form-group col-md-6">
														<label><?= translate('price'); ?></label>
														<input type="text" placeholder="Zəhmət olmasa qiyməti daxil edin" class="form-control form-control-sm" name="price" id="price">
													</div>

													<div class="form-group col-md-6" id="payment_method_div">
														<label for="adi"><?= translate('payment_method') ?></label>
														<select class="form-control form-control-sm" name="payment_method" id="payment_method">
															<option><?= translate('please_select_one_item') ?></option>
															<option value="0">Günlük</option>
															<option value="1">Aylıq</option>
														</select>
													</div>

													<div class="col-md-6" id="mortgage_div">
														<div class="col-md-6">
															<div class="form-check mx-sm-2">
																<label class="form-check-label">
																	<input name="mortgage" id="mortgage" type="radio" class="form-check-input " value="0">
																	Kupça var <i class="input-helper"></i>
																</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-check mx-sm-2">
																<label class="form-check-label">
																	<input name="mortgage" id="mortgage" type="radio" class="form-check-input " value="1">
																	İpoteka var <i class="input-helper"></i>
																</label>
															</div>
														</div>
													</div>

													<div class="form-group col-md-6">
														<label><?= translate('address'); ?></label>
														<input type="text" name="address" id="address" placeholder="Dəqiq ünvanı göstərin (küçə, ev nömrəsi)" class="form-control form-control-sm">
													</div>

													<div class="form-group col-md-6" id="region_div">
														<label for="adi"><?= translate('region') ?></label>
														<select class="form-control form-control-sm" name="region_id" id="region_id">
															<option><?= translate('please_select_one_item') ?></option>

														</select>
													</div>

													<div class="form-group col-md-6" id="settlement_div">
														<label for="adi"><?= translate('settlement') ?></label>
														<select class="form-control form-control-sm" name="settlement_id" id="settlement_id">
															<option><?= translate('please_select_one_item') ?></option>

														</select>
													</div>

													<div class="form-group col-md-6" id="hashtag_div">
														<label for="adi"><?= translate('hashtag') ?></label>
														<select class="form-control form-control-sm" name="hashtag_id" id="hashtag_id">
															<option><?= translate('please_select_one_item') ?></option>

														</select>
													</div>
												</div>

												<div class="form-group">
													<label for="aciklama"><?= translate('more') ?></label>
													<textarea name="description" id="myTextarea"></textarea>
												</div>

												<div class="form-group row col-md-6">
													<label><?= translate('images') ?></label>
													<input type="file" name="estate_photo[]" multiple class="file-upload-default">
													<div class="input-group col-xs-12">
														<input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="Ürüne ait resimleri toplu şekilde buradan seçebilirsiniz.">
														<span class="input-group-append">
															<button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> Dosya Seç</button>
														</span>
													</div>
												</div>

												<div class="form-group mb-2">
													<label class="switch">
														<input type="checkbox" name="status" id="status" value="1" checked>
														<span class="slider"></span>
													</label>
													<label class="d-inline-block" style="line-height: 34px;" for="durum"><?= translate('status') ?></label>
												</div>

												<div class="form-group mb-2">
													<label class="switch">
														<input type="checkbox" name="shared" id="shared" value="1">
														<span class="slider"></span>
													</label>

													<label class="d-inline-block" style="line-height: 34px;" for="anasayfa"><?= translate('shared_on_homepage') ?></label>

												</div>

												<div class="form-group">
													<label for="button"></label>
													<button class="btn btn-primary btn-icon-text btn-sm mt-3"><?= translate('save') ?></button>
												</div>



											</div>
										</form>
									</div>
								</div>

								<div class="col-4">
									<div class="card-header text-center">
										<h4 class="text-danger"><?= translate('rules') ?></h4>
									</div>
									<div class="tab-content tab-content-vertical p-4">
										<div class="tab-pane fade show active">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam architecto reiciendis quibusdam quia quis! Velit, aperiam possimus tempora perspiciatis animi quasi totam quaerat necessitatibus, quidem molestias aut. Eum, quod distinctio.
										</div>
									</div>
								</div>

							</div>

						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#secenek').bind('change', secenekGetir);
		});

		function secenekGetir() {
			var id = $(this).val();
			var ozellik = $("#ozellik").val();
			var dil = $("#dil").val();
			$.ajax({
				type: 'post',
				url: 'data/secenek.php',
				data: {
					"id": id,
					"ozellik": ozellik,
					"dil": dil
				},
				success: function(result) {
					$('#secyaz').html(result);
				}
			});
		}

		$('#secenek').ready(function() {
			var id = $("#secenek").val();
			var ozellik = $("#ozellik").val();
			var dil = $("#dil").val();
			if (id != 0) {
				$.ajax({
					type: 'post',
					url: 'data/secenek.php',
					data: {
						"id": id,
						"ozellik": ozellik,
						"dil": dil
					},
					success: function(result) {
						$('#secyaz').html(result);
					}
				});
			} else {
				$("#secyaz").html('Kategori Seçiniz.');
			}
		});
	</script>
	<script>
		$(document).ready(function(e) {
			$('#il').bind('change', ilceleriGetir);
			$('#ilce').bind('change', semtleriGetir);
		});

		function ilceleriGetir() {
			var ilid = $(this).val();
			var ilceid = $("#ilceid").val();
			$.ajax({
				type: "post",
				url: "dinamik.php",
				data: {
					"ilid": ilid,
					"ilceid": ilceid
				},
				dataType: "json",
				success: function(fur) {
					$("#ilce").html(fur.basari);
				}
			});
		}

		function emlakResimSirala(resimID, sira) {

			$.ajax({
				type: "post",
				url: "/tema/genel/ajax/ajax.php",
				data: {
					"resim_id": resimID,
					"sira": sira,
					'type': 'emlakResimSirala'
				},
				dataType: "POST"
			});

			$.toast({
				heading: 'Başarılı!',
				text: 'Başarı ile guncellenmiştir.',
				showHideTransition: 'slide',
				icon: 'success',
				loaderBg: '#fff',
				position: 'top-right'
			});
		}

		function semtleriGetir() {
			var ilceid = $("#ilce").val();
			var semtid = $("#semtid").val();
			$.ajax({
				type: "post",
				url: "dinamik.php",
				data: {
					"ilceid": ilceid,
					"semtid": semtid
				},
				dataType: "json",
				success: function(fur) {
					$("#semt").html(fur.basari);
				}
			});
		}

		$('#il').ready(function() {
			var ilid = $("#il").val();
			var ilceid = $("#ilceid").val();
			var semtid = $("#semtid").val();
			if (ilid != 0) {
				$.ajax({
					type: "post",
					url: "dinamik.php",
					data: {
						"ilid": ilid,
						"ilceid": ilceid,
						"semtid": semtid
					},
					dataType: "json",
					success: function(fur) {
						$("#ilce").html(fur.basari);
						setTimeout(function() {
							semtleriGetir();
						}, 500);
					}
				});
			} else {
				$("#ilce").html('<option value="0">İlçe Seçiniz</option>');
			}
		});
	</script>