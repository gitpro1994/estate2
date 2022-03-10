<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$select_fav = "SELECT * FROM wishlists WHERE session_id='" . $_SESSION['unique_session'] . "'";
$run_select = mysqli_query($conn, $select_fav);
$data_id_while = [];
while ($bax = mysqli_fetch_array($run_select)) {
    $data_id_while[] = $bax['data_id'];
}
$d = implode(",", $data_id_while);
// dd($d);

$sel = "
			SELECT a.id AS ads_id,
	        a.rooms AS ads_rooms,
	        a.kind_id AS ads_kind_id,
	        a.type_id AS ads_type_id,
	        a.area AS ads_area,
	        a.office_kind AS ads_office_kind,
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
			WHERE a.status=2 AND a.id IN ($d) 
			ORDER BY a.id DESC";
$run = mysqli_query($conn, $sel);
$count_r = count($data_id_while);

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
                    <?= translate('favourites') ?>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="grid-wrap1 grid-wrap2">
    <div class="container">


        <div class="row mt-5">
            <div class="col-lg-12">
                <?php if ($count_r > 0) { ?>
                    <div class="row justify-content-left">
                        <?php while ($nn = mysqli_fetch_array($run)) {
                            $images_listings = $nn['ads_images'];
                            $image_listing = explode(',', $images_listings);
                            $wish = (wish($_SESSION['unique_session'], $nn['ads_id'])) ? 'fa fa-heart' : 'flaticon-heart';
                        ?>
                            <div class="col-lg-4 col-md-6" id="ri_<?= $nn['ads_id']; ?>">
                                <div class="property-box2 fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img">
                                        <a href="<?= site_url() ?>detail/<?= $nn['ads_sef_url'] ?>"><img src="<?= site_url() ?>uploads/<?= $image_listing[0] ?>" alt="blog" style="height: 330px; width:100%"></a>
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
                                            <span class="badge rtcl-badge-_bump_up" onclick="remove_item(<?= $nn['ads_id'] ?>)" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= translate('remove') ?>"><i class="fa fa-times"></i></span>
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
                <?php } else { ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-info">
                            <b><?= translate('there_is_no_ad_attached_to_the_favorites') ?></b>
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

    function remove_item(id) {
        let url = $("#base_url").val();
        $.ajax({
            url: url + "core/ajax/remove_item.php",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                parsed = JSON.parse(data);
                Toast.fire({
                    text: parsed.message,
                    icon: 'success',
                    position: 'top-right'
                })
                $("#ri_" + id).fadeOut('slow');
                $(".item-count").html(parsed.count);
            }
        })
    }
</script>