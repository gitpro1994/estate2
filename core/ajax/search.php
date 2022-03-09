<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
	 define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");

  $city        = clean($_GET['city']);
  $menzil_type = clean($_GET['menzil_type']);
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
                        WHERE 
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

}
else
{
include_once "index.html";
}
 ?>
