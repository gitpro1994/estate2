<?php
session_start();
// dd($_SESSION);
if (!isset($_SESSION["mail"])) {
    header("location: home");
}
?>
<?php
// dd(hash("sha256", "Cavid123"));
$title = settings('site_title');
$desc  = settings('seo_description');
$keyw  = settings('seo_keywords');
$sel            = "SELECT * FROM ads AS a INNER JOIN ads_users AS au ON a.user_id='" . $_SESSION['id'] . "' INNER JOIN cities AS c ON a.city_id=c.id LEFT JOIN regions AS r ON a.regions=r.id INNER JOIN realty_kinds AS rk ON a.kind_id=rk.id INNER JOIN realty_types AS rt ON a.type_id=rt.id GROUP BY a.id ORDER BY a.id";
$run            = mysqli_query($conn, $sel);
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

            <div class="col-lg-3 widget-break-lg sidebar-widget">
                <div class="team-box1 team-box5">
                    <label for="avatar" style="color: white;">
                        <div class="item-img">
                            <div id="for_avatar">
                                <?php if (users_info($_SESSION['id'], 'avatar') == '') { ?>
                                    <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/default.png" alt="">
                                <?php } else { ?>
                                    <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/<?= users_info($_SESSION['id'], 'avatar') ?>" alt="">
                                <?php } ?>
                            </div>
                            <input type="file" name="avatar" id="avatar" style="display:none">
                            <br>
                            <strong class="btn btn-outline-info mt-3 btn-sm w-100 p-3 ">
                                <i class="fas fa-file"></i>
                                <?= translate('upload_photo') ?></strong>
                            <input type="hidden" name="freeze_account" id="freeze_account" value="<?= users_info($_SESSION['id'], 'id'); ?>">
                            <button class="btn btn-outline-primary mt-3 btn-sm w-100 p-3 freeze " type="submit">
                                <i class="fas fa-times"></i>
                                <?= translate('freeze_account') ?>
                            </button>
                            <input type="hidden" name="delete_account" id="delete_account" value="<?= users_info($_SESSION['id'], 'id'); ?>">
                            <button class="btn btn-outline-danger mt-3 btn-sm w-100 p-3 delete " type="submit">
                                <i class="fas fa-trash"></i>
                                <?= translate('delete_account') ?>
                            </button>
                        </div>
                    </label>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="team-box1 team-box5">

                    <div class="item-content">
                        <div class="item-title">
                            <div class="item-details"></div>
                        </div>

                        <form id="update_profile" method="POST">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"><i class="fas fa-user"></i> &nbsp; <?= translate('name') ?></label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control form-control-sm" id="name" name="name" value="<?= users_info($_SESSION['id'], 'name')  ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"><i class="fas fa-user"></i> &nbsp; <?= translate('surname') ?></label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control form-control-sm" id="surname" name="surname" value="<?= users_info($_SESSION['id'], 'surname')  ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"><i class="fas fa-user"></i> &nbsp; <?= translate('username') ?></label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control form-control-sm" id="username" name="username" value="<?= users_info($_SESSION['id'], 'username')  ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"><i class="fas fa-phone-alt"></i> &nbsp; <?= translate('phone_number') ?></label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control form-control-sm" readonly id="phone_number" name="phone_number" value="<?= users_info($_SESSION['id'], 'phone_number')  ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"><i class="fas fa-envelope"></i> &nbsp; <?= translate('email') ?></label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control form-control-sm" id="email" name="email" value="<?= users_info($_SESSION['id'], 'email')  ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-8 justify-content-end">
                                    <button class=" btn btn-outline-info" id="update_user_data"> <i class="fas fa-check"></i> <?= translate('update') ?></button>
                                </div>
                            </div>
                        </form>

                        <hr>

                        <form id="update_password">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">
                                    <i class="fas fa-lock"></i>
                                    &nbsp; <?= translate('password') ?></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword" placeholder="<?= translate('enter_password') ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">
                                    <i class="fas fa-lock-open"></i>
                                    &nbsp; <?= translate('new_password') ?></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword" placeholder="<?= translate('enter_new_password') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">
                                    <i class="fas fa-lock-open"></i>
                                    &nbsp; <?= translate('repeat_new_password') ?></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword" placeholder="<?= translate('enter_new_password_repeat') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-8 justify-content-end">
                                    <button class=" btn btn-outline-info"> <i class="fas fa-check"></i> <?= translate('update') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-style-1">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all_listings"><?= translate('all_listings') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#under_inspection"><?= translate('under_inspection') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#expired"><?= translate('expired') ?></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all_listings" role="tabpanel">
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
                                                    <select class="select single-select mr-0">
                                                        <option value="1"><?= translate('by_date') ?></option>
                                                        <option value="2"><?= translate('cheap_firstly') ?></option>
                                                        <option value="3"><?= translate('expensive_firstly') ?></option>
                                                    </select>
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
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="under_inspection" role="tabpanel">
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
                                                    <select class="select single-select mr-0">
                                                        <option value="1"><?= translate('by_date') ?></option>
                                                        <option value="2"><?= translate('cheap_firstly') ?></option>
                                                        <option value="3"><?= translate('expensive_firstly') ?></option>
                                                    </select>
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
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="expired" role="tabpanel">
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
                                                    <select class="select single-select mr-0">
                                                        <option value="1"><?= translate('by_date') ?></option>
                                                        <option value="2"><?= translate('cheap_firstly') ?></option>
                                                        <option value="3"><?= translate('expensive_firstly') ?></option>
                                                    </select>
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
                                </div>
                            </div>
                        </div>
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
            if ((typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) || this.readyState == 'uninitialized') {
                $(this).attr('src', '<?= site_url() ?>/assets/uploads/logo/<?= settings('logo') ?>');
            }
        });
    });
