<?php 
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

<!-- START SEARCH -->
<?php include_once "partials/search.php"; ?>
<!-- END SEARCH -->

<!-- START HOME SLIDER -->
<?php include_once "partials/home_slider.php"; ?>
<!-- END HOME SLIDER -->

         <section class="property-wrap1">
            <div class="container">
                <div class="isotope-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="item-heading-left">
                                <span class="section-subtitle">Our PROPERTIES</span>
                                <h2 class="section-title">Latest Properties</h2>
                                <div class="bg-title-wrap" style="display: block;">
                                    <span class="background-title solid">Properties</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <div class="isotope-classes-tab">
                                <a class="current nav-item" data-filter="*">All Types</a>
                                <a class="nav-item" data-filter=".for-sell">For Sell</a>
                                <a class="nav-item" data-filter=".for-rent">For Rent</a>
                            </div>
                        </div>
                    </div>
                    <div class="row featuredContainer">
                        <?php                         
                        $sel = "SELECT * FROM ads AS a INNER JOIN ads_users AS u ON a.user_id = u.id INNER JOIN cities AS c ON a.city_id=c.id INNER JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id GROUP BY a.id ORDER BY a.id DESC LIMIT 100";
                        $run = mysqli_query($conn,$sel);
                        while ($nn = mysqli_fetch_array($run)) 
                        {
                            // dd($nn);
                         ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 for-sell">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog4.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category"><?= $nn['kind_name'] ?></div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">₼ <?= $nn['price'] ?> <?= ($nn['rk.id']) ? '<span><i>/</i>ay</span>' : ''?> </div>
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
                                <div class="item-category10"><a href="single-listing1.html"><?= $nn['type_name'] ?></a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Ofis satilir</a></h3>
                                    </div>
                                    <div class="location-area"><i class="flaticon-maps-and-flags"></i><?= $nn['city_name'] ?>, <?= $nn['region_name'] ?></div>
                                    <div class="item-categoery3">
                                        <ul>
                                            <li><i class="flaticon-bed"></i><?= translate('room') ?>: <?= $nn['rooms'] ?></li>
                                            <li><i class="flaticon-shower"></i>Baths: 02</li>
                                            <li><i class="flaticon-two-overlapping-square"></i><?= $nn['area'] ?> m²</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                   <!--      <div class="col-xl-4 col-lg-6 col-md-6 for-rent">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".2s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category">For Rent</div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">$12,000<span><i>/</i>mo</span></div>
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
                                <div class="item-category10"><a href="single-listing1.html">Villa</a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Countryside Modern Lake View</a></h3>
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
                        <div class="col-xl-4 col-lg-6 col-md-6 for-sell">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".1s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog6.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category">For Sell</div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">$18,000<span><i>/</i>mo</span></div>
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
                                <div class="item-category10"><a href="single-listing1.html">Office</a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Gorgeous Apartment Building </a></h3>
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
                        <div class="col-xl-4 col-lg-6 col-md-6 for-rent">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog7.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category">For Rent</div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">$19,000<span><i>/</i>mo</span></div>
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
                                <div class="item-category10"><a href="single-listing1.html">Commercial</a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Countryside Modern Lake View </a></h3>                                                
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
                        <div class="col-xl-4 col-lg-6 col-md-6 for-sell">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".6s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog8.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category">For Sell</div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">$30,000<span><i>/</i>mo</span></div>
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
                                <div class="item-category10"><a href="single-listing1.html">Villa</a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Family House For Sell</a></h3>
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
                        <div class="col-xl-4 col-lg-6 col-md-6 for-rent">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".2s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog9.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category">For Rent</div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">$25,000<span><i>/</i>mo</span></div>
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
                                <div class="item-category10"><a href="single-listing1.html">Office</a></div>
                                <div class="item-content">
                                    <div class="verified-area">
                                        <h3 class="item-title"><a href="single-listing1.html">Countryside Modern Lake View</a></h3>
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
                        </div> -->
                    </div>
                </div>
            </div>
        </section>











<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->