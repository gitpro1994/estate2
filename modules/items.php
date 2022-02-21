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
	if ($count != 0 AND $count == 1) 
	{
		$sel = "SELECT * FROM ads AS a INNER JOIN cities AS c ON a.city_id=c.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id WHERE a.kind_id='".$bax['id']."' ORDER BY a.id DESC LIMIT 100";
		$run = mysqli_query($conn,$sel);
		$run1 = mysqli_query($conn,$sel);
		$count_r = mysqli_num_rows($run);
	}
	else
	{
		$sel = "SELECT * FROM ads WHERE status=1";
		$run = mysqli_query($conn,$sel);
		$run1 = mysqli_query($conn,$sel);
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

<section class="grid-wrap3">
	<div class="container">
		<div class="row gutters-40">
			<div class="col-lg-4 widget-break-lg sidebar-widget">
				<div class="widget widget-advanced-search">
					<h3 class="widget-subtitle"><?= translate('advanced_search') ?></h3>
					<form action="https://radiustheme.com/demo/html/homlisti/index.html" class="map-forms map-form-style-2">
						<input type="text" class="form-control" placeholder="What are you looking for?">
						<div class="row">
							<div class="col-lg-12 pl-15 mb-0">
								<div class="rld-single-select">
									<select class="select single-select mr-0">
										<?php 
										$rk  = "SELECT * FROM realty_kinds WHERE status=1";
										$rkr = mysqli_query($conn,$rk);
										while ($bax = mysqli_fetch_array($rkr)) {
											?>
											<option value="<?= $bax['id'] ?>">
												<?= translate($bax['kind_name']) ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-lg-12 pl-15 mb-0">
								<div class="rld-single-select">
									<select class="select single-select mr-0">
										<?php 
										$rk  = "SELECT * FROM realty_types WHERE status=1";
										$rkr = mysqli_query($conn,$rk);
										while ($bax = mysqli_fetch_array($rkr)) {
											?>
											<option value="<?= $bax['id'] ?>">
												<?= translate($bax['type_name']) ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-lg-12 pl-15">
								<div class="rld-single-select">
									<select class="select single-select mr-0">
										<?php 
										$rk  = "SELECT * FROM cities WHERE status=1";
										$rkr = mysqli_query($conn,$rk);
										while ($bax = mysqli_fetch_array($rkr)) {
											?>
											<option value="<?= $bax['id'] ?>">
												<?= translate($bax['city_name']) ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</form>
					<div class="banner-search-wrap banner-search-wrap-2">
						<div class="rld-main-search rld-main-search3">
							<div class="filter-button">
								<a href="single-listing1.html" class="filter-btn1 search-btn"><?= translate('search') ?><i class="fas fa-search"></i></a>
							</div>
						</div>
						<!--/ End Search Form -->
					</div>
				</div>
				<div class="widget widget-listing-box1">
					<h3 class="widget-subtitle"><?= translate('latest_listings') ?></h3>
					<div class="widget-listing">
						<div class="item-img">
							<a href="single-listing1.html"><img src="<?= site_url() ?>/assets/img/blog/widget2.jpg" alt="widget" width="120" height="102"></a>
						</div>
						<div class="item-content">
							<h5 class="item-title"><a href="single-listing1.html">House Highland Ave  Los Angeles</a></h5>
							<div class="location-area"><i class="flaticon-maps-and-flags"></i>California</div>
							<div class="item-price">$3,000<span>/mo</span></div>
						</div>
					</div>
					<div class="widget-listing">
						<div class="item-img">
							<a href="single-listing1.html"><img src="<?= site_url() ?>/assets/img/blog/widget3.jpg" alt="widget" width="120" height="102"></a>
						</div>
						<div class="item-content">
							<h5 class="item-title"><a href="single-listing1.html">House Highland Ave  Los Angeles</a></h5>
							<div class="location-area"><i class="flaticon-maps-and-flags"></i>California</div>
							<div class="item-price">$1,200<span>/mo</span></div>
						</div>
					</div>
					<div class="widget-listing no-brd">
						<div class="item-img">
							<a href="single-listing1.html"><img src="<?= site_url() ?>/assets/img/blog/widget4.jpg" alt="widget" width="120" height="102"></a>
						</div>
						<div class="item-content">
							<h5 class="item-title"><a href="single-listing1.html">House Highland Ave  Los Angeles</a></h5>
							<div class="location-area"><i class="flaticon-maps-and-flags"></i>California</div>
							<div class="item-price">$1,900<span>/mo</span></div>
						</div>
					</div>
				</div>
				<div class="widget widget-post">
					<div class="item-img">
						<img src="<?= site_url() ?>/assets/img/blog/widget5.jpg" alt="widget" width="690" height="850">
						<div class="circle-shape">
							<span class="item-shape"></span>
						</div>
					</div>
					<div class="item-content">
						<h4 class="item-title">Find Your  Dream House</h4>
						<div class="item-price">$2,999</div>
						<div class="post-button"><a href="single-listing1.html" class="item-btn">Shop Now</a></div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="property-wrap-9">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12">
							<div class="item-shorting-box">
								<div class="shorting-title">
									<h4 class="item-title"><?= $count_r ?> <?= translate('search_results_found') ?></h4>
								</div>
								<div class="item-shorting-box-2">
									<div class="by-shorting">
										<div class="shorting"><?= translate('Sort_by') ?>:</div>
										<select class="select single-select mr-0">
											<option value="1"><?= translate('by_date') ?></option>
											<option value="2"><?= translate('cheap_firstly') ?></option>
											<option value="3"><?= translate('expensive_firstly') ?></option>
										</select>
									</div>
									<div class="grid-button">
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="listTab nav-link active" data-bs-toggle="tab" data-id="1" href="#mylisting"><i class="fas fa-th"></i></a>
											</li>
											<li class="nav-item">
												<a class="listTab nav-link" data-bs-toggle="tab" data-id="2" href="#reviews"><i class="fas fa-list-ul"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-style-1 tab-style-3">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="mylisting" role="tabpanel">
								<div class="row">
									<?php while($nn = mysqli_fetch_array($run)) { ?>
										<div class="col-lg-6 col-md-6">
											<div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
												<div class="item-img">
													<a href="single-listing1.html"><img src="<?= site_url() ?>/assets/img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
													<div class="item-category-box1">
														<div class="item-category">For Rent</div>
													</div>
													<div class="rent-price">
														<div class="item-price">$15,000<span><i>/</i>mo</span></div>
													</div>
													<div class="react-icon">
														<ul>
															<li>
																<a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
																title="Favourites">
																<i class="flaticon-heart"></i>
															</a>
														</li>
														<li>
															<a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
															title="Compare">
															<i class="flaticon-left-and-right-arrows"></i>
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
							<?php } ?>
						</div>

					</div>

					<div class="tab-pane fade" id="reviews" role="tabpanel">
						<div class="row">
						<?php while($bb = mysqli_fetch_array($run1)) { ?>
						<div class="col-lg-12">
							<div class="property-box2 property-box4 wow animated fadeInUp" data-wow-delay=".6s">
								<div class="item-img">
									<a href="single-listing1.html"><img src="<?= site_url() ?>/assets/img/blog/blog18.jpg" alt="blog" width="250" height="200"></a>
									<div class="item-category-box1">
										<div class="item-category">For Rent</div>
									</div>
								</div>
								<div class="item-content item-content-property">
									<div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
									<div class="react-icon react-icon-2">
										<ul>
											<li>
												<a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
												title="Favourites">
												<i class="flaticon-heart"></i>
											</a>
										</li>
										<li>
											<a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
											title="Compare">
											<i class="flaticon-left-and-right-arrows"></i>
										</a>
									</li>
								</ul>
							</div>
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
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>

<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->