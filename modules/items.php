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
		
		$sel = "
			SELECT a.id AS ads_id,
	        a.rooms AS ads_rooms,
	        a.kind_id AS ads_kind_id,
	        a.area AS ads_area,
	        a.floor_no AS ads_floor_no,
	        a.building_floor_no AS ads_building_floor_no,
	        a.price AS ads_price,
	        a.payment_method AS ads_payment_method,
	        a.mortgage AS ads_mortgage,
	        a.address AS ads_address,
	        a.images AS ads_images,
	        a.status AS ads_status,
	        a.end_date AS ads_end_date,
	        a.created_at AS ads_created_at,
	        a.updated_at AS ads_updated_at,
	        a.deleted_at AS ads_deleted_at,
	        a.sef_url AS ads_sef_url,
	        a.seen AS ads_seen,
	        c.city_name,
	        c.seo_link as city_seo_link,
	        c.status as city_status,
	        r.region_name,
	        r.seo_link as region_seo_link,
	        r.status as region_status,
	        rk.kind_name,
	        rk.seo_link as rk_seo_link,
	        rk.status as rk_status,
	        rt.type_name,
	        rt.seo_link as rt_seo_link,
	        rt.status as rt_status
	        FROM ads AS a 
	        LEFT JOIN cities AS c ON a.city_id=c.id 
	        LEFT JOIN regions AS r ON a.regions=r.id 
	        LEFT JOIN realty_kinds AS rk ON a.kind_id=rk.id
	        LEFT JOIN realty_types AS rt ON a.type_id=rt.id 
			WHERE a.status=2 AND a.kind_id='".$bax['id']."' 
			ORDER BY a.id DESC";
		$run = mysqli_query($conn,$sel);
		$count_r = mysqli_num_rows($run);
	}
	else
	{
		$sel = "
		SELECT a.id AS ads_id,
        a.rooms AS ads_rooms,
        a.area AS ads_area,
        a.floor_no AS ads_floor_no,
        a.building_floor_no AS ads_building_floor_no,
        a.price AS ads_price,
        a.payment_method AS ads_payment_method,
        a.mortgage AS ads_mortgage,
        a.address AS ads_address,
        a.images AS ads_images,
        a.status AS ads_status,
        a.end_date AS ads_end_date,
        a.created_at AS ads_created_at,
        a.updated_at AS ads_updated_at,
        a.deleted_at AS ads_deleted_at,
        a.sef_url AS ads_sef_url,
        a.seen AS ads_seen,
        c.city_name,
        c.seo_link as city_seo_link,
        c.status as city_status,
        r.region_name,
        r.seo_link as region_seo_link,
        r.status as region_status,
        rk.kind_name,
        rk.seo_link as rk_seo_link,
        rk.status as rk_status,
        rt.type_name,
        rt.seo_link as rt_seo_link,
        rt.status as rt_status
        FROM ads AS a 
        LEFT JOIN cities AS c ON a.city_id=c.id 
        LEFT JOIN regions AS r ON a.regions=r.id 
        LEFT JOIN realty_kinds AS rk ON a.kind_id=rk.id
        LEFT JOIN realty_types AS rt ON a.type_id=rt.id 
		WHERE a.status=2  
		ORDER BY a.id DESC
		";
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
						$images_listings = $nn['ads_images'];
						$image_listing = explode(',', $images_listings);
						$wish = (wish($_SESSION['unique_session'],$nn['ads_id'])) ? 'fa fa-heart' : 'flaticon-heart';
					?>
						<div class="col-lg-4 col-md-6">
							<div class="property-box2 fadeInUp" data-wow-delay=".3s">
                                <div class="item-img">
                                    <a href="<?= site_url() ?>detail/<?= $nn['ads_sef_url'] ?>"><img src="<?= site_url() ?>uploads/<?= $image_listing[0] ?>" alt="blog" style="height: 330px; width:100%"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category"><?= $nn['kind_name'] ?></div>
                                    </div>
                                    <div class="rtcl-listing-badge-wrap">
                                    <?php if($nn['ads_kind_id']==1 AND $nn['ads_mortgage']!=NULL){ ?>
                                        <?php if ($nn['ads_mortgage']==0) { ?>
                                            <span class="badge rtcl-badge-featured" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="<?= translate('mortgage') ?>"><i class="fa fa-percent"></i></span>
                                       <?php }elseif ($nn['ads_mortgage']==1) { ?>
                                            <span class="badge rtcl-badge-_bump_up" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="<?= translate('khupchali') ?>"><i class="fa fa-file"></i></span>
                                        <?php }else{ ?>

                                        <?php } ?>

                                    <?php } ?>
                                     <?php if($nn['ads_payment_method']=="1"){ echo '<span class="badge rtcl-badge-_top">'.translate('monthly').'</span>'; }elseif($nn['ads_payment_method']=="0"){ echo '<span class="badge rtcl-badge-_top">'.translate('daily').'</span>'; } ?>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">₼ <?= $nn['ads_price'] ?> <?php if($nn['ads_payment_method']=="1"){ echo '<span><i>/</i>'.translate('monthly').'</span>'; }elseif($nn['ads_payment_method']=="0"){ echo '<span><i>/</i>'.translate('daily').'</span>'; } ?></div>
                                    </div>
                                    <div class="react-icon">
                                        <ul>
                                            <li>
                                                <a data-id="<?= $nn['ads_id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?= translate('favourite') ?>" class="add_favourite">
                                                    <i class="<?= $wish; ?>"></i>
                                                </a>
                                            </li>                                           
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
                                            <li><i class="flaticon-bed"></i><?= translate('room') ?>: <?= $nn['ads_rooms'] ?></li>
                                            <li><i class="flaticon-two-overlapping-square"></i><?= $nn['ads_area'] ?> m²</li>
                                            <li><i class="fas fa-eye"></i><?= $nn['ads_seen'] ?></li>
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