<?php 
error_reporting(1);
$url = clean($_GET['sef_url']);
if(check_ads($url)==0)
{
   redirect("".site_url()."404","refresh");
   die();
}
 
$images = explode(",",get_ads($url,'ads_images'));

$wish = (wish($_SESSION['unique_session'],get_ads($url,'ads_id'))) ? 'fa fa-heart' : 'flaticon-heart';
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
                      <div class="item-categoery"><?= get_ads($url,'ads_kind_name') ?></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="single-list-price">₼ <?= number_format(get_ads($url,'ads_price')) ?> <?php if(get_ads($url,'ads_payment_method')=="1"){ echo '<span class="badge rtcl-badge-_top">'.translate('monthly').'</span>'; }elseif(get_ads($url,'ads_payment_method')=="0"){ echo '<span class="badge rtcl-badge-_top">'.translate('monthly').'</span>'; } ?></div>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12">
                    <div class="single-verified-area">
                      <div class="item-title">
                        <h3>
                          <a href="single-listing2.html">
                            <?= get_city_name(get_ads($url,'ads_city_id')).' şəhərində, '.get_ads($url,'ads_area').' m² - '. get_type_name(get_ads($url,'ads_kind_id')).' '.get_kind_name(get_ads($url,'ads_type_id'),'no_original') ?>
                              
                            </a>
                        </h3>
                      </div>
                    </div>
                    <div class="single-item-address">
                      <ul>
                        <li>
                          <i class="fas fa-map-marker-alt"></i><?= get_type_name(get_ads($url,'ads_kind_id')) ?> #<?= get_ads($url,0) ?>,
                          <?= strtoupper(get_ads($url,'ads_address')) ?>, <?= get_city_name(get_ads($url,'ads_city_id')) ?>
                        </li>
                        <li><i class="fas fa-clock"></i><?= get_nicetime(get_ads($url,'ads_created_at')) ?> /</li>
                        <li><i class="fas fa-hourglass"></i><?= get_nicetime(get_ads($url,'ads_end_date')) ?> /</li>
                        <li><i class="fas fa-eye"></i><?= translate('views') ?>: <?= get_ads($url,'ads_seen') ?></li>
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
                          <a data-id="<?= get_ads($url,'ads_id') ?>" class="side-btn add_favourite"
                            ><i class="<?= $wish ?>"></i
                          ></a>
                        </li>
                        <li>
                          <button onClick="window.print()" class="side-btn"
                            ><i class="flaticon-printer"></i
                          ></button>
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
                        <?php foreach ($images as $key => $value) { ?>
                        <div class="swiper-slide">
                          <div class="feature-img1 zoom-image-hover">
                            <img src="<?= site_url() ?>uploads/<?= $value; ?>"  style="width:798px;height: 420px;" alt="feature" width="798" height="420"/>
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
                            <img src="<?= site_url() ?>uploads/<?= $value; ?>" alt="feature" style="width:154px;height: 100px;" width="154" height="100"/>
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
                            <i class="flaticon-comment"></i>
                          </div>
                          <ul class="item-number">
                            <li><?= translate('ads_number') ?> :</li>
                            <li class="deep-clr">#<?= get_ads($url,'ads_id') ?></li>
                          </ul>
                        </div>
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-home"></i>
                          </div>
                          <ul class="item-number">
                            <li><?= translate('type') ?> :</li>
                            <li class="deep-clr"><?= get_ads($url,'ads_type_name') ?></li>
                          </ul>
                        </div>
                         <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-pencil"></i>
                          </div>
                          <ul class="item-number">
                            <li><?= translate('area') ?> :</li>
                            <li class="deep-clr"><?= get_ads($url,'ads_area') ?> m²</li>
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
                        
                      </div>
                      <div class="gallery-icon-box">
                        <div class="item-icon-box">
                          <div class="item-icon">
                            <i class="flaticon-shower"></i>
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
                        <?= get_ads($url,'ads_description') ?>
                      </p>
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
                          <?php if (get_ads_user_information($url,'avatar') == '') { ?>
                          <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/default.png" width="100" height="100">
                          <?php } else { ?>
                          <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/<?= get_ads_user_information($url,'avatar') ?>" width="100" height="100" >
                           <?php } ?>
                        </div>
                      </div>
                      <div class="media-body flex-grow-1 ms-3">
                        <h4 class="item-title"><?= get_ads_user_information($url,'name') . ' ' . get_ads_user_information($url,'ads_surname') ?></h4>
                        <div class="item-phn">
                            <button class="show-number shw_num_anime">
                                <span id="ph_text"> <?= translate('show_number') ?></span>
                                <span id="ph_number" style="display: none;"><i class="fas fa-phone"></i> <?= get_ads_user_information($url,'phone_number') ?></span>
                            </button>

                        </div>
                        <div class="item-mail"><?= get_ads_user_information($url,'email') ?></div>
                       
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