<?php 
/**
 * @package      : KA Dashboard
 * @version      : v4.2
 * @developed by : Aghakarim Karimov Mahharam oghlu
 * @support      : aghakarim.karimov@gmail.com
 * @phone        : +994998812999
 * @system       : index.php
 * @copyright    : Aghakarim Karimov Mahharam oghlu
 */
 ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
		<div class="page-title mt-0 mb-0">
			<h3><?= translate('system_logs') ?></h3>
			<div class="crumbs">
				<ul id="breadcrumbs" class="breadcrumb">
					<li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
					<li class="active"><a href="#"><?= translate('system_logs') ?></a></li>
				</ul>
			</div>
		</div>
      <div class="col col-auto mt-5 d-inline-block float-right">
        <label class="float-right text-white badge badge-danger ml-1">
            <big><?= translate('your_device'); ?>: <?= user_brauzer($_SERVER['HTTP_USER_AGENT']); ?></big>
        </label> 
        <label class="badge badge-secondary m-t-10"><?= translate('your_ip') ?> : <big><b><?= getIP(); ?></b></big></label> 
        <label class="badge badge-dark m-t-10"><?= translate('last_visited_page'); ?> : <big><b><?= user_data('last_page',$_SESSION['loggedin_id']) ?></b></big></label>
      </div>
    </div>
<div class="col-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
					<div class="row">
						<div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
							<div class="card">
								<div class="card-body ui-sortable" id="sortable">
									<h4 class="card-title"><?= translate('system_logs') ?></h4>
									<?php												
									 $rowperpage = 10;

									 // counting total number of posts
									 $allcount_query = "SELECT count(*) as allcount FROM logs";
									 $allcount_result = mysqli_query($conn,$allcount_query);
									 $allcount_fetch = mysqli_fetch_array($allcount_result);
									 $allcount = $allcount_fetch['allcount'];

									 // select first 5 posts
									 $query = "SELECT * FROM logs ORDER BY id DESC LIMIT 0,$rowperpage ";
									 $result = mysqli_query($conn,$query);
									 if ($allcount!=0) {
									 while($row = mysqli_fetch_array($result)){

									   $id = $row['id'];
									   $title = $row['log_title'];
									   $content = $row['log_content'];
									   $shortcontent = substr($content, 0, 160)."...";
									   
									 ?>

									 	<div class="card rounded border mb-2 post" id="post_<?php echo $id; ?>" style="position: relative; left: 0px; top: 0px;">
										<div class="card-body p-3 secili">
											<div class="media">
												<i class="icon-pin menu-icon icon-sm align-self-center mr-3"></i>
												<div class="media-body">
													<h6 class="mb-1"><?= $title ?>  <span class="text-danger text-right"> ( <?= _d($row['log_date']).' - '.get_nicetime($row['log_date']) ?> )</span> </h6>
													<p class="mb-0 text-muted">
														<?= $row['log_content'] ?>												
													</p>
													
												</div>
											</div>
										</div>
									</div>
									 <?php } ?>

									 <input type="hidden" id="row" value="0">
									 <input type="hidden" id="all" value="<?php echo $allcount; ?>">
									<?php }else{ ?>
										<div class="alert alert-warning" role="alert"><?= translate('there_is_no_new_log_in_the_system') ?>.</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
