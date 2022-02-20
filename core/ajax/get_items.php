<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
define('BASEPATH', true);
include_once "../../core/config/database.php";
include_once "../../core/helpers/general_helper.php";
$row = 0;
if(isset($_POST['row'])){
   $row      = mysqli_real_escape_string($conn,$_POST['row']);
   $kind_adi = clean($_POST['kind_adi']);
   $design = clean($_POST['design_type']);
   
}
$rowperpage = 3;

// selecting posts
$query = 'SELECT * FROM ads limit '.$row.','.$rowperpage;

$result = mysqli_query($conn,$query);
$result_vert = mysqli_query($conn,$query);

$html = '';

if($design == 'horizontal')
{
	while($row = mysqli_fetch_array($result)){
	  $id = $row['id'];  
	  // Creating HTML structure 
	  $html .= '
	  					<div class="col-lg-6 col-md-6 items">
				   <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
				      <div class="item-img">
				         <a href="single-listing1.html"><img src="'. site_url() .'/assets/img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
				         <div class="item-category-box1">
				            <div class="item-category">For Rent</div>
				         </div>
				         <div class="rent-price">
				            <div class="item-price">₼ '. $row["price"] .'</div>
				         </div>
				         <div class="react-icon">
				            <ul>
				               <li>
				                  <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
				                     title="'. translate('favourite') .'">
				                  <i class="flaticon-heart"></i>
				                  </a>
				               </li>
				              
				               <li>
				                  <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
				                     title="'. translate('mortgage') .'">
				                  <i class="fa fa-percent"></i>
				                  </a>
				               </li>
				              
				               <li>
				                  <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
				                     title="'. translate("chixarish") .'">
				                  <i class="fa fa-file"></i>
				                  </a>
				               </li>
				            </ul>
				         </div>
				      </div>
				      <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
				      <div class="item-content">
				         <div class="verified-area">
				            <h3 class="item-title"><a href="single-listing1.html">Family House For Rent</a></h3>
				         </div>
				         <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
				         <div class="item-categoery3">
				            <ul>
				               <li><i class="flaticon-bed"></i>Beds: 03</li>
				               <li><i class="flaticon-shower"></i>Baths: 02</li>
				               <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
				            </ul>
				         </div>
				      </div>
				   </div>
				</div>

	  ';
	  }
	}
  else
  {
  	while($row1 = mysqli_fetch_array($result_vert)){
	  $id = $row1['id'];  
	  // Creating HTML structure 
	  $html .= '
  					<div class="col-lg-6 col-md-6 vertical">
			   <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
			      <div class="item-img">
			         <a href="single-listing1.html"><img src="'. site_url() .'/assets/img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
			         <div class="item-category-box1">
			            <div class="item-category">For Rent</div>
			         </div>
			         <div class="rent-price">
			            <div class="item-price">₼ '. $row1["price"] .'</div>
			         </div>
			         <div class="react-icon">
			            <ul>
			               <li>
			                  <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
			                     title="'. translate('favourite') .'">
			                  <i class="flaticon-heart"></i>
			                  </a>
			               </li>
			              
			               <li>
			                  <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
			                     title="'. translate('mortgage') .'">
			                  <i class="fa fa-percent"></i>
			                  </a>
			               </li>
			              
			               <li>
			                  <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
			                     title="'. translate("chixarish") .'">
			                  <i class="fa fa-file"></i>
			                  </a>
			               </li>
			            </ul>
			         </div>
			      </div>
			      <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
			      <div class="item-content">
			         <div class="verified-area">
			            <h3 class="item-title"><a href="single-listing1.html">Family House For Rent</a></h3>
			         </div>
			         <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
			         <div class="item-categoery3">
			            <ul>
			               <li><i class="flaticon-bed"></i>Beds: 03</li>
			               <li><i class="flaticon-shower"></i>Baths: 02</li>
			               <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
			            </ul>
			         </div>
			      </div>
			   </div>
			</div>

  ';
  }
  

}

echo $html;

}
 ?>