<style>
	.bootstrap-select>.dropdown-toggle {
		padding-top: 8px;
		padding-bottom: 8px;
		border-radius: 5px;
	}
	.select2-container-multi .select2-choices .select2-search-field input {
		padding: 7px 5px;
	}
	.select2-container-multi .select2-choices .select2-search-choice{
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
	width: 100%; height: 100%; padding: 0; margin: 0;
}		
</style>

<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR&amp;apikey=f225c725-dda6-42d7-aee6-b822af2b3216" type="text/javascript"></script><div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<div class="page-title mt-0 mb-0">
				<h3>Emlak Ekle / Düzenle</h3>
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li><a href="./"><i class="icon-home menu-icon"></i></a></li>
						<li><a href="//emlakv4.demobul.com.tr/yonetim/emlak-ekle">Emlak Yönetimi</a></li>
						<li><a href="emlaklar">Emlaklar</a></li>
						<li class="active"><a href="//emlakv4.demobul.com.tr/yonetim/emlak-ekle">Emlak Ekle / Düzenle</a></li>
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
								<div class="col-3">
									<ul class="nav nav-tabs nav-tabs-vertical" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="home-tab-vertical" data-toggle="tab" href="#emlak-bilgileri" role="tab" aria-controls="emlak-bilgileri" aria-selected="true">
												EMLAK BİLGİLERİ
											</a>
										</li>

										<li class="nav-item">
											<a class="nav-link" id="contact-tab-vertical" data-toggle="tab" href="#emlak-ozellikleri" role="tab" aria-controls="emlak-ozellikleri" aria-selected="false">
												ÖZELLİKLER
											</a>
										</li>

										<li class="nav-item">
											<a class="nav-link" id="contact-tab-vertical" data-toggle="tab" href="#seo-ayarlari" role="tab" aria-controls="seo-ayarlari" aria-selected="false">
												SEO AYARLARI
											</a>
										</li>
									</ul>
								</div>
								<div class="col-9">
									<div class="tab-content tab-content-vertical pt-3 pb-0">
										<div class="tab-pane fade show active" id="emlak-bilgileri" role="tabpanel" aria-labelledby="home-tab-vertical">
											<div class="row">
												<div class="form-group col-md-6">
													<label for="adi">Əlaqədar şəxs</label>
													<input type="text" class="form-control form-control-sm" placeholder="Zəhmət olmasa ad soyad daxil edin" name="name" id="name" value="" />
												</div>

												<div class="form-group col-md-6">
													<label for="adi">Mobil nömrə</label>
													<input type="text" placeholder="Zəhmət olmasa əlaqə nömrəsi daxil edin" class="form-control form-control-sm" name="phone_number" id="phone_number" value="" />
												</div>

												<div class="form-group col-md-6">
													<label for="adi">Mən</label>
													<select class="form-control form-control-sm" name="user_type" id="user_type">
														<option><?= translate('please_select_one_item') ?></option>
														<option>Əmlak sahibiyəm</option>
														<option>Vasitəçiyəm</option>
													</select>
												</div>

												<div class="form-group col-md-6">
													<label for="adi">Email</label>
													<input type="email" placeholder="Zəhmət olmasa email ünvanı daxil edin" class="form-control form-control-sm" name="email" id="email" value="" />
												</div>		
											</div>	

											<hr>

											<div class="row" id="realty_kind_div">
												<div class="form-group col-md-6">
													<label for="adi"><?= translate('realty_kind') ?></label>
													<select class="form-control form-control-sm" name="realty_kind" id="realty_kind">
														<option><?= translate('please_select_one_item') ?></option>
														<?php 
														$realty_kind  = mysqli_query($conn,"SELECT * FROM realty_kinds WHERE status=1");
														while ($bax = mysqli_fetch_array($realty_kind)) {
															?>
															<option value="<?= $bax['id'] ?>">
																<?= translate($bax['kind_name']) ?>
															</option>
														<?php } ?>
													</select>
												</div>

												<div class="form-group col-md-6"  id="realty_type_div">
													<label for="adi"><?= translate('realty_type') ?></label>
													<select class="form-control form-control-sm" name="realty_type" id="realty_type">
														<option><?= translate('please_select_one_item') ?></option>
														<?php 
														$realty_types  = mysqli_query($conn,"SELECT * FROM realty_types WHERE status=1");
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
													<select class="form-control form-control-sm" name="cities" id="cities">
														<option><?= translate('please_select_one_item') ?></option>
														<?php 
														$cities  = mysqli_query($conn,"SELECT * FROM cities WHERE status=1");
														while ($bax = mysqli_fetch_array($cities)) {
															?>
															<option value="<?= $bax['seo_link'] ?>">
																<?= translate($bax['city_name']) ?>
															</option>
														<?php } ?>
													</select>
												</div>

												<div class="form-group col-md-6"  id="office_kind_div">
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
													<input type="number" placeholder="Zəhmət olmasa otaq sayını daxil edin" class="form-control form-control-sm" name="rooms" id="rooms" />
												</div>

												<div class="form-group col-md-6" id="area_div">
													<label for="room_number"><?= translate('area') ?> <span id="square"> (m<sup>2</sup>)</span></label>
													<input type="number" class="form-control form-control-sm" name="area" id="area" />
												</div>	

												<div class="form-group col-md-6" id="space_div">
													<label for="room_number"><?= translate('space') ?> (sot)</label>
													<input type="number" class="form-control form-control-sm" name="space" id="space" />
												</div>

												<div class="form-group col-md-6" id="number_of_floors_div">
													<label><?= translate('number_of_floors'); ?></label>
													<input type="text" placeholder="Mənzilin yerləşdiyi mərtəbə" class="form-control form-control-sm" id="floor_no" name="floor_no">
												</div>
												<div class="form-group col-md-6" id="located_on_the_floor_div">
													<label><?= translate('located_on_the_floor'); ?></label>
													<input type="text" placeholder="Binanın ümumi mərtəbəsi" class="form-control form-control-sm" id="floor" name="floor">
												</div>

												<div class="form-group col-md-6">
													<label><?= translate('price'); ?></label>
													<input type="text" placeholder="Zəhmət olmasa qiyməti daxil edin" class="form-control form-control-sm" name="price" id="price">
												</div>

												<div class="form-group col-md-6" id="payment_method">
													<label for="adi"><?= translate('payment_method') ?></label>
													<select class="form-control form-control-sm" name="payment_method" id="payment_method">
														<option><?= translate('please_select_one_item') ?></option>
														<option value="0">Günlük</option>
														<option value="1">Aylıq</option>
													</select>
												</div>

												<div class="col-md-6" id="mortgage">
													<div class="col-md-6">
														<div class="form-check mx-sm-2">
															<label class="form-check-label">
																<input name="kupcha" id="kupcha" type="checkbox" class="form-check-input " value="5-15">
																Kupça var <i class="input-helper"></i>
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-check mx-sm-2">
															<label class="form-check-label">
																<input name="ipoteka" id="ipoteka" type="checkbox" class="form-check-input " value="5-14">
																İpoteka var <i class="input-helper"></i>
															</label>
														</div>
													</div>
												</div>

												<div class="form-group col-md-6">
													<label><?= translate('address'); ?></label>
													<input type="text" placeholder="Dəqiq ünvanı göstərin (küçə, ev nömrəsi)" class="form-control form-control-sm">
												</div>

												<div class="form-group col-md-6" id="region_div">
													<label for="adi"><?= translate('region') ?></label>
													<select class="form-control form-control-sm" name="region" id="region">
														<option><?= translate('please_select_one_item') ?></option>
														
													</select>
												</div>

												<div class="form-group col-md-6" id="settlement_div">
													<label for="adi"><?= translate('settlement') ?></label>
													<select class="form-control form-control-sm" name="settlement" id="settlement"> 
														<option><?= translate('please_select_one_item') ?></option>
														
													</select>
												</div>

												<div class="form-group col-md-6" id="hashtag_div">
													<label for="adi"><?= translate('hashtag') ?></label>
													<select class="form-control form-control-sm" name="hashtag" id="hashtag">
														<option><?= translate('please_select_one_item') ?></option>
														<?php 
														$hg = 'SELECT * FROM hashtags WHERE status = 1';
														$qry_hg = mysqli_query($conn,$hg);
														while ($bax = mysqli_fetch_array($qry_hg)) {
															?>
															<option value="<?= $bax['seo_link'] ?>">
																<?= translate($bax['hashtag_name']) ?>
															</option>
														<?php } ?>
													</select>
												</div>
											</div>	

											<div class="form-group">
												<label for="aciklama"><?= translate('more') ?></label>
												<textarea name="description" id="myTextarea"></textarea>
											</div>

											<div class="form-group row col-md-6">
												<label><?= translate('images') ?></label>
												<input type="file" name="resimler[]" multiple class="file-upload-default">
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
										</div>

										<div class="tab-pane fade" id="emlak-ozellikleri" role="tabpanel" aria-labelledby="contact-tab-vertical">

											<div class="tab-pane" id="ozellikler">
												<div id="secyaz">	
													<div class="card mb-4 bg-light">
														<div class="card-header">Cephe</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="5-15">
																			Kuzey						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="5-14">
																			Güney						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="5-13">
																			Doğu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="5-12">
																			Batı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">İç Özellikler</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-78">
																			Duşakabin						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-77">
																			Kiler						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-76">
																			Şömine						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-75">
																			Çamaşır Makinesi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-74">
																			Vestiyer						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-73">
																			Set Üstü Ocak						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-72">
																			PVC Doğrama						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-71">
																			Mobilya						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-70">
																			Klima						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-69">
																			Isıcam						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-68">
																			Gömme Dolap						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-67">
																			Ebeveyn Banyosu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-65">
																			Bulaşık Makinesi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-64">
																			Balkon						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-63">
																			Amerikan Kapı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-62">
																			Alarm (Hırsız)						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-61">
																			Şofben						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-59">
																			Çamaşır Kurutma Makinesi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-58">
																			Termosifon						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-56">
																			Seramik Zemin						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-55">
																			Mutfak Doğalgazı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-54">
																			Marley						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-52">
																			Intercom Sistemi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-51">
																			Giyinme Odası						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-49">
																			Boyalı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-48">
																			Asansör						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-47">
																			Alüminyum Doğrama						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-46">
																			Akıllı Ev						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-45">
																			Çelik Kapı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-44">
																			Yüz Tanıma &amp; Parmak İzi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-43">
																			Teras						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-42">
																			Parke Zemin						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-41">
																			Mutfak (Laminat)						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-40">
																			Laminat Zemin						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-39">
																			Kartonpiyer						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-38">
																			Hilton Banyo						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-37">
																			Fırın						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-36">
																			Duvar Kağıdı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-35">
																			Beyaz Eşya						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-34">
																			Ankastre Fırın						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-33">
																			Alaturka Tuvalet						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-31">
																			Ahşap Doğrama						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-30">
																			Çamaşır Odası						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-29">
																			Wi-Fi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-28">
																			Spot Aydınlatma						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-27">
																			Panjur						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-26">
																			Mutfak (Ankastre)						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-25">
																			Küvet						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-24">
																			Jakuzi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-23">
																			Görüntülü Diafon						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-22">
																			Fiber İnternet						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-21">
																			Buzdolabı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-20">
																			Barbekü						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-19">
																			Amerikan Mutfak						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-17">
																			Alarm (Yangın)						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="6-16">
																			ADSL						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">Dış Özellikler</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-102">
																			Yüzme Havuzu (Açık)						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-101">
																			Su Deposu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-100">
																			Sauna						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-99">
																			Kreş						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-98">
																			Kablo TV						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-97">
																			Hamam						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-96">
																			Yangın Merdiveni						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-95">
																			Spor Alanı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-94">
																			Oyun Parkı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-93">
																			Kapıcı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-92">
																			Jeneratör						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-91">
																			Güvenlik						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-90">
																			Uydu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-89">
																			Siding						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-88">
																			Otopark						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-87">
																			Kapalı Garaj						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-86">
																			Isı Yalıtım						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-85">
																			Buhar Odası						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-84">
																			Yüzme Havuzu (Kapalı)						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-83">
																			Tenis Kortu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-82">
																			Ses Yalıtımı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-81">
																			Müstakil Havuzlu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-80">
																			Kamera Sistemi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-79">
																			Hidrofor						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="9-18">
																			Asansör						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">Muhit</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-124">
																			İlkokul-Ortaokul						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-123">
																			Sağlık Ocağı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-122">
																			Lise						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-121">
																			Fuar						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-120">
																			Cemevi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-119">
																			Üniversite						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-118">
																			Polis Merkezi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-117">
																			Kilise						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-116">
																			Eğlence Merkezi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-115">
																			Cami						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-114">
																			Şehir Merkezi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-113">
																			Spor Salonu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-112">
																			Park						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-111">
																			Havra						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-110">
																			Eczane						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-109">
																			Belediye						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-108">
																			İtfaiye						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-107">
																			Semt Pazarı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-106">
																			Market						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-105">
																			Hastane						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-104">
																			Denize Sıfır						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="10-103">
																			Alışveriş Merkezi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">Ulaşım</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-144">
																			İskele						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-143">
																			Teleferik						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-142">
																			Minibüs						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-141">
																			Havaalanı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-140">
																			Cadde						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-139">
																			Troleybüs						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-138">
																			TEM						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-137">
																			Metrobüs						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-136">
																			E-5						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-135">
																			Boğaz Köprüleri						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-134">
																			Tren İstasyonu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-133">
																			Sahil						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-132">
																			Metro						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-131">
																			Dolmuş						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-130">
																			Avrasya Tüneli						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-129">
																			Tramvay						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-128">
																			Otobüs Durağı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-127">
																			Marmaray						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-126">
																			Deniz Otobüsü						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="11-125">
																			Anayol						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">Manzara</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-152">
																			Göl						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-151">
																			Şehir						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-150">
																			Doğa						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-149">
																			Park &amp; Yeşil Alan						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-147">
																			Deniz						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-146">
																			Havuz						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="12-145">
																			Boğaz						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">Konut Tipi</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-167">
																			Ters Dubleks						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-166">
																			Garaj / Dükkan Üstü						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-165">
																			Bahçe Katı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-164">
																			Çatı Dubleksi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-163">
																			Müstakil Girişli						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-162">
																			Forleks						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-161">
																			Bahçe Dubleksi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-160">
																			Zemin Kat						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-159">
																			Kat Dubleksi						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-158">
																			En Üst Kat						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-157">
																			Ara Kat Dubleks						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-156">
																			Tripleks						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-155">
																			Giriş Katı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-154">
																			Bahçeli						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="13-153">
																			Ara Kat						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>

													<div class="card mb-4 bg-light">
														<div class="card-header">Engelliye Uygun</div>
														<div class="card-body p-2">
															<div class="row">
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-180">
																			Tuvalet						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-179">
																			Oda Kapısı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-178">
																			Geniş Koridor						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-177">
																			Tutamak / Korkuluk						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-176">
																			Mutfak						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-175">
																			Banyo						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-174">
																			Priz / Elektrik Anahtarı						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-173">
																			Merdiven						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-172">
																			Asansör						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-171">
																			Yüzme Havuzu						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-170">
																			Park						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-169">
																			Giriş / Rampa						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->
																<div class="col-lg-4">
																	<div class="form-check mx-sm-2">
																		<label class="form-check-label">
																			<input name="ozellik[]" type="checkbox" class="form-check-input " value="14-168">
																			Araç Park Yeri						<i class="input-helper"></i>
																		</label>
																	</div>
																</div><!-- /.col-lg-6 -->

															</div>
														</div>
													</div>
												</div>
											</div>

										</div>

										<div class="tab-pane fade" id="seo-ayarlari" role="tabpanel" aria-labelledby="contact-tab-vertical">

											<div class="form-group">
												<label for="maxlength-textarea">SEO Açıklama (Description)</label>
												<textarea id="maxlength-textarea" name="description"  class="form-control" maxlength="260" rows="2"></textarea>
											</div>
											<div class="form-group">
												<label for="tags">SEO Kelimeler (Keywords) <small>(Kelimenin sonuna virgül koyunuz)</small></label>
												<input name="keywords" id="tags" value="" />
											</div>

										</div>
									</div>
								</div>

								<div class="col-3"></div>
								<div class="col-9">
									<button type="submit" name="emlak_ekle" class="btn btn-primary btn-icon-text btn-sm mt-3">
										<i class="mdi mdi-file-check btn-icon-prepend"></i>
										KAYDET
									</button>
								</div>						
							</div>						

						</form>
					</div>
				</div>
			</div>

		</div>

		<script type="text/javascript">
			$('#area_div').hide();
			$('#space_div').hide();
			$('#office_kind_div').hide();
			$('#number_of_floors_div').hide();
			$('#located_on_the_floor_div').hide();
			$('#payment_method').hide();
			$('#mortgage').hide();
			$('#region_div').hide();
			$('#settlement_div').hide();
			$('#hashtag_div').hide();

			$('#realty_kind').on("change", function(e) {
				var realty_kind = $(this).val();
				if (realty_kind == 1) {
					$('#mortgage').fadeIn('slow');
					$('#payment_method').fadeOut('slow');
				} else if (realty_kind == 2) {
					$('#mortgage').fadeOut('slow');
					$('#payment_method').fadeIn('slow');
				}

			});

			$('#realty_type').on("change", function(e) {
				var realty_type = $(this).val();

				if (realty_type == 1 || realty_type == 2 || realty_type == 3) {
					$('#rooms_div').show();
					$('#number_of_floors_div').show();
					$('#located_on_the_floor_div').show();
					$('#area_div').show();
					$('#office_kind_div').hide();
					$('#space_div').hide();
					$('#settlement_div').hide();
					$('#square_div').html('(m<sup>2</sup>)');
				}
				else if (realty_type == 4) {
					$('#rooms_div').show();
					$('#space_div').show();
					$('#number_of_floors_div').hide();
					$('#located_on_the_floor_div').hide();
					$('#office_kind_div').hide();
					$('#settlement_div').hide();
					$('#square').html('(m<sup>2</sup>)');

				} else if (realty_type == 5) {

					$('#space_div').show();
					$('#office_kind_div').hide();
					$('#rooms_div').hide();
					$('#number_of_floors_div').hide();
					$('#located_on_the_floor_div').hide();
					$('#settlement_div').hide();
					$('#square').html('(m<sup>2</sup>)');

				} else if (realty_type == 6) {

					$('#office_kind_div').show();
					$('#rooms_div').show();
					$('#area').show();
					$('#space_div').hide();
					$('#number_of_floors_div').hide();
					$('#located_on_the_floor_div').hide();
					$('#settlement_div').hide();
					$('#square').html('(m<sup>2</sup>)');

				} else if (realty_type == 8) {

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


		</script>


		<script type="text/javascript">
			$(document).ready(function(e) {
				$('#secenek').bind('change', secenekGetir);
			});
			function secenekGetir()
			{
				var id		=$(this).val();	
				var ozellik	=$("#ozellik").val();
				var dil		=$("#dil").val();
				$.ajax({
					type: 'post',
					url: 'data/secenek.php',
					data:{"id":id,"ozellik":ozellik,"dil":dil},
					success: function(result) 
					{
						$('#secyaz').html(result);
					}
				});
			}

			$('#secenek').ready(function(){
				var id 		= $("#secenek").val();
				var ozellik	= $("#ozellik").val();
				var dil		= $("#dil").val();
				if(id != 0)
				{
					$.ajax({
						type: 'post',
						url: 'data/secenek.php',
						data:{"id":id,"ozellik":ozellik,"dil":dil},
						success: function(result) 
						{
							$('#secyaz').html(result);
						}
					});
				}
				else
				{
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
				var ilceid=$("#ilceid").val();
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
			function emlakResimSirala(resimID,sira){

				$.ajax({
					type: "post",
					url: "/tema/genel/ajax/ajax.php",
					data: {
						"resim_id": resimID,
						"sira": sira,
						'type':'emlakResimSirala'
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
				var ilceid=$("#ilceid").val();
				var semtid=$("#semtid").val();
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
							setTimeout(function() { semtleriGetir(); }, 500);
						}
					});
				} else {
					$("#ilce").html('<option value="0">İlçe Seçiniz</option>');
				}
			});
		</script>


	</div>