</script>

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
                        data: {
                            id: id
                        },
                        success: function(data) {
                            data = JSON.parse(data);

                            if (data.status == 200) {
                                Toast.fire({
                                    heading: 'Uğurlu!',
                                    text: data.message,
                                    showHideTransition: 'slide',
                                    icon: data.icon,
                                    loaderBg: '#fff',
                                    position: 'top-right'
                                })
                            } else if (data.status == 204) {

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
                        data: {
                            id: id
                        },
                        success: function(data) {
                            console.log(data);
                            if (data.status == 200) {
                                Toast.fire({
                                    heading: 'Uğurlu!',
                                    text: data.message,
                                    showHideTransition: 'slide',
                                    icon: data.icon,
                                    loaderBg: '#fff',
                                    position: 'top-right'
                                })
                            } else if (data.status == 204) {

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
    $('#avatar').change(function() {
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
            processData: false,
            beforeSend: function() {
                $('.loader').show();
            },
            success: function(data) {
                $("#for_avatar").load(" #for_avatar");
                if (data.status == 200) {
                    Toast.fire({
                        text: data.message,
                        icon: 'success',
                        position: 'top-right'
                    })
                } else if (data.status == 204) {

                    Toast.fire({
                        text: data.message,
                        icon: 'error',
                        position: 'top-right'
                    })
                }
            }
        });
    });
    
        $("#update_user_data").click(function(e) {
            e.preventDefault();
            var data = $("#update_profile").serialize();

            $.ajax({
                url: "core/ajax/update_profile.php",
                type: "POST",
                data: data,
                success: function(response) {
                    var data = JSON.parse(response)
                    if(data.status == 200)
                            {
                                Toast.fire({
                                  text: data.message,
                                  icon: data.icon,
                                  position: 'top-right'
                                })
                            }
                            else if(data.status == 204)
                            {

                                Toast.fire({
                                  text: data.message,
                                  icon: data.icon,
                                  position: 'top-right'
                              })
                            }
                }
            });
        });
    });
</script>