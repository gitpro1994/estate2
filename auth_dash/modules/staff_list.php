<div class="main-panel">
<div class="content-wrapper">
   <div class="page-header">
      <div class="page-title mt-0 mb-0">
         <h3><?= translate('staff_list') ?></h3>
         <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
               <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
               <li><a href="#"><?= translate('staff') ?></a></li>
               <li class="active"><a href="#"><?= translate('staff_list') ?></a></li>
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
   <div class="card">
      <form action="core/data/control.php" method="POST">
         <div class="card-body">
            <div class="row mb-3">
               <div class="col-lg-12">
                  <div class="btn-toolbar" role="toolbar">
                     <a href="<?= base_url() ?>/staff_add" class="btn btn-primary btn-sm mr-1">
                        <i class="icon-plus font-12"></i> <?= translate("add_new_staff") ?>				
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="table-responsive">
                     <table id="order-listingg" class="table table-bordered table-hover">
                        <thead class="headbg">
                           <tr>
                              <th class="noshort" style="width:20px;" data-toggle="tooltip" data-placement="top" title="<?= translate('select_all') ?>">
                                 <input id="checkbox-4" class="select-all checkbox-custom" type="checkbox" style="width:100px;">
                                 <label for="checkbox-4" class="checkbox-custom-label mb-0"><span class="checktext"></span></label>
                              </th>
                              <th style="width:30px;">ID</th>
                              <th><?= translate('name') ?> <?= translate('surname') ?></th>
                              <th style="width:70px;"><?= translate('position') ?></th>
                              <th style="width:70px;"><?= translate('home') ?></th>
                              <th style="width:70px;"><?= translate('status') ?></th>
                              <th style="width:115px;"><?= translate('operation') ?></th>
                           </tr>
                        </thead>
                        <tbody id="sortable"></tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
<script>
	$(document).ready(function(){
		var dataTable=$('#order-listingg').DataTable({
			"processing": true,
			"serverSide":true,
			"ajax":{
				url:"core/data/staffs.php",
				type:"post"
			},
			"order": [[ 1, "asc" ]],
			"aLengthMenu": [
				[5, 10, 15, 5],
				[5, 10, 15, "T??m??"]
			],
			"columnDefs": [
				{ "orderable": false, "targets": [0, 6] },
				{ "targets": [ 1 ],"visible": false },
				{  "className": "secili", targets: [1, 2] },
				{  "className": "secili text-center", targets: [3, 4] },
				{  "className": "text-center", targets: [5] }
			],
			"iDisplayLength": 10,
			"language": {
				"url":"assets/js/Azerbaijan.php"
			},
			"fnCreatedRow": function( nRow, aData, iDataIndex ) {
				$(nRow).attr('id', 'item-'+aData[1]);
			},
			"fnDrawCallback": function( oSettings ) {
			$(".popconfirm").popConfirm();
		    }
		});
		$('#order-listingg').on('click', 'tbody tr td.secili', function(event) {	
			$(this).closest("tr").find("td:eq(0)").find("input[type=checkbox]").trigger('click');
			if($(this).closest("tr").find("input[type=checkbox]").prop("checked")){
				$(this).closest("tr").addClass('highlight');
			}else{
				$(this).closest("tr").removeClass('highlight');
			}
		});
		$(".select-all").click(function () {
			$("input:checkbox").not(this).prop('checked', this.checked);

			if(this.checked){
				$("input:checkbox").not(this).closest("tr").addClass('highlight');
			}else{
				$("input:checkbox").not(this).closest("tr").removeClass('highlight');
			}			
		});
	});
</script>
</div> 
				
			