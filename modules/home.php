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
                                <a class="current nav-item" data-filter="*"><?= translate('all_types') ?></a>
                                <a class="nav-item" data-filter=".for-sell"><?= translate('for_sell') ?></a>
                                <a class="nav-item" data-filter=".for-rent"><?= translate('for_rent') ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="row featuredContainer">
                        <?php                         
                        $sel = "SELECT * FROM ads AS a INNER JOIN cities AS c ON a.city_id=c.id LEFT JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id GROUP BY a.id ORDER BY a.id DESC LIMIT 100";
                        $run = mysqli_query($conn,$sel);
                        while ($nn = mysqli_fetch_array($run)) 
                        {
                         ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 <?= ($nn['kind_id']==1) ? 'for-sell' : 'for-rent' ?> ">
                            <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                                <div class="item-img">
                                    <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog4.jpg" alt="blog" width="510" height="340"></a>
                                    <div class="item-category-box1">
                                        <div class="item-category"><?= $nn['kind_name'] ?></div>
                                    </div>
                                    <div class="rent-price">
                                        <div class="item-price">₼ <?= $nn['price'] ?> <?php if($nn['payment_method']=="1"){ echo '<span><i>/</i>'.translate('monthly').'</span>'; }elseif($nn['payment_method']=="0"){ echo '<span><i>/</i>'.translate('monthly').'</span>'; } ?></div>
                                    </div>
                                    <div class="react-icon">
                                        <ul>
                                            <li>
                                                <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?= translate('favourite') ?>">
                                                    <i class="flaticon-heart"></i>
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
                                            <li><i class="flaticon-shower"></i>Baths: 02</li>
                                            <li><i class="flaticon-two-overlapping-square"></i><?= $nn['area'] ?> m²</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->