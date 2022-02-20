<?php 
$kinds = ['rent','sell'];
if (in_array($_GET['kind'],$kinds)) 
{
	$var = clean($_GET['kind']);
}	
else
{
	$var  = "Axtardığınız kateqoriyaya uyğun elan tapılmadı...";
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
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Listing</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="grid-wrap3">
            <div class="container">
                <div class="row gutters-40">
                    <div class="col-lg-4 widget-break-lg sidebar-widget">
                        <div class="widget widget-advanced-search">
                            <h3 class="widget-subtitle">Advanced Search</h3>
                            <form action="index.html" class="map-forms map-form-style-2">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                                <div class="row">
                                    <div class="col-lg-12 pl-15 mb-0">
                                        <div class="rld-single-select">
                                            <select class="select single-select mr-0" style="display: none;">
                                                <option value="1">Property Type</option>
                                                <option value="2">Family House</option>
                                                <option value="3">Apartment</option>
                                                <option value="3">Condo</option>
                                            </select>
                                            <div class="nice-select select single-select mr-0" tabindex="0">
                                            	<span class="current">Property Type</span>
                                            	<ul class="list">
                                            		<li data-value="1" class="option selected">Property Type</li>
                                            		<li data-value="2" class="option">Family House</li>
                                            		<li data-value="3" class="option">Apartment</li>
                                            		<li data-value="3" class="option">Condo</li>
                                            	</ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pl-15 mb-0">
                                        <div class="rld-single-select">
                                            <select class="select single-select mr-0" style="display: none;">
                                                <option value="1">All Categories</option>
                                                <option value="2">Rent</option>
                                                <option value="3">Sell</option>
                                                <option value="3">Buy</option>
                                            </select><div class="nice-select select single-select mr-0" tabindex="0"><span class="current">All Categories</span><ul class="list"><li data-value="1" class="option selected">All Categories</li><li data-value="2" class="option">Rent</li><li data-value="3" class="option">Sell</li><li data-value="3" class="option">Buy</li></ul></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pl-15">
                                        <div class="rld-single-select">
                                            <select class="select single-select mr-0" style="display: none;">
                                                <option value="1">All Cities</option>
                                                <option value="2">Los Angeles</option>
                                                <option value="3">Chicago</option>
                                                <option value="3">Philadelphia</option>
                                            </select><div class="nice-select select single-select mr-0" tabindex="0"><span class="current">All Cities</span><ul class="list"><li data-value="1" class="option selected">All Cities</li><li data-value="2" class="option">Los Angeles</li><li data-value="3" class="option">Chicago</li><li data-value="3" class="option">Philadelphia</li></ul></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="banner-search-wrap banner-search-wrap-2">
                                <div class="rld-main-search rld-main-search3">
                                    <div class="main-search-field-2">
                                        <!-- Area Range -->
                                        <div class="price-range-wrapper">
                                            <div class="range-box">
                                                <div class="price-label">Price:</div>
                                                <div id="price-range-filter-4" class="price-range-filter"></div>
                                                <div class="price-filter-wrap d-flex align-items-center">
                                                    <div class="price-range-select">
                                                        <div class="price-range range-title">$</div>
                                                        <div class="price-range" id="price-range-min-4"></div>
                                                        <div class="price-range">-</div>
                                                        <div class="price-range" id="price-range-max-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="filter-button">
                                        <a href="single-listing1.html" class="filter-btn1 search-btn">Search<i class="fas fa-search"></i></a>
                                    </div>
                                </div>
                            <!--/ End Search Form -->
                            </div>
                        </div>
                        <div class="widget widget-listing-box1">
                            <h3 class="widget-subtitle">Latest Listing</h3>
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/widget6.jpg" alt="widget" width="630" height="400"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Rent</div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="item-category10"><a href="single-listing1.html">Villa</a></div>
                                <h4 class="item-title"><a href="single-listing1.html">Modern Villa for House Highland  Ave Los Angeles</a></h4>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey,California</div>
                                <div class="item-price">$11,000<span>/mo</span></div>
                            </div>
                            <div class="widget-listing">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/widget2.jpg" alt="widget" width="120" height="102"></a>
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title"><a href="single-listing1.html">House Highland Ave  Los Angeles</a></h5>
                                    <div class="location-area"><i class="flaticon-maps-and-flags"></i>California</div>
                                    <div class="item-price">$3,000<span>/mo</span></div>
                                </div>
                            </div>
                            <div class="widget-listing">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/widget3.jpg" alt="widget" width="120" height="102"></a>
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title"><a href="single-listing1.html">House Highland Ave  Los Angeles</a></h5>
                                    <div class="location-area"><i class="flaticon-maps-and-flags"></i>California</div>
                                    <div class="item-price">$1,200<span>/mo</span></div>
                                </div>
                            </div>
                            <div class="widget-listing no-brd">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/widget4.jpg" alt="widget" width="120" height="102"></a>
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
                               <img src="<?= site_url() ?>assets/img/blog/widget5.jpg" alt="widget" width="690" height="850">
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
                                            <h4 class="item-title">9 Search Results Found</h4>
                                        </div>
                                        <div class="item-shorting-box-2">
                                            <div class="by-shorting">
                                                <div class="shorting">Sort by:</div>
                                                <select class="select single-select mr-0" style="display: none;">
                                                    <option value="1">Default</option>
                                                    <option value="2">High Price</option>
                                                    <option value="3">Medium Price</option>
                                                    <option value="3">Low Price</option>
                                                </select><div class="select single-select mr-0" tabindex="0"><span class="current">Default</span><ul class="list"><li data-value="1" class="option selected">Default</li><li data-value="2" class="option">High Price</li><li data-value="3" class="option">Medium Price</li><li data-value="3" class="option">Low Price</li></ul></div>
                                            </div>
                                            <div class="grid-button">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#mylisting"><i class="fas fa-th"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#reviews"><i class="fas fa-list-ul"></i></a>
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
                                            <div class="col-lg-6 col-md-6">
                                                 <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog4.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog6.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog7.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog8.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog9.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog4.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-6 col-md-6">
                                                <div class="property-box2 wow  fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                        <div class="rent-price">
                                                            <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                                        </div>
                                                        <div class="react-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
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
                                        </div>
                                        <div class="pagination-style-1">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="with-sidebar2.html" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active" href="with-sidebar2.html">1</a></li>
                                                <li class="page-item"><a class="page-link" href="with-sidebar2.html">2</a></li>
                                                <li class="page-item"><a class="page-link" href="with-sidebar2.html">3</a></li>
                                                <li class="page-item"><a class="page-link" href="with-sidebar2.html">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="with-sidebar2.html" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog13.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog13.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog14.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog15.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog16.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog17.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                            <div class="col-lg-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog18.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                                                        <div class="react-icon react-icon-2">
                                                            <ul>
                                                                <li>
                                                                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Favourites">
                                                                        <i class="flaticon-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Compare">
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
                                        </div>
                                        <div class="pagination-style-1">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="with-sidebar.html" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active" href="with-sidebar2.html">1</a></li>
                                                <li class="page-item"><a class="page-link" href="with-sidebar2.html">2</a></li>
                                                <li class="page-item"><a class="page-link" href="with-sidebar2.html">3</a></li>
                                                <li class="page-item"><a class="page-link" href="with-sidebar2.html">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="with-sidebar2.html" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
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