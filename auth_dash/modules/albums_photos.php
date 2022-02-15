<?php 
	$id = clean($_GET['id']);
	if ($id==0) {
		redirect(base_url().'/album_list', 'refresh'); 
	    die();
   }
   	    $query     = "SELECT * FROM photo_albums WHERE id='".$id."'";
		$statement = mysqli_query($conn,$query);
		$bax       = mysqli_fetch_array($statement);
		$sekil =  "../assets/uploads/photo_gallery/".$bax['album_kapak'];
		$title = $bax['album_name'];
 ?>
<div class="main-panel">
	<div class="content-wrapper">							
	<div class="page-header">
		<div class="page-title mt-0 mb-0">
			<h3><?= translate('album_photos') ?></h3>
			<div class="crumbs">
				<ul id="breadcrumbs" class="breadcrumb">
					<li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
					<li><a href="#"><?= translate('photo_gallery') ?></a></li>
					<li><a href="<?= base_url() ?>/album_list">"<?=$title ?>"</a></li>
					<li class="active"><a href="#"><?= translate('album_photos') ?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php 
	$albom  = "SELECT * FROM photos WHERE albums_id='".$id."'";
	$albrun = mysqli_query($conn,$albom);
	$say    = mysqli_num_rows($albrun);
	
	 ?>
<div class="card">
	<form action="#" method="POST" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row mb-3">
				<div class="col-lg-12">
					<div class="btn-toolbar" role="toolbar">					
						<a href="" data-toggle="modal" data-target="#foto_ekle" data-backdrop="static" data-keyboard="false" class="btn btn-success btn-sm mr-1">
							<i class="icon-plus font-12"></i> <?= translate('add_new_photo') ?>
						</a>
				
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
					<h4 class="card-title mt-3">"<?=$title ?>" - <?= translate('gallery') ?></h4>
					<?php 
						if (isset($_POST['haberfoto_ekle'])) {
							extract($_POST);
							$error     =  array();
							$extension =  array("jpeg","jpg","png","gif");
							
							foreach($_FILES["resimler"]["tmp_name"] as $key => $tmp_name) {

							    $file_name      = $_FILES["resimler"]["name"][$key];
							    $uzanti         = @strtolower(end(explode(".",$file_name)));
				                $file_name      = "photo_gallery".rand().rand().rand().rand().".".$uzanti;
							    $file_tmp       = $_FILES["resimler"]["tmp_name"][$key];
							    $ext            = pathinfo($file_name,PATHINFO_EXTENSION);

							    $yeri           = '../assets/uploads/photo_gallery/photos/';


							    if(in_array($ext,$extension)) {
							        move_uploaded_file($file_tmp,$yeri.$file_name); 
				            		$insert = mysqli_query($conn,"INSERT INTO photos (photo_src,albums_id) VALUES ('".$file_name."','".$id."')"); 
							    }
							    else {
							        array_push($error,"$file_name, ");
							    }
							}
							
				            if($insert){ 
				               echo '
				                <div class="alert alert-success" role="alert">
                                   <b>ŞƏKİLLƏR MÜVƏFFƏQİYYƏTLƏ ƏLAVƏ EDİLDİ ...</b>
                                </div>
				               ';
				            }else{ 
				                $statusMsg = "Sorry, there was an error uploading your file."; 
				            } 
				        } 
						

						 ?>
					<div class="row portfolio-grid">
						<?php 
						if ($say!=0) {
						while ($show = mysqli_fetch_array($albrun)) {
						 ?>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-12">
							<figure class="proje_resim_box">
								
								
								<div class="proje_resim_delete">	
									<a class="popconfirm text-black" title="<?= translate('delete_photo') ?>" href="<?= base_url() ?>/del_photo/<?= $id; ?>/<?= $show['id']; ?>">
										<div class="tablemain_contents_ic_div_times" style="margin:0px; padding:0px; border:0px;">
											<i class="fa fa-trash" aria-hidden="true"></i>
										</div>
									</a>							
								</div>
								<img src="../../assets/uploads/photo_gallery/photos/<?=$show['photo_src'] ?>" style="height:170px;" alt="image">
							</figure>
						</div>
						
					<?php
					 } }else{ ?>

					 	<div class="col-12">
					 		<h2 style="color: red;"><?= translate('there_is_no_picture_in_the_gallery') ?></h2>
					 	</div>

					 <?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="foto_ekle" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header pb-1 pt-2" style="background:#38647A;">				
						<h5 class="modal-title d-inline-block text-white">Qalareyanıza Şəkil əlavə edin</h5>
						<button type="button" class="close p-0 m-1" data-dismiss="modal"><i class="fa fa-times-circle"></i></button>
					</div>
					
					<div class="modal-body">                
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="alert alert-warning" role="alert">
										Çox sayda şəkil seçə bilərsiniz. Şəkilləri seçdikdən sonra aşağıdakı YÜKLƏ düyməsini basın
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">													
									<div class="form-group">
									<label><?= translate('select_photo') ?></label>
										<input type="file" name="resimler[]" multiple class="file-upload-default">
										<div class="input-group col-xs-12">
											<input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="Şəkil fayllarını seçin">
											<span class="input-group-append">
												<button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_files') ?></button>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>											
					</div>
					<div class="modal-footer">
						<button name="haberfoto_ekle" class="button btn btn-primary p-2"><i class="fa fa-plus-circle"></i> <?= translate('upload') ?></button>
						<button type="button" class="button btn btn-default p-2" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?= translate('close') ?></button>				
					</div>
				</div>
			</div>
		</div>


	</form>
</div>
<script>
$(document).ready(function(){
	$("#sec").click(function(){
		$("input:checkbox").each(function(){		
			this.checked = true;		
		});
	});
	
	$("#birak").click(function(){
		$("input:checkbox").each(function(){		
			this.checked = false;		
		});
	});
});
</script>
 
</div>