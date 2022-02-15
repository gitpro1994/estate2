<div class="main-panel">
				<div class="content-wrapper">
								<div class="page-header">
	<div class="page-title mt-0 mb-0">
		<h3>Ziyarətçilər</h3>
		<div class="crumbs">
			<ul id="breadcrumbs" class="breadcrumb">
				<li><a href="index.html"><i class="icon-home menu-icon"></i></a></li>
				<li><a href="#">Digər</a></li>
				<li class="active"><a href="#">Ziyarətçilər</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="card">
	<form method="POST">
	<div class="card-body">
	
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table id="order-listingg" class="table table-bordered table-hover">
						<thead class="headbg">
							<tr>
								<th class="noshort" style="width:20px;" data-toggle="tooltip" data-placement="top" title="Hamısını Seç">
									<input id="checkbox-4" class="select-all checkbox-custom" type="checkbox" style="width:100px;">
									<label for="checkbox-4" class="checkbox-custom-label mb-0"><span class="checktext"></span></label>
								</th>
								<th><?= translate('visit_date') ?></th>
								<th><?= translate('ip_address') ?></th>
								<th><?= translate('visit_count') ?></th>
								<th><?= translate('country') ?></th>
								<th><?= translate('city') ?></th>
								<th><?= translate('flag') ?></th>
							</tr>
						</thead>
						<tbody></tbody>
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
				url:"core/data/visitors.php",
				type:"post"
			},
			"aLengthMenu": [
				[5, 10, 15, -1],
				[5, 10, 15, "Tümü"]
			],
			order:[[1,"desc"]],
			"columnDefs": [
				{ 
					"orderable": false, 
					"targets": [0, 4] 
				},
				{  "className": "secili", targets: [1, 2] },
				{  "className": "secili text-center", targets: [3] },
				{  "className": "text-center", targets: [4] }
			],
			"iDisplayLength": 10,
			"language": {
				"url":"assets/js/Azerbaijan.php"
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