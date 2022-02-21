<?php 
session_start();
  if (!isset($_SESSION["mail"]))
   {
      header("location: home");
   }
?>

<?php 
// dd(hash("sha256", "Cavid123"));
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
           

           <div class="breadcrumb-wrap">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><?= translate('home') ?></a></li>
                        <li class="breadcrumb-item"><a href="agent-lists1.html"><?= translate('dashboard') ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="agent-wrap2">
            <div class="container">
                <div class="row gutters-40">
                    <div class="col-lg-8">
                        <div class="team-box1 team-box5">
                            <div class="item-img">
                                <a href="agent-lists1.html">
                                    <img src="<?= site_url() ?>assets/img/team/team13.png" alt="team" width="330" height="390">
                                </a>
                                <div class="category-box">
                                    <div class="item-category"><a href="agent-lists1.html">05 Listings</a></div>
                                </div>
                            </div>
                            <div class="item-content">
                                <div class="item-title">
                                    <h3><a href="agent-lists1.html"><?= users_info($_SESSION['id'], 'name') .' '. users_info($_SESSION['id'], 'surname')   ?></a></h3>
                                    <div class="item-details">
                                        <h4 class="item-subtitle"><?= (users_info($_SESSION['id'], 'user_kind')==0) ? 'Şəxsi elanlar' : 'Vasitəçi'  ?></h4>
                                        <ul class="item-rating">
                                            <li class="rating-count">
                                            	<?php 
                                            		$sel 			= "SELECT * FROM ads WHERE user_id='".$_SESSION['id']."'";
                                            		$run 			= mysqli_query($conn,$sel);
                                            		$count_listing	= mysqli_num_rows($run);
                                            		echo 'Bütün elanlarım: '. $count_listing; 
                                            	?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-contact-2">
                                    <div class="item-phn-no"><i class="fas fa-phone-alt"></i><?= translate('phone_number') ?>: <span>
                                    	<?= users_info($_SESSION['id'], 'phone_number')  ?></span></div>
                                    <div class="item-icon"><i class="far fa-envelope"></i>E-mail : <span><?= users_info($_SESSION['id'], 'email')  ?></span></div>
                                    <div class="item-icon"><i class="far fa-clock"></i>Time : <span>8:00AM - 16:00PM</span></div>
                                    <div class="item-icon icon-style-2"><i class="fas fa-share-alt"></i>Share : 
                                        <div class="rt-social-item">
                                            <ul class="social-item">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://vimeo.com/" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
                                                <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-style-1">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#mylisting">My Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#reviews">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="mylisting" role="tabpanel">
                                    <div class="property-wrap4">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="item-shorting-box">
                                                    <div class="shorting-title">
                                                        <h4 class="item-title">Showing 1–6 of 12 results</h4>
                                                    </div>
                                                    <div class="item-shorting-box-2">
                                                        <div class="by-shorting">
                                                            <div class="shorting"><?= translate('sort_by') ?>:</div>
                                                            <select class="select single-select mr-0" style="display: none;">
                                                                <option value="1"><?= translate('by_date') ?></option>
                                                                <option value="2"><?= translate('cheap_firstly') ?></option>
                                                                <option value="3"><?= translate('expensive_firstly') ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="grid-button">
                                                            <ul>
                                                                <li><a href="half-map1.html"><i class="fas fa-th"></i></a></li>
                                                                <li class="without-border"><a href="half-map2.html"><i class="fas fa-list-ul"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
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
                                                            <h3 class="item-title"><a href="single-listing1.html">The Luxarious Fitted Sells</a></h3>
                                                        </div>
                                                        <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                                        <div class="item-categoery3">
                                                            <ul>
                                                                <li><i class="flaticon-bed"></i>Beds: 03</li>
                                                                <li><i class="flaticon-shower"></i>Baths: 02</li>
                                                                <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-price">$40,000<i>/</i><span>yr</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog13.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Sell</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Office</a></div>
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
                                                            <h3 class="item-title"><a href="single-listing1.html">The Luxarious Fitted Sells </a></h3>
                                                        </div>
                                                        <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                                        <div class="item-categoery3">
                                                            <ul>
                                                                <li><i class="flaticon-bed"></i>Beds: 03</li>
                                                                <li><i class="flaticon-shower"></i>Baths: 02</li>
                                                                <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-price">$35,000<i>/</i><span>mo</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog14.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Sell</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Villa</a></div>
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
                                                            <h3 class="item-title"><a href="single-listing1.html">Diamond Manco Apartment</a></h3>
                                                        </div>
                                                        <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                                        <div class="item-categoery3">
                                                            <ul>
                                                                <li><i class="flaticon-bed"></i>Beds: 03</li>
                                                                <li><i class="flaticon-shower"></i>Baths: 02</li>
                                                                <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-price">$25,000<i>/</i><span>mo</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="property-box2 property-box4 wow animated fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                                    <div class="item-img">
                                                        <a href="single-listing1.html"><img src="<?= site_url() ?>assets/img/blog/blog13.jpg" alt="blog" width="250" height="200"></a>
                                                        <div class="item-category-box1">
                                                            <div class="item-category">For Rent</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-content item-content-property">
                                                        <div class="item-category10"><a href="single-listing1.html">Restaurant</a></div>
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
                                                            <h3 class="item-title"><a href="single-listing1.html">Affordable Green Villa </a></h3>
                                                        </div>
                                                        <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                                        <div class="item-categoery3">
                                                            <ul>
                                                                <li><i class="flaticon-bed"></i>Beds: 03</li>
                                                                <li><i class="flaticon-shower"></i>Baths: 02</li>
                                                                <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-price">$35,000<i>/</i><span>mo</span></div>
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
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="reviews-area">
                                        <div class="reviews-comment">
                                            <div class="heading-layout">
                                                <h4>02 Reviews</h4>
                                            </div>
                                            <div class="media d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="item-img">
                                                        <img src="<?= site_url() ?>assets/img/team/team14.png" alt="team">
                                                    </div>
                                                </div>
                                                
                                                <div class="media-body flex-grow-1 ms-4">
                                                    <h5 class="item-title">Joker</h5>
                                                    <div class="rating-area">
                                                        <div class="item-date">April 2, 2020</div>
                                                        <ul class="item-rating">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>The second bedroom is a corner room with double windows. The kitchen has fabulo use
                                                        appliances, and a laundry area second bedroom.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="item-img">
                                                        <img src="<?= site_url() ?>assets/img/team/team15.png" alt="team">
                                                    </div>
                                                </div>
                                                
                                                <div class="media-body flex-grow-1 ms-4">
                                                    <h5 class="item-title">Maria Jaman</h5>
                                                    <div class="rating-area">
                                                        <div class="item-date">April 2, 2020</div>
                                                        <ul class="item-rating">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>The second bedroom is a corner room with double windows. The kitchen has fabulo use
                                                        appliances, and a laundry area second bedroom.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews-reply">
                                            <h4 class="item-title">Add a review</h4>
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <form class="contact-box rt-contact-form" novalidate="true">
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" class="form-control" name="fname" placeholder="Your Full Name" data-error="First Name is required" required="">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" class="form-control" name="phone" placeholder="Phone" data-error="Phone is required" required="">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="text" class="form-control" name="phone" placeholder="E-mail" data-error="Phone is required" required="">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <textarea name="comment" id="message" class="form-text" placeholder="Message" cols="30" rows="4" data-error="Message Name is required" required=""></textarea>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <button class="form-button">Send Message</button>
                                                    </div>
                                                </div>
                                                <div class="form-response"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 widget-break-lg sidebar-widget">
                        <div class="widget widget-contact-box">
                            <h3 class="widget-subtitle">Contact With This Agent</h3>
                            <form class="contact-box rt-contact-form" novalidate="true">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" name="fname" placeholder="Your Full Name" data-error="First Name is required" required="">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" data-error="Phone is required" required="">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" name="phone" placeholder="E-mail" data-error="Phone is required" required="">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea name="comment" id="message-2" class="form-text" placeholder="Message" cols="30" rows="4" data-error="Message Name is required" required=""></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <div class="advanced-button">
                                            <button type="submit" class="item-btn disabled">Search <i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                        <div class="widget widget-post widget-post-style-2">
                            <div class="item-img">
                                <img src="<?= site_url() ?>assets/img/team/team9.jpg" alt="widget">
                            </div>
                            <div class="item-content">
                                <h4 class="item-title item-title-large">Do you want to join our  real estate network?</h4>
                                <div class="post-button"><a href="agent-lists1.html" class="item-btn">Become An Agent</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- START TOPBAR -->
<?php include_once "partials/footer.php"; ?>
<!-- END TOPBAR -->