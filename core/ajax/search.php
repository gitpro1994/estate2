<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");

  $city        = clean($_POST['city']);
  $menzil_type = clean($_POST['menzil_type']);
  $keyword     = clean($_POST['keyword']);
  
   $sel = "
    SELECT a.id AS ads_id,
    a.kind_id AS ads_kind_id,
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
    WHERE a.address LIKE '%$keyword%' 
    AND a.city_id LIKE '%$city%'
   -- GROUP BY a.id 
    ORDER BY a.id 
    DESC LIMIT 100
    ";
    $run = mysqli_query($conn,$sel);
    while ($nn = mysqli_fetch_array($run)) 
    {
        $images_all_listings = $nn['ads_images'];
        $image_explode       = explode(",", $images_all_listings); 
        $wish = (wish($_SESSION['unique_session'],$nn['ads_id'])) ? 'fa fa-heart' : 'flaticon-heart';
        $html = '';
       	$rs =  ($nn['ads_kind_id']==1) ? 'for-sell' : 'for-rent'
 ?>

<?php 
$html  = '<div class="col-xl-4 col-lg-6 col-md-6 '.$rs.' ">';
$html .= '<div class="property-box2 fadeInUp" data-wow-delay=".3s">';
$html .= '<div class="item-img">';
$html .= '<a href="'.site_url().'detail/'.$nn['ads_sef_url'].'"><img src="'.site_url().'uploads/'. $image_explode[0] .'" alt="blog" style="height: 330px; width:100%"></a>';
/*icine azarim telefon sondu zaryatqasi bitirmis xeberim yox imis e bir dayanda  zulum*/
$html .= '<div class="item-category-box1">';
$html .= '<div class="item-category">'.$nn['kind_name'].'</div></div><div class="rtcl-listing-badge-wrap">';
          
          <?php if($nn['ads_kind_id']==1 AND $nn['ads_mortgage']!=NULL){ ?>
                    <?php if ($nn['ads_mortgage']==0) { ?>
                        <span class="badge rtcl-badge-featured" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="<?= translate('mortgage') ?>"><i class="fa fa-percent"></i></span>
                   <?php }elseif ($nn['ads_mortgage']==1) { ?>
                        <span class="badge rtcl-badge-_bump_up" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="<?= translate('khupchali') ?>"><i class="fa fa-file"></i></span>
                    <?php }else{ ?>

                    <?php } ?>

                <?php } 

                $val = ($bax['ads_kind_id'] == 1) ? 'satılır' : 'kirayə verilir';?>
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
            <div class="item-category10"><a href="types/<?= $nn['rt_seo_link'] ?>"><?= $nn['type_name'] ?></a></div>
            <div class="item-content">
                <div class="verified-area">
                    <p class="item-title">
                        <a href="<?= site_url() ?>detail/<?= $nn['ads_sef_url'] ?>">
                        <?= $nn['city_name'] . ' şəhərində ' . $nn["ads_area"] . ' m² - ' . $nn['type_name'] . ' ' . $val ?>
                        </a>
                    </p>
                </div>
                <div class="location-area mt-4"><i class="flaticon-maps-and-flags"></i><?= $nn['city_name'] ?> <?= (!empty($nn['region_name'])) ? ',' : '' ?> <?= $nn['region_name'] ?></div>
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
<?php  
 } 

}
else
{
	include_once "index.html";
}
?>
