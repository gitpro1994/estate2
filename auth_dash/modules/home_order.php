<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<div class="page-title mt-0 mb-0">
				<h3><?= translate('sort_of_home_modules') ?></h3>
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
						<li><a href="#"><?= translate('site_configuration'); ?></a></li>
						<li class="active"><a href="#"><?= translate('sort_of_home_modules') ?></a></li>
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
					<div class="row">
						<div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
							<div class="card">
								<div class="card-body" id="sortable">
									<h4 class="card-title"><?= translate('sort_of_home_modules') ?></h4>
									<?php 
									$sel = "SELECT * FROM home_order ORDER BY order_no ASC";
									$qry = mysqli_query($conn,$sel);
									while ($bax = mysqli_fetch_array($qry)) {
									 ?>									 
									<div class="card rounded border mb-2" id="item-<?= $bax['id'] ?>">
										<div class="card-body p-3 secili">
											<div class="media">
												<i class="mdi mdi-file-outline icon-sm align-self-center mr-3"></i>
												<div class="media-body">
													<h6 class="mb-1"><?= $bax['module_info'] ?></h6>
													<p class="mb-0 text-muted"><?= translate('in_homepage') ?> <?= translate($bax['module_info']) ?> <?= translate('area') ?></p>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
.secili{
	cursor:move;
}
</style>
<script src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#sortable").sortable({
		revert: true,
		handle: ".secili",
		stop: function(event, ui){
			var data = $(this).sortable('serialize');
			
			$.ajax({
				type: "POST",
				dataType: "json",
				data: data,
				url: "core/data/control.php?home_order=orderable",
				success: function(msg){
					if(msg.sorguMsj == "Yeniləndi")
					{
						$.toast({
						  heading: 'Uğurlu!',
						  text: msg.sorguMsj,
						  showHideTransition: 'slide',
						  icon: 'success',
						  loaderBg: '#fff',
						  position: 'top-right'
						})
					}
					if(msg.sorguMsj == "Xəta baş verdi")
					{
						$.toast({
						  heading: 'Xəta',
						  text: msg.sorguMsj,
						  showHideTransition: 'slide',
						  icon: 'error',
						  loaderBg: '#fff',
						  position: 'top-right'
						})
					}
				}				
			});
		}
	});
	$("#sortable").disableSelection();
});
</script>