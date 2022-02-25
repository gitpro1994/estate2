<?php 
session_start();
// dd($_SESSION);
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
$sel            = "SELECT * FROM ads AS a INNER JOIN ads_users AS au ON a.user_id='".$_SESSION['id']."' INNER JOIN cities AS c ON a.city_id=c.id LEFT JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id GROUP BY a.id ORDER BY a.id";
$run            = mysqli_query($conn,$sel);
$count_listing  = mysqli_num_rows($run);
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
                    <label for="avatar" style="color: white;">
                        <div class="item-img" >
                            <div id="for_avatar">
                                <?php if(users_info($_SESSION['id'], 'avatar') == '') { ?>
                                    <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/default.png" alt="" width="250" height="200">
                                <?php } else { ?>
                                    <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/<?= users_info($_SESSION['id'], 'avatar') ?>" alt="" width="250" height="200">
                                <?php } ?>
                            </div>
                            <div class="category-box">
                                <div class="item-category">
                                    <a href="agent-lists1.html"><?= $count_listing ?> <?= translate('listings') ?></a>
                                </div>
                            </div>
                            <div class="tag text-center">
                                <input type="file" name="avatar" id="avatar" style="display:none">
                                <?= translate('upload_profile_photo') ?>
                            </div>
                        </div>
                    </label>
                    <div class="item-content">
                        <div class="item-title">
                            <h3 class="text-success text-center">
                                <?= translate('dashboard') ?>
                            </h3>
                            <div class="item-details"></div>
                        </div>
                        <div class="item-contact-2">
                            <div class="item-phn-no"><i class="fas fa-phone-alt"></i><?= translate('phone_number') ?>: <span class="text-primary">
                             <?= users_info($_SESSION['id'], 'phone_number')  ?></span></div>
                             <div class="item-icon">
                                <i class="far fa-envelope"></i><?= translate('email') ?> : <span class="text-primary"><?= users_info($_SESSION['id'], 'email') ?></span>
                            </div>
                            <div class="item-icon icon-style-2"><i class="fas fa-user"></i><?= translate('username') ?>: 
                                &nbsp;<span class="text-primary"> <?= users_info($_SESSION['id'],'username') ?></span>
                            </div>
                            <div class="item-icon">
                                <i class="far fa-envelope"></i><?= translate('user_kind') ?> : 
                                <span class="text-primary">
                                    <?php 
                                    if (users_info($_SESSION['id'], 'user_type')==0) 
                                    {
                                        echo "Şəxsi elanlarımı paylaşıram";
                                    } 
                                    else
                                    {
                                        echo "Mən vasitəçiyəm";
                                    }

                                    ?>
                                </span>
                            </div>
                            <div class="item-icon icon-style-2">
                               <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" name="freeze_account" id="freeze_account" value="<?= users_info($_SESSION['id'],'id'); ?>">
                                    <button class="btn btn-outline-primary btn-sm freeze" type="submit">
                                        <i class="fas fa-times"></i> 
                                        <?= translate('freeze_account') ?>
                                    </button>
                                </div>  
                                <!-- <input type="hidden" name="sess_id" value="$_SESSION['id']"> -->

                                <div class="col-sm-12">
                                    <input type="hidden" name="delete_account" id="delete_account" value="<?= users_info($_SESSION['id'],'id'); ?>">
                                    <button class="btn btn-outline-danger btn-sm delete" type="submit">
                                        <i class="fas fa-trash"></i> 
                                        <?= translate('delete_account') ?>
                                    </button>
                                </div>
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
                        <a class="nav-link" data-bs-toggle="tab" href="#reviews"><?= translate('profile_information') ?></a>
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

<script>
    $(window).bind('load', function() {
        $('img').each(function() {
            if((typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) || this.readyState == 'uninitialized') {
                $(this).attr('src', '<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>');
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {  
        $(document).on('click', '.freeze', function(event) {
            let id = $("#freeze_account").val();
            Swal.fire({
                      title: 'Hesabı dondurmaq istədiyinizdən əminsiniz ?',
                      text: "Qeyd edək ki, hesabın dondurulması zamanı hesaba aid olan elanların da paylaşılması dayandırılır. Hesaba təkrar daxil olarkən hesabın aktivləşdirilməsi təmin edilir.",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      cancelButtonText: 'Ləğv et',
                      confirmButtonText: 'Hesabı dondur!'
                  }).then((result) => {
                      if (result.isConfirmed) {
                        $.ajax({
                            url: "core/ajax/freeze_account.php",
                            type: "POST",
                            data: {id:id},
                            success: function(data){
                                data = JSON.parse(data);
                                
                              if(data.status == 200)
                              {
                                Toast.fire({
                                  heading: 'Uğurlu!',
                                  text: data.message,
                                  showHideTransition: 'slide',
                                  icon: data.icon,
                                  loaderBg: '#fff',
                                  position: 'top-right'
                              })
                            }
                            else if(data.status == 204)
                            {

                                Toast.fire({
                                  heading: 'Xəta',
                                  text: data.message,
                                  showHideTransition: 'slide',
                                  icon: data.icon,
                                  loaderBg: '#fff',
                                  position: 'top-right'
                              })
                            }
                        } 
                    })

                }
            });
        });
    });    


  $(document).ready(function() {  
        $(document).on('click', '.delete', function(event) {
            let id = $("#delete_account").val();

        Swal.fire({
          title: 'Hesabı silmək istədiyinizdən əminsiniz ?',
          text: "Qeyd edək ki, hesabın silinməsi zamanı hesaba aid olan elanlar da silinir. Hesab silindikdən sonra məlumatların geri qaytarılması mümkün deyil.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Ləğv et',
          confirmButtonText: 'Hesabı sil!'
      }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
                url: "core/ajax/delete_account.php",
                type: "POST",
                data: {id:id},
                success: function(data){
                    console.log(data);
                  if(data.status == 200)
                  {
                    Toast.fire({
                      heading: 'Uğurlu!',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: data.icon,
                      loaderBg: '#fff',
                      position: 'top-right'
                  })
                }
                else if(data.status == 204)
                {

                    Toast.fire({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: data.icon,
                      loaderBg: '#fff',
                      position: 'top-right'
                  })
                }
            } 
        })

    }
})
   });
    });   

    </script>

    <script type="text/javascript">
        $('#avatar').change(function(){
            var file_data = $('#avatar').prop('files')[0];   
            var form_data = new FormData();                  
            form_data.append('avatar', file_data);
            $.ajax({
                url: "core/ajax/avatar.php",
                type: "POST",
                data: form_data,
                dataType: "json",
                contentType: false,
                cache: false,
                processData:false,
                beforeSend:function(){
                   $('.loader').show();
               }, 
               success: function(data){
                  $("#for_avatar").load(" #for_avatar");
                  if(data.status == 200)
                  {
                    Toast.fire({
                      heading: 'Uğurlu!',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'success',
                      loaderBg: '#fff',
                      position: 'top-right'
                  })
                }
                else if(data.status == 204)
                {

                    Toast.fire({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                  })
                }
            }
        });
        });
    </script>