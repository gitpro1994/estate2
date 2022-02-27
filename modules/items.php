<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
if (isset($_GET['kind']))
{
	$var = clean($_GET['kind']);
	$select_kind = "SELECT * FROM realty_kinds WHERE seo_link='".$var."' AND status=1";
	$run_select = mysqli_query($conn,$select_kind);
	$bax = mysqli_fetch_array($run_select);
	$count = mysqli_num_rows($run_select);
	$kind_adi = ($count!=0) ? $bax['seo_link'] : 'all';
	if ($count != 0 AND $count == 1) 
	{
		$rowperpage = 5;

		// counting total number of ADS
		$allcount_query = "SELECT count(*) as allcount FROM ads WHERE kind_id='".$bax['id']."' AND status=1";
		$allcount_result = mysqli_query($conn,$allcount_query);
		$allcount_fetch = mysqli_fetch_array($allcount_result);
		$allcount = $allcount_fetch['allcount'];

		$sel = "SELECT * FROM ads AS a INNER JOIN cities AS c ON a.city_id=c.id LEFT JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id WHERE a.status=2 AND a.kind_id='".$bax['id']."' ORDER BY a.id DESC LIMIT 0,".$rowperpage."";
		$run = mysqli_query($conn,$sel);
		$count_r = mysqli_num_rows($run);
	}
	else
	{
		$sel = "SELECT * FROM ads AS a INNER JOIN cities AS c ON a.city_id=c.id LEFT JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id WHERE a.status=2  ORDER BY a.id DESC";
		$run = mysqli_query($conn,$sel);
		$count_r = mysqli_num_rows($run);
	}
	
}	
else
{
	echo "kind tapilmadi"; 
}

$title = settings('site_title');
$desc  = settings('seo_description');
$keyw  = settings('seo_keywords');
?>
<!-- START HEAD -->
<?php include_once "partials/head.php"; ?>
<!-- END HEAD -->

<!-- START TOPBAR -->
<?php include_once "partials/topbar.php"; ?>
<!-- END TOPBAR -->

<div class="breadcrumb-wrap breadcrumb-wrap-2">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><?= translate('home') ?></a></li>
				<li class="breadcrumb-item active" aria-current="page">
					<?= translate($var) ?>
				</li>
			</ol>
		</nav>
	</div>
</div>

<section class="grid-wrap1 grid-wrap2">
	<div class="container">


		<div class="row mt-5">
			<div class="col-lg-12">
				<div class="row justify-content-left">
					<?php while($nn = mysqli_fetch_array($run)){ 
						$images_listings = $nn['images'];
						$image_listing = explode(',', $images_listings);
						$wish = (wish($_SESSION['unique_session'],$nn[0])) ? 'fa fa-heart' : 'flaticon-heart';
					?>
						<div class="col-lg-4 col-md-6">
							<div class="property-box2 fadeInUp" data-wow-delay=".3s">
                                <div class="item-img">
                                    <a href="<?= site_url() ?>detail/<?= $nn['sef_url'] ?>"><img src="<?= site_url() ?>uploads/<?= $image_listing[0] ?>" alt="blog" width="100%" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category"><?= $nn['kind_name'] ?></div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">₼ <?= $nn['price'] ?> <?php if($nn['payment_method']=="1"){ echo '<span><i>/</i>'.translate('monthly').'</span>'; }elseif($nn['payment_method']=="0"){ echo '<span><i>/</i>'.translate('monthly').'</span>'; } ?></div>
                                    </div>
                                    <div class="react-icon">
                                        <ul>
                                            <li>
                                                <a data-id="<?= $nn[0] ?>" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?= translate('favourite') ?>" class="add_favourite">
                                                    <i class="<?= $wish; ?>"></i>
                                                </a>
                                            </li>
                                           
                                           <?php if($nn['kind_id']==1 AND $nn['mortgage']!=NULL){ ?>
                                            <?php if ($nn['mortgage']==0) { ?>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="<?= translate('mortgage') ?>">
                                                        <i class="fa fa-percent"></i>
                                                    </a>
                                                </li>
                                           <?php }elseif ($nn['mortgage']==1) { ?>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="<?= translate('chixarish') ?>">
                                                        <i class="fa fa-file"></i>
                                                    </a>
                                                </li>
                                            <?php }else{ ?>

                                            <?php } ?>
                                            <?php } ?>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-category10"><a href="single-listing1.html"><?= $nn['type_name'] ?></a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Ofis satilir</a></h3>
                                    </div>
                                    <div class="location-area"><i class="flaticon-maps-and-flags"></i><?= $nn['city_name'] ?> <?= (!empty($nn['region_name'])) ? ',' : '' ?> <?= $nn['region_name'] ?></div>
                                    <div class="item-categoery3">
                                        <ul>
                                            <li><i class="flaticon-bed"></i><?= translate('room') ?>: <?= $nn['rooms'] ?></li>
                                            <li><i class="flaticon-two-overlapping-square"></i><?= $nn['area'] ?> m²</li>
                                            <li><i class="fas fa-eye"></i><?= $nn['seen'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
</div>
</section>


<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			var position = $(window).scrollTop();
			var bottom   = $(document).height() - $(window).height();
		    	// console.log(position);
		    	if( position != bottom )
		    	{
		    		let listTab  =  $("a.active").data("id");
		    		if (listTab==1) 
		    		{
		    			$("#design").val('horizontal');
		    		}
		    		else
		    		{
		    			$("#design").val('vertical');
		    		}
		    		let design = $("#design").val();
		    		

		    		let kind_adi = $("#kind_adi").val();

		    var row      = Number($('#row').val());
		    var allcount = Number($('#all').val());
		    var rowperpage = 3;
		    row = row + rowperpage;
		    if(row <= allcount)
		    {
		    	$('#row').val(row);
		    	$.ajax({
		    		url: url+ 'core/ajax/get_items.php',
		    		type: 'post',
		    		data: {row:row,kind_adi:kind_adi,design_type:design},
		    		success: function(response)
		    		{

		    			$(".items:last").after(response).show().fadeIn("slow");

		    			$(".vertical:last").after(response).show().fadeIn("slow");

		    		}
		    	});
		    }
		}

	});

	});
	$( document ).ready(function() {

       const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
       });
      

     $(document).on('click', '.add_favourite', function(event) {
        let myClass = $(this).children('i').attr("class");
        let data_id = $(this).data("id");
        let url     = $("#base_url").val();
        
            var class_name = $(this).children('i').attr('class');
            var me = this;
             $.ajax({ 
                 url: url + '/core/ajax/add_favorite.php',
                 method: "POST",
                 data: { data_id:data_id,class_name:class_name },
                 success: function(data) {
                   parsed = JSON.parse(data);

                    if(parsed.status == 200)
                    { 
                         Toast.fire({
                           text: parsed.message,
                           icon: parsed.icon,
                           position: 'top-right'
                        });
                         if (parsed.action == "add") 
                         {
                            $(me).children("i").removeClass("flaticon-heart").addClass("fa fa-heart");
                            $(".item-count").html(parsed.all_count);
                            
                         }
                         else
                         {
                            $(me).children("i").removeClass("fa fa-heart").addClass("flaticon-heart");
                            $(".item-count").html(parsed.all_count);
                         }

                    }
                    else if(parsed.status == 204)
                    {
                       
                       Toast.fire({
                         text: parsed.message,
                         icon: 'error',
                         position: 'top-right'
                      });
                    }
                  
               }

            });
        


        
    });

});
</script>