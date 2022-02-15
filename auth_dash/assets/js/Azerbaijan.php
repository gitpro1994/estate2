<?php 
define('BASEPATH', true);
include_once "../../../core/config/database.php";
include_once "../../../core/helpers/general_helper.php";
 ?>
{
	"sDecimal":        ",",
	"sEmptyTable":     "<?= translate('there_is_no_information_in_the_table') ?>",
	"sInfo":           "_TOTAL_ nəticədən _START_ - _END_ arasındakı nəticələr göstərilir",
	"sInfoEmpty":      "<?= translate('there_is_no_result') ?>",
	"sInfoFiltered":   "(_MAX_ nəticə içərisində tapılıb)",
	"sInfoPostFix":    "",
	"sInfoThousands":  ".",
	"sLengthMenu":     "Səhifədə _MENU_ nəticə göstər",
	"sLoadingRecords": "<?= translate('loading') ?>...",
	"sProcessing":     "<?= translate('the_request_sending') ?>...",
	"sSearch":         "<?= translate('search') ?>:",
	"sZeroRecords":    "Uyğunlaşan nəticə tapılmadı",
	"oPaginate": {
		"sFirst":    "<?= translate('first') ?>",
		"sLast":     "<?= translate('last') ?>",
		"sNext":     "<?= translate('next') ?>",
		"sPrevious": "<?= translate('previous') ?>"
	},
	"oAria": {
		"sSortAscending":  ": artan sütun sıralamasını aktifleştir",
		"sSortDescending": ": azalan sütun soralamasını aktifleştir"
	}
}


