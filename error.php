<?php 
$title = settings('site_title').'-'.translate('not_found');
$desc  = settings('seo_desc');
$keyw  = settings('seo_keyword');
 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?= site_url() ?>">
    <title><?= $title ?></title>
    <style>
    @-ms-viewport{width:device-width}
    </style>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="author" content="Karimov Aghakarim Maharram">
    <meta name="publisher" content="smartedu2021" />
    <meta name="description" content="<?= $desc ?>" />
    <meta name="keywords" content="<?= $keyw ?>" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="googlebot" content="follow, index, all">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index, follow, noodp, noydir">
    <meta name="audience" content="all">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="allow-search" content="yes">
    <meta name="country" content="Azerbaijan">
    <meta name="language" content="az">
    <meta name="content-language" content="az">
    <meta name="format-detection" content="telephone=no">
    <meta name="contact" content="<?= settings('email') ?>">
    <meta name="reply-to" content="<?= settings('email') ?>">
    <meta name="e-mail" content="<?= settings('email') ?>">
    <meta name="abstract" content="<?= translate("european_azerbaijan_school") ?>">
    <meta name="copyright" content="Bütün hüquqlar qorunur © 2021 AĞSU TƏDRİS MƏRKƏZİ ">
    <meta name="google-site-verification" content="BOrVXxRBexOOcHRNzMet4CM7BrUyrkICIsI2US3COwI" />
    <link rel="canonical" href="<?= site_url() ?>" />
    <link rel="sitemap" type="application/xml" href="<?= site_url() ?>/sitemap.xml" />
    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="300" />
    <meta property="og:image:width" content="573" />
    <meta property="og:title" content="<?= settings('site_title') ?>" />
    <meta property="og:description" content="<?= settings('seo_desc') ?>" />
    <meta property="og:url" content="<?= site_url()?>" />
    <meta property="og:image" content="<?= site_url()?>/assets/uploads/logo/<?= settings('main_logo') ?>" />
    <link rel="shortcut icon" type="image/jpg" href="<?= site_url()?>/assets/uploads/favicon/<?= settings('favicon') ?>"/>
    <meta name="google-site-verification" content="77AqeY3dAjxcbc8sDqaDE7lhn0D2e9Babqrzn6I6Bsk" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,800|Titillium+Web:200,300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/twentytwenty.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/style.php">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/yeni.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/image_plugin/src/css/swipebox.css">
    <link rel="icon" type="image/png" href="<?= site_url()?>/assets/uploads/favicon/fav.svg">
    <!--remodal -->
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/remodal.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/remodal-default-theme.css">
    <!--sweetalert2 -->
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/sweetalert2.min.css">
    <!--iziModal -->
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/iziModal.min.css" type="text/css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css" />
    <script src="<?= site_url()?>/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= site_url()?>/assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= site_url()?>/assets/js/sweetalert2.min.js"></script>
    <script src="<?= site_url()?>/assets/js/iziModal.min.js"></script>
    <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b57282384b6d76"></script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-54503473-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
	
   <section class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="error-content">
                    <img src="<?= site_url() ?>assets/img/figure/error1.png" alt="İstediğiniz sayfa bulunamadı!">
                    <h3><?= translate('page_not_found') ?></h3>
                    <p><?= word_to_trans_seo('The page you are looking for may have been removed or the URL may have been changed. You can return to the main page and try to reach the page you are looking for again.') ?></p>
                    <a href="<?= site_url() ?>" class="btn btn-primary"><?= word_to_trans_seo('Back to Homepage') ?> <i class="flaticon-next-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
	
    <script src="<?= site_url() ?>/assets/js/popper.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/parallax.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/slick.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/jquery.meanmenu.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/jquery.appear.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/odometer.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/event.move.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/twentytwenty.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/jquery.nice-select.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/wow.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/jquery.ajaxchimp.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/form-validator.min.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/contact-form-script.js" type="text/javascript"></script>
    <script src="<?= site_url() ?>/assets/js/main.js" type="text/javascript"></script>
    <script src="//ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" defer=""></script>
    <script src="<?= site_url() ?>/assets/js/remodal.js"></script>
    <script src="<?= site_url() ?>/assets/image_plugin/src/js/jquery.swipebox.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
   
    <script type="text/javascript">
    $(document).ready(function() {
        var my_cookie = $.cookie($('.modal-check').attr('name'));
        if(my_cookie && my_cookie == "true") 
        {
            $(this).prop('checked', my_cookie);
        } 
        else 
        {
            $('#actionsModal').modal('show');    
        }
        $(".modal-check").change(function() {
            $.cookie($(this).attr("name"), $(this).prop('checked'), {
                path: '/',
                expires: 1
            });
            $('#actionsModal').modal('toggle');
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        /* Basic Gallery */
        $('.swipebox').swipebox();
        /* Video */
        $('.swipebox-video').swipebox();
        /* Smooth scroll */
        $('.scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 15
            }, 750); // Go
            return false;
        });
    });
    </script>
   
    <script type="text/javascript">
    $("#modal-demo").iziModal({
        title: "",
        subtitle: "",
        iconClass: '',
        background: null,
        theme: 'light',
        closeButton: true,
        overlay: true,
        overlayClose: true,
        transitionInOverlay: 'fadeIn',
        transitionOutOverlay: 'fadeOut',
        overlayColor: 'rgba(0, 0, 0, 0.85)',
        width: 500,
        padding: 20
    });
    $(document).on('click', '.trigger-link', function(event) {
        event.preventDefault();
        $('#modal-demo').iziModal('open');
    });
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.4/cookieconsent.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.4/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#fe235b"
                },
                "button": {
                    "background": "#fff",
                    "text": "#000000"
                }
            },
            "theme": "classic",
            "position": "bottom-right",
            "content": {
                "message": "<?= translate('cookies_are_used_on_this_website_in_order_to_improve_the_user_experience_and_ensure_the_efficient_operation_of_the_website.') ?>",
                "dismiss": "<?= translate('agree') ?>",
                "link": "<?= translate('check_out_the_details') ?>",
                "href": "<?= site_url() ?>/cookies"
            }
        })
    });
    </script>
    <script>
    $(window).bind('load', function() {
        $('img').each(function() {
            if((typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) || this.readyState == 'uninitialized') {
                $(this).attr('src', '<?= site_url() ?>/assets/uploads/logo/<?= settings('main_logo') ?>');
            }
        });
    });
    </script>
	
</body>
</html>
