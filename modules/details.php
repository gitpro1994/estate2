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

<!--=====================================-->
<!--=   Breadcrumb     Start            =-->
<!--=====================================-->

<div class="breadcrumb-wrap">
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">
        <a href="single-listing2.html">Comercial Property</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        All Listing
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
                      <div class="item-categoery">For Rent</div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="single-list-price">$12,500</div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12">
                    <div class="single-verified-area">
                      <div class="item-title">
                        <h3>
                          <a href="single-listing2.html"
                            >Family House For Rent</a
                          >
                        </h3>
                      </div>
                    </div>
                    <div class="single-item-address">
                      <ul>
                        <li>
                          <i class="fas fa-map-marker-alt"></i>House#18,
                          Road#07, Albany, New York, 08525 /
                        </li>
                        <li><i class="fas fa-clock"></i>7 months ago /</li>
                        <li><i class="fas fa-eye"></i>Views: 1,230</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                    <div class="side-button">
                      <ul>
                        <li>
                          <a href="with-sidebar2.html" class="side-btn"
                            ><i class="flaticon-share"></i
                          ></a>
                        </li>
                        <li>
                          <a href="with-sidebar2.html" class="side-btn"
                            ><i class="flaticon-heart"></i
                          ></a>
                        </li>
                        <li>
                          <a href="with-sidebar2.html" class="side-btn"
                            ><i class="flaticon-left-and-right-arrows"></i
                          ></a>
                        </li>
                        <li>
                          <a href="with-sidebar2.html" class="side-btn"
                            ><i class="flaticon-printer"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-8">
                  <div
                    class="featured-thumb-slider-area wow fadeInUp"
                    data-wow-delay=".4s"
                  >
                    <div class="feature-box3 swiper-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="feature-img1 zoom-image-hover">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product1-1.jpg"
                              alt="feature"
                              width="798"
                              height="420"
                            />
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="feature-img1 zoom-image-hover">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product3.jpg"
                              alt="feature"
                              width="798"
                              height="420"
                            />
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="feature-img1 zoom-image-hover">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product4.jpg"
                              alt="feature"
                              width="798"
                              height="420"
                            />
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="feature-img1 zoom-image-hover">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product5.jpg"
                              alt="feature"
                              width="798"
                              height="420"
                            />
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="feature-img1 zoom-image-hover">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product6.jpg"
                              alt="feature"
                              width="798"
                              height="420"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="featured-thum-slider2 swiper-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="item-img">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product2.jpg"
                              alt="feature"
                              width="154"
                              height="100"
                            />
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="item-img">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product7.jpg"
                              alt="feature"
                              width="154"
                              height="100"
                            />
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="item-img">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product8.jpg"
                              alt="feature"
                              width="154"
                              height="100"
                            />
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="item-img">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product9.jpg"
                              alt="feature"
                              width="154"
                              height="100"
                            />
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="item-img">
                            <img
                              src="<?= site_url() ?>assets/img/blog/product10.jpg"
                              alt="feature"
                              width="154"
                              height="100"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="single-listing-box1">
                    <div class="overview-area">
                      <h3 class="item-title">Overview</h3>
                      <div class="gallery-icon-box">
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-comment"></i>
                          </div>
                          <ul class="item-number">
                            <li>ID No :</li>
                            <li class="deep-clr">98560</li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-home"></i>
                          </div>
                          <ul class="item-number">
                            <li>Type :</li>
                            <li class="deep-clr">Apartment</li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-bed"></i>
                          </div>
                          <ul class="item-number">
                            <li>Bed Room :</li>
                            <li class="deep-clr">04</li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-shower"></i>
                          </div>
                          <ul class="item-number">
                            <li>ID No :</li>
                            <li class="deep-clr">98560</li>
                          </ul>
                        </div>
                      </div>
                      <div class="gallery-icon-box">
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-home"></i>
                          </div>
                          <ul class="item-number">
                            <li>Parking :</li>
                            <li class="deep-clr">Yes</li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-home"></i>
                          </div>
                          <ul class="item-number">
                            <li>Area :</li>
                            <li class="deep-clr">1050 sqft</li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-pencil"></i>
                          </div>
                          <ul class="item-number">
                            <li>Land Size :</li>
                            <li class="deep-clr">15,000 sqft</li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-two-overlapping-square"></i>
                          </div>
                          <ul class="item-number">
                            <li>Year Build :</li>
                            <li class="deep-clr">2022</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="overview-area listing-area">
                      <h3 class="item-title">About This Listing</h3>
                      <p>
                        Praesent eros turpis, commodo vel justo at, pulvinar
                        mollis eros. Mauris aliquet eu quam id ornareor bi ac
                        quam enim. Cras vitae nulla condimentum, semper dolor
                        non, faucibus dolor. Vivamus adip iscing eros quis orci
                        fringilla, sed pretium lectus viverra. Pellentesque
                        habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas.
                      </p>
                      <p>
                        Praesent eros turpis, commodo vel justo at, pulvinar
                        mollis eros. Mauris aliquet eu quam id ornareor bi ac
                        quam enim. Cras vitae nulla condimentum, semper dolor
                        non, faucibus dolor. Vivamus adip iscing eros quis orci
                        fringilla, sed pretium lectus viverra.
                      </p>
                    </div>
                    <div
                      class="overview-area single-details-box table-responsive"
                    >
                      <h3 class="item-title">Details</h3>
                      <table class="table-box1">
                        <tr>
                          <td class="item-bold">Id No</td>
                          <td>98560</td>
                          <td class="item-bold">Price</td>
                          <td>$12,500</td>
                        </tr>
                        <tr>
                          <td class="item-bold">Property Type</td>
                          <td>Apartment</td>
                          <td class="item-bold">Parking</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <td class="item-bold">Rooms</td>
                          <td>04</td>
                          <td class="item-bold">Property Status</td>
                          <td>For Rent</td>
                        </tr>
                        <tr>
                          <td class="item-bold">Bath Rooms</td>
                          <td>03</td>
                          <td class="item-bold">Land Area</td>
                          <td>15,000 sqft</td>
                        </tr>
                        <tr>
                          <td class="item-bold">Size</td>
                          <td>1050 sqft</td>
                          <td class="item-bold">Year Build</td>
                          <td>2022</td>
                        </tr>
                      </table>
                    </div>
                    <div class="overview-area ameniting-box">
                      <h3 class="item-title">Features & Amenities</h3>
                      <div class="row">
                        <div class="col-lg-4">
                          <ul class="ameniting-list">
                            <li><i class="fas fa-check-circle"></i>TV Cable</li>
                            <li>
                              <i class="fas fa-check-circle"></i>Air
                              Conditioning
                            </li>
                            <li><i class="fas fa-check-circle"></i>Barbeque</li>
                            <li><i class="fas fa-check-circle"></i>Gym</li>
                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <ul class="ameniting-list">
                            <li>
                              <i class="fas fa-check-circle"></i>Swimming Pool
                            </li>
                            <li><i class="fas fa-check-circle"></i>Laundry</li>
                            <li>
                              <i class="fas fa-check-circle"></i>Microwave
                            </li>
                            <li><i class="fas fa-check-circle"></i>Lawn</li>
                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <ul class="ameniting-list">
                            <li><i class="fas fa-check-circle"></i>Sauna</li>
                            <li>
                              <i class="fas fa-check-circle"></i>Window
                              Coverings
                            </li>
                            <li>
                              <i class="fas fa-check-circle"></i>CC Camera
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="overview-area map-box">
                      <h3 class="item-title">Map Location</h3>
                      <div class="item-map">
                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14604.942936504207!2d90.42287424999999!3d23.774618500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1640231732625!5m2!1sen!2sbd"
                          width="731"
                          height="349"
                          style="border: 0"
                          allowfullscreen=""
                          loading="lazy"
                        ></iframe>
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
                          <img src="<?= site_url() ?>assets/img/theme2.png" alt="logo" width="100" height="100"/>
                        </div>
                      </div>
                      <div class="media-body flex-grow-1 ms-3">
                        <h4 class="item-title">RadiusTheme</h4>
                        <div class="item-phn">
                            <button class="show-number">
                                <i class="fas fa-phone"></i> <?= translate('show_number') ?>
                            </button>
                        </div>
                        <div class="item-mail">agent@radiustheme.com</div>
                       
                      </div>
                    </div>
                   <!--  <ul class="wid-contact-button">
                      <li>
                        <a href="contact.html"
                          ><i class="fas fa-comment"></i>Quick Chat</a
                        >
                      </li>
                      <li>
                        <a href="contact.html"
                          ><i class="fas fa-share-alt"></i>Share</a
                        >
                      </li>
                    </ul> -->
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
                          <input
                            type="text"
                            class="form-control"
                            name="fname"
                            placeholder="$00.00"
                            data-error="First Name is required"
                            required
                          />
                        </div>
                        <div class="form-group col-lg-12">
                          <label class="item-loan">Down Payment :</label>
                          <input
                            type="text"
                            class="form-control"
                            name="phone"
                            placeholder="$00.00"
                            data-error="Phone is required"
                            required
                          />
                        </div>
                        <div class="form-group col-lg-12">
                          <label class="item-loan">Years :</label>
                          <input
                            type="text"
                            class="form-control"
                            name="phone"
                            placeholder="12 Years"
                            data-error="Phone is required"
                            required
                          />
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
                      <div
                        id="price-range-filter"
                        class="price-range-filter"
                      ></div>
                    </div>

                    <ul class="wid-contact-button">
                      <li><a href="single-listing2.html">Calculate</a></li>
                      <li>
                        <a href="single-listing2.html"
                          ><i class="fas fa-sync-alt"></i>Reset Form</a
                        >
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
                        <a href="single-listing2.html" class="item-btn"
                          >Shop Now</a
                        >
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
                <span class="section-subtitle">Our PROPERTIES</span>
                <h2 class="section-title">Latest Properties</h2>
                <div class="bg-title-wrap" style="display: block">
                  <span class="background-title solid">Properties</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-5">
              <div class="heading-button">
                <a href="single-listing2.html" class="heading-btn item-btn2"
                  >All Properties</a
                >
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                  <div class="item-img">
                      <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog4.jpg" alt="blog" width="510" height="340"></a>
                      <div class="item-category-box1">
                          <div class="item-category">For Sell</div>
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
          </div>
        </div>
      </section>

<!-- START FOOTER -->
<?php include_once "partials/footer.php"; ?>
<!-- END FOOTER -->