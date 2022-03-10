<?php
error_reporting(1);
$url = clean($_GET['sef_url']);
if (check_ads($url) == 0) {
  redirect("" . site_url() . "404", "refresh");
  die();
}

update_seen($url, get_ads($url, 'ads_seen'));

$images = explode(",", get_ads($url, 'ads_images'));

$wish = (wish($_SESSION['unique_session'], get_ads($url, 'ads_id'))) ? 'fa fa-heart' : 'flaticon-heart';
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
<!--=====================================-->
<!--=   Breadcrumb     Start            =-->
<!--=====================================-->
<div class="breadcrumb-wrap">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url() ?>"><?= translate('home') ?></a></li>
        <li class="breadcrumb-item">
          <a href="single-listing2.html"><?= translate('all_listings') ?></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <?= translate('listing_details') ?>
        </li>
      </ol>
    </nav>
  </div>
</div>
<!--=====================================-->
<!--=   Single Listing     Start        =-->
<!--=====================================-->
<!--=====================================-->
<!--=   Single Listing     Start        =-->
<!--=====================================-->
<section class="single-listing-wrap1">
  <div class="container">
    <div class="single-property">
      <div class="content-wrapper">
        <div class="property-heading">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="single-list-cate">
                <div class="item-categoery"><?= get_ads($url, 'ads_kind_name') ?></div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="single-list-price">₼ <?= number_format(get_ads($url, 'ads_price')) ?> <?php if (get_ads($url, 'ads_payment_method') == "1") {
                                                                                                  echo '<span class="badge rtcl-badge-_top">' . translate('monthly') . '</span>';
                                                                                                } elseif (get_ads($url, 'ads_payment_method') == "0") {
                                                                                                  echo '<span class="badge rtcl-badge-_top">' . translate('monthly') . '</span>';
                                                                                                } ?></div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
              <div class="single-verified-area">
                <div class="item-title">
                  <h3>
                    <a href="<?= site_url() ?>detail/<?= get_ads($url, 'ads_sef_url') ?>">
                      <?= get_city_name(get_ads($url, 'ads_city_id')) . ' şəhərində, ' . get_ads($url, 'ads_area') . ' m² - ' . get_type_name(get_ads($url, 'ads_type_id')) . ' ' . get_kind_name(get_ads($url, 'ads_kind_id'), 'no_original') ?>
                    </a>
                  </h3>
                </div>
              </div>
              <div class="single-item-address">
                <ul>
                  <li>
                    <i class="fas fa-map-marker-alt"></i><?= get_type_name(get_ads($url, 'ads_kind_id')) ?> #<?= get_ads($url, 0) ?>,
                    <?= strtoupper(get_ads($url, 'ads_address')) ?>, <?= get_city_name(get_ads($url, 'ads_city_id')) ?>
                  </li>
                  <li><i class="fas fa-clock"></i><?= get_nicetime(get_ads($url, 'ads_created_at')) ?> /</li>
                  <li><i class="fas fa-hourglass"></i><?= get_nicetime(get_ads($url, 'ads_end_date')) ?> /</li>
                  <li><i class="fas fa-eye"></i><?= translate('views') ?>: <?= get_ads($url, 'ads_seen') ?></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="side-button">
                <ul>
                  <li>
                    <a id="share-btn" class="side-btn">
                      <i class="flaticon-share"></i>
                    </a>
                    <div class="share-icon">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.radiustheme.com/demo/wordpress/themes/homlisti/property/the-most-luxarious-fitted-sells-properties/" target="_blank" rel="nofollow"><span class="rtcl-icon rtcl-icon-facebook"></span></a>
                      <a href="https://twitter.com/intent/tweet?text=The%2520Most%2520Luxarious%2520Fitted%2520Sells%2520Properties&amp;url=https://www.radiustheme.com/demo/wordpress/themes/homlisti/property/the-most-luxarious-fitted-sells-properties/" target="_blank" rel="nofollow"><span class="rtcl-icon rtcl-icon-twitter"></span></a>
                      <a href="https://www.linkedin.com/shareArticle?url=https://www.radiustheme.com/demo/wordpress/themes/homlisti/property/the-most-luxarious-fitted-sells-properties/&amp;title=The%2520Most%2520Luxarious%2520Fitted%2520Sells%2520Properties" target="_blank" rel="nofollow"><span class="rtcl-icon rtcl-icon-linkedin"></span></a>
                      <a href="https://pinterest.com/pin/create/button/?url=https://www.radiustheme.com/demo/wordpress/themes/homlisti/property/the-most-luxarious-fitted-sells-properties/&amp;media=&amp;description=The%2520Most%2520Luxarious%2520Fitted%2520Sells%2520Properties" target="_blank" rel="nofollow"><span class="rtcl-icon rtcl-icon-pinterest-circled"></span></a>
                      <a href="https://wa.me/?text=The%2520Most%2520Luxarious%2520Fitted%2520Sells%2520Properties+https%3A%2F%2Fwww.radiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fhomlisti%2Fproperty%2Fthe-most-luxarious-fitted-sells-properties%2F" data-action="share/whatsapp/share" target="_blank" rel="nofollow"><i class="rtcl-icon rtcl-icon-whatsapp"></i></a>
                    </div>
                  </li>
                  <li>
                    <a data-id="<?= get_ads($url, 'ads_id') ?>" class="side-btn add_favourite"><i class="<?= $wish ?>"></i></a>
                  </li>
                  <li>
                    <button onClick="window.print()" class="side-btn"><i class="flaticon-printer"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="featured-thumb-slider-area wow fadeInUp" data-wow-delay=".4s">
              <div class="feature-box3 swiper-container">
                <div class="swiper-wrapper">
                  <?php foreach ($images as $key => $value) { ?>
                    <div class="swiper-slide">
                      <div class="feature-img1 zoom-image-hover">
                        <img src="<?= site_url() ?>uploads/<?= $value; ?>" style="width:798px;height: 420px;" alt="feature" width="798" height="420" />
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="featured-thum-slider2 swiper-container">
                <div class="swiper-wrapper">
                  <?php foreach ($images as $key => $value) { ?>
                    <div class="swiper-slide">
                      <div class="item-img">
                        <img src="<?= site_url() ?>uploads/<?= $value; ?>" alt="feature" style="width:154px;height: 100px;" width="154" height="100" />
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="single-listing-box1">
              <div class="overview-area">
                <h3 class="item-title"><?= translate('overview') ?></h3>
                <div class="gallery-icon-box">
                  <div class="item-icon-box">
                    <div class="item-icon">
                      <i class="flaticon-home"></i>
                    </div>
                    <ul class="item-number">
                      <li><?= translate('ads_number') ?> :</li>
                      <li class="deep-clr">#<?= get_ads($url, 'ads_id') ?></li>
                    </ul>
                  </div>
                  <div class="item-icon-box">
                    <div class="item-icon">
                      <i class="flaticon-home"></i>
                    </div>
                    <ul class="item-number">
                      <li><?= translate('ads_type') ?> :</li>
                      <li class="deep-clr"><?= get_ads($url, 'type_name') ?></li>
                    </ul>
                  </div>
                  <div class="item-icon-box">
                    <div class="item-icon">
                      <i class="flaticon-home"></i>
                    </div>
                    <ul class="item-number">
                      <li><?= translate('ads_kind') ?> :</li>
                      <li class="deep-clr"><?= get_ads($url, 'kind_name') ?></li>
                    </ul>
                  </div>
                  <div class="item-icon-box">
                    <div class="item-icon">
                      <i class="flaticon-home"></i>
                    </div>
                    <ul class="item-number">
                      <li><?= translate('price') ?> :</li>
                      <li class="deep-clr"><?= get_ads($url, 'ads_price') ?>₼</li>
                    </ul>
                  </div>
                </div>
                <div class="gallery-icon-box">
                  <div class="item-icon-box">
                    <div class="item-icon">
                      <i class="flaticon-pencil"></i>
                    </div>
                    <ul class="item-number">
                      <li><?= translate('area') ?> :</li>
                      <li class="deep-clr"><?= get_ads($url, 'ads_area') ?> <?= (get_ads($url, 'ads_type_id') == 8 ? '<span>sot</span>' : '<span>m<sup>2</sup></span>') ?> </li>
                    </ul>
                  </div>
                  <?php if (get_ads($url, 'ads_type_id') > 0 and get_ads($url, 'ads_type_id') < 7) { ?>
                    <div class="item-icon-box">
                      <div class="item-icon">
                        <i class="flaticon-bed"></i>
                      </div>
                      <ul class="item-number">
                        <li><?= translate('rooms') ?> :</li>
                        <li class="deep-clr"><?= get_ads($url, 'ads_rooms') . ' ' . translate('rooms') ?></li>
                      </ul>
                    </div>
                  <?php } ?>
                  <?php if (get_ads($url, 'ads_type_id') > 0 and get_ads($url, 'ads_type_id') < 4) { ?>
                    <div class="item-icon-box">
                      <div class="item-icon">
                        <i class="flaticon-two-overlapping-square"></i>
                      </div>
                      <ul class="item-number">
                        <li><?= translate('floor_no') ?> :</li>
                        <li class="deep-clr"><?= get_ads($url, 'ads_floor_no') . ' ' . translate('floor') ?></li>
                      </ul>
                    </div>
                    <div class="item-icon-box">
                      <div class="item-icon">
                        <i class="flaticon-two-overlapping-square"></i>
                      </div>
                      <ul class="item-number">
                        <li><?= translate('building_floor_no') ?> :</li>
                        <li class="deep-clr"><?= get_ads($url, 'ads_building_floor_no') . ' ' . translate('floor') ?></li>
                      </ul>
                    </div>
                  <?php } ?>

                  <?php if (get_ads($url, 'ads_type_id') == 6) { ?>
                    <div class="item-icon-box">
                      <div class="item-icon">
                        <i class="flaticon-bed"></i>
                      </div>
                      <ul class="item-number">
                        <li><?= translate('office_kind') ?> :</li>
                        <li class="deep-clr">
                          <?php if (get_ads($url, 'ads_office_kind') == 1) {
                            echo "Biznes mərkəzi";
                          } elseif (get_ads($url, 'ads_office_kind') == 2) {
                            echo "Ev / Mənzil";
                          } else {
                            echo "Villa";
                          }

                          ?>
                        </li>
                      </ul>
                    </div>
                  <?php } ?>

                </div>
              </div>
              <div class="overview-area listing-area">
                <h3 class="item-title">About This Listing</h3>
                <p>
                  <?= get_ads($url, 'ads_description') ?>
                </p>
              </div>
              <div class="overview-area map-box">
                <h3 class="item-title">Map Location</h3>
                <div class="item-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14604.942936504207!2d90.42287424999999!3d23.774618500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1640231732625!5m2!1sen!2sbd" width="731" height="349" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 widget-break-lg sidebar-widget">
            <div class="widget widget-contact-box">
              <h3 class="widget-subtitle"><?= translate('contact_information') ?></h3>
              <div class="media d-flex">
                <div class="flex-shrink-0">
                  <div class="item-logo">
                    <?php if (get_ads_user_information($url, 'avatar') == '') { ?>
                      <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/default.png" width="100" height="100">
                    <?php } else { ?>
                      <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/<?= get_ads_user_information($url, 'avatar') ?>" width="100" height="100">
                    <?php } ?>
                  </div>
                </div>
                <div class="media-body flex-grow-1 ms-3">
                  <h4 class="item-title"><?= get_ads_user_information($url, 'name') . ' ' . get_ads_user_information($url, 'ads_surname') ?></h4>
                  <div class="item-phn">
                    <button class="show-number shw_num_anime">
                      <span id="ph_text"> <?= translate('show_number') ?></span>
                      <span id="ph_number" style="display: none;"><i class="fas fa-phone"></i> <?= get_ads_user_information($url, 'phone_number') ?></span>
                    </button>
                  </div>
                  <div class="item-mail"><?= get_ads_user_information($url, 'email') ?></div>
                </div>
              </div>
            </div>
            <div class="widget widget-contact-box widget-price-range">
              <h3 class="widget-subtitle">Mortgage Calculator</h3>
              <p>
                Dorem ipsum dolor sit amet, consectetur adipisc ing elit.
                Nunc posuere.
              </p>
              <form class="contact-box">
                <div class="row">
                  <div class="form-group col-lg-12">
                    <label class="item-loan">Loan Amount :</label>
                    <input type="text" class="form-control" name="fname" placeholder="$00.00" data-error="First Name is required" required />
                  </div>
                  <div class="form-group col-lg-12">
                    <label class="item-loan">Down Payment :</label>
                    <input type="text" class="form-control" name="phone" placeholder="$00.00" data-error="Phone is required" required />
                  </div>
                  <div class="form-group col-lg-12">
                    <label class="item-loan">Years :</label>
                    <input type="text" class="form-control" name="phone" placeholder="12 Years" data-error="Phone is required" required />
                  </div>
                </div>
              </form>
              <div class="price-range-wrapper">
                <div class="price-filter-wrap d-flex align-items-center">
                  <div class="price-range-select">
                    <div class="price-range range-title">
                      Interest Rate in:
                    </div>
                    <div class="price-range" id="price-range-min"></div>
                    <div class="price-range">:</div>
                    <div class="price-range" id="price-range-max"></div>
                  </div>
                </div>
                <div id="price-range-filter" class="price-range-filter"></div>
              </div>
              <ul class="wid-contact-button">
                <li><a href="single-listing2.html">Calculate</a></li>
                <li>
                  <a href="single-listing2.html"><i class="fas fa-sync-alt"></i>Reset Form</a>
                </li>
              </ul>
            </div>
            <div class="widget widget-post">
              <div class="item-img">
                <img src="<?= site_url() ?>assets/img/blog/widget5.jpg" alt="widget" />
                <div class="circle-shape">
                  <span class="item-shape"></span>
                </div>
              </div>
              <div class="item-content">
                <h4 class="item-title">Find Your Dream House</h4>
                <div class="item-price">$2,999</div>
                <div class="post-button">
                  <a href="single-listing2.html" class="item-btn">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=====================================-->
<!--=   Property     Start              =-->
<!--=====================================-->
<section class="property-wrap1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-7 col-sm-7">
        <div class="item-heading-left">
          <span class="section-subtitle"><?= translate('shared_listings') ?> |</span>
          <h4 class="btn btn-outline-info"><?= get_ads($url, 'type_name')  ?> üçün paylaşılan son elanlar</h4>
          <div class="bg-title-wrap" style="display: block">
            <span class="background-title solid"><?= translate() ?></span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-5 col-sm-5">
        <div class="heading-button">
          <a href="types/<?= get_ads($url, 'rt_seo_link') ?>" class="heading-btn item-btn2"><?= get_ads($url, 'type_name') ?> - üçün bütün elanlara bax</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-left">
      <?php
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
                        WHERE a.type_id='" . get_ads($url, 'ads_type_id') . "' 
                        AND a.sef_url != '" . $url . "'
                        ORDER BY a.id 
                        DESC LIMIT 3
                        ";
      $run = mysqli_query($conn, $sel);
      while ($nn = mysqli_fetch_array($run)) {
        $images_all_listings = $nn['ads_images'];
        $image_explode       = explode(",", $images_all_listings);
        $wish = (wish($_SESSION['unique_session'], $nn['ads_id'])) ? 'fa fa-heart' : 'flaticon-heart';

      ?>
        <div class="col-lg-4 col-md-6" id="ri_<?= $nn['ads_id']; ?>">
          <div class="property-box2 fadeInUp" data-wow-delay=".3s">
            <div class="item-img">
              <a href="<?= site_url() ?>detail/<?= $nn['ads_sef_url'] ?>"><img src="<?= site_url() ?>uploads/<?= $image_explode[0] ?>" alt="blog" style="height: 330px; width:100%"></a>
              <div class="item-category-box1">
                <div class="item-category"><?= $nn['kind_name'] ?></div>
              </div>
              <div class="rtcl-listing-badge-wrap">
                <?php if ($nn['ads_kind_id'] == 1 and $nn['ads_mortgage'] != NULL) { ?>
                  <?php if ($nn['ads_mortgage'] == 0) { ?>
                    <span class="badge rtcl-badge-featured" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= translate('mortgage') ?>"><i class="fa fa-percent"></i></span>
                  <?php } elseif ($nn['ads_mortgage'] == 1) { ?>
                    <span class="badge rtcl-badge-_bump_up" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= translate('khupchali') ?>"><i class="fa fa-file"></i></span>
                  <?php } else { ?>

                  <?php } ?>

                <?php }

                $val = ($nn['ads_kind_id'] == 1) ? 'satılır' : 'kirayə verilir'; ?>
                <?php if ($nn['ads_payment_method'] == "1") {
                  echo '<span class="badge rtcl-badge-_top">' . translate('monthly') . '</span>';
                } elseif ($nn['ads_payment_method'] == "0") {
                  echo '<span class="badge rtcl-badge-_top">' . translate('daily') . '</span>';
                } ?>
              </div>

              <div class="rent-price">
                <div class="item-price">₼ <?= $nn['ads_price'] ?> <?php if ($nn['ads_payment_method'] == "1") {
                                                                    echo '<span><i>/</i>' . translate('monthly') . '</span>';
                                                                  } elseif ($nn['ads_payment_method'] == "0") {
                                                                    echo '<span><i>/</i>' . translate('daily') . '</span>';
                                                                  } ?></div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a data-id="<?= $nn['ads_id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= translate('favourite') ?>" class="add_favourite">
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
                  <li><i class="flaticon-two-overlapping-square"></i><?= $nn['ads_area'] ?>
                    <?php if ($nn['ads_type_id'] == 7) {
                      echo ' <span>sot<span>';
                    } else {
                      echo ' <span>m<sup>2</sup></span>';
                    } ?>
                  </li>
                  <?php
                  if ($nn['ads_type_id'] > 0 and $nn['ads_type_id'] < 4) { ?>
                    <li><i class="flaticon-two-overlapping-square"></i><?= $nn['ads_floor_no'] ?>/<?= $nn['ads_building_floor_no'] ?></li>
                  <?php } elseif ($nn['ads_type_id'] == 6) { ?>
                    <li><i class="flaticon-two-overlapping-square"></i>
                      <?php if ($nn['ads_office_kind'] == 1) {
                        echo "Biznes mərkəzi";
                      } elseif ($nn['ads_office_kind'] == 2) {
                        echo "Ev / Mənzil";
                      } else {
                        echo "Villa";
                      }
                      ?>
                    </li>
                  <?php } ?>
                  <?php if ($nn['ads_type_id'] < 7) { ?>
                    <li><i class="flaticon-two-overlapping-square"></i><?= $nn['ads_rooms'] ?></li>
                  <?php } ?>
                  <li><i class="fas fa-eye"></i><?= $nn['ads_seen'] ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->
<script type="text/javascript">
  $(document).ready(function() {

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
    $(document).on('click', '#share-btn', function(event) {
      $(".share-icon").addClass("open");
    });
    $(document).on('click', '.show-number', function(event) {
      $("#ph_text").css("display", "none");
      $("#ph_number").css("display", "block");
      $(this).removeClass("shw_num_anime");
    });
    $(document).on('click', '.add_favourite', function(event) {
      let myClass = $(this).children('i').attr("class");
      let data_id = $(this).data("id");
      let url = $("#base_url").val();

      var class_name = $(this).children('i').attr('class');
      var me = this;
      $.ajax({
        url: url + '/core/ajax/add_favorite.php',
        method: "POST",
        data: {
          data_id: data_id,
          class_name: class_name
        },
        success: function(data) {
          parsed = JSON.parse(data);

          if (parsed.status == 200) {
            Toast.fire({
              text: parsed.message,
              icon: parsed.icon,
              position: 'top-right'
            });
            if (parsed.action == "add") {
              $(me).children("i").removeClass("flaticon-heart").addClass("fa fa-heart");
              $(".item-count").html(parsed.all_count);

            } else {
              $(me).children("i").removeClass("fa fa-heart").addClass("flaticon-heart");
              $(".item-count").html(parsed.all_count);
            }

          } else if (parsed.status == 204) {

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