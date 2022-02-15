<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
		<div class="page-title mt-0 mb-0">
			<h3><?= translate('language_list') ?></h3>
			<div class="crumbs">
				<ul id="breadcrumbs" class="breadcrumb">
					<li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
					<li><a href="#"><?= translate('language_configuration') ?></a></li>
					<li><a href="<?= base_url() ?>/language_list"><?= translate('language_edit') ?></a></li>
					<li class="active"><a href="#"><?= translate($_GET['lang']) ?></a></li>
				</ul>
			</div>
		</div>
      <div class="col col-auto mt-5 d-inline-block float-right">
        <label class="float-right text-white badge badge-danger ml-1">
            <big><?= translate('your_device'); ?>: <?= user_brauzer($_SERVER['HTTP_USER_AGENT']); ?></big>
        </label> 
        <label class="badge badge-secondary m-t-10"><?= translate('your_ip') ?> : <big><b><?= getIP(); ?></b></big></label> 
        <label class="badge badge-dark m-t-10"><?= translate('last_visited_page'); ?> : <big><b><?= user_data('last_visited_page',$_SESSION['loggedin_id']) ?></b></big></label>
      </div>
    </div>
	<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
	    <div class="card mt-5">
			<div class="card-body">
				<h4 class="card-title"><?= translate("edit_the_words"); ?></h4>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="editable-form" class="table table-bordered user-list">
								<thead>
									<tr>
										<th style="width:250px;"><?= translate('key') ?></th>
										<th><?=	translate('explanation') ?></th>
										<th style="width:70px;"><?= translate('operation') ?></th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$lang = clean($_GET['lang']);
									$list = "SELECT `id`, `word`, `$lang` FROM `languages`";
									$exec = mysqli_query($conn,$list);
									$num  = @mysqli_num_rows($exec);
									// dd($num);
									$s = 1;
									// if ($num > 0) {
										while($ba = mysqli_fetch_array($exec)){
									 ?>
									<tr>
										<td class="uneditable" style="word-break: break-all;"><?= $ba['word'] ?></td>
										<td>
											<input type="text" name="text" id="text<?= $ba['id'] ?>" value="<?=  @$ba[$lang]   ?>" onchange="saveData(event,'<?= $ba['word'] ?>')">
											<span style="display:none"><?= $ba[$lang]  ?></span>
										</td>
										<td class="text-center"><a href="../del_word/<?= $ba['id'] ?>/<?= $_GET['lang'] ?>" class="btn btn-inverse-danger btn-sm popconfirm" title="" data-original-title="Sil"><i class="ti-trash"></i></a></td>													
									</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

<div class="loader" style="display: none">
    <div class="loading"><?= translate('please_wait'); ?></div>
</div>
<script>
function iformat(icon) {
    var originalOption = icon.element;
    return $('<span><i class="flag-icon ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '</span>');
}
$('.icons_select2').select2({
    width: "100%",
    templateSelection: iformat,
    templateResult: iformat,
    allowHtml: true
});
$(function() {
$('#editable-form').DataTable({
  "aLengthMenu": [
	[5, 10, 15, -1],
	[5, 10, 15, "Tümü"]
  ],
  "iDisplayLength": 10,
  "language": {
		"url":"../assets/js/Azerbaijan.php"
	}
});

$('#order-listing').each(function() {
	var datatable = $(this);
	var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
	search_input.attr('placeholder', 'Search');
	search_input.removeClass('form-control-sm');
	var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
	length_sel.removeClass('form-control-sm');
});
});
function saveData(event,key){
	var value = $('#'+event.target.id).val();
	console.log(value);
	$('.loader').show();	
	$.ajax({
       url: '../core/data/update_word.php',
       type: 'post',
       dataType: "json",
       data: {
           	'key': key,
			'value': value,
			'sitedilchange':"true",
			'dil_id':"<?= $lang; ?>"
       },
       success: function(msj){
                     if(msj.sorguMsj == "Yeniləndi")
                     {
                     	$('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: msj.sorguMsj,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                     if(msj.sorguMsj == "Xəta baş verdi")
                     {
                     	$('.loader').hide();
                        $.toast({
                          heading: 'Xəta',
                          text: msj.sorguMsj,
                          showHideTransition: 'slide',
                          icon: 'error',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                  }  
   });
}
</script>