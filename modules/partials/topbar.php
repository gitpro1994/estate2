<div class="wrapper" id="wrapper">
    <header class="rt-header sticky-on">
        <div id="sticky-placeholder"></div>
        <div id="navbar-wrap" class="header-menu menu-layout1 header-menu menu-layout3">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-area">
                            <a href="<?= site_url() ?>" class="temp-logo">
                                <img src="<?= site_url() ?>assets/uploads/logo/<?= settings('logo') ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 d-flex justify-content-end">
                        <div class="header-action-layout1">
                            <ul class="action-list">
                                <?php
                                $rk  = "SELECT * FROM realty_kinds WHERE status=2";
                                $rkr = mysqli_query($conn, $rk);
                                while ($bax = mysqli_fetch_array($rkr)) {
                                ?>
                                    <li class="action-item-style left-right-btn">
                                        <a href="<?= site_url() ?>kinds/<?= $bax['seo_link'] ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate($bax['kind_name']) ?>">
                                            <i class="<?= $bax['icons'] ?>"></i>
                                        </a>
                                    </li>
                                <?php } ?>

                                <li class="action-item-style left-right-btn">
                                    <a href="<?= site_url() ?>contact" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate('contact') ?>">
                                        <i class="fa fa-address-book icon-round"></i>
                                    </a>
                                </li>

                                <li class="action-item-style wish-btn">
                                    <a href="<?= site_url() ?>favourites" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Favourites">
                                        <i class="flaticon-heart icon-round"></i>
                                        <div class="item-count"><?= wish_count($_SESSION['unique_session']) ?></div>
                                    </a>
                                </li>
                                <?php
                                if (isset($_SESSION['mail'])) {
                                ?>
                                    <li class="action-item-style my-account" id="topbar-image">
                                        <a href="<?= site_url() ?>dashboard" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate('dashboard') ?>">
                                            <?php if (users_info($_SESSION['id'], 'avatar')) { ?>
                                                <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/<?= users_info($_SESSION['id'], 'avatar') ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%">
                                            <?php } else { ?>
                                                <i class="flaticon-user-1 icon-round"></i>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <li class="action-item-style my-account">
                                        <a href="<?= site_url() ?>logout" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate('logout') ?>">
                                            <i class="fas fa-sign-out-alt icon-round"></i>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li class="action-item-style my-account">
                                        <a href="<?= site_url() ?>login" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate('login') ?>">
                                            <i class="flaticon-user-1 icon-round"></i>
                                        </a>
                                    </li>
                                    <li class="action-item-style my-account">
                                        <a href="<?= site_url() ?>register" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate('register') ?>">
                                            <i class="fas fa-user-plus icon-round"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                                <li class="listing-button">
                                    <a href="<?= site_url() ?>add_listing" class="listing-btn shw_num_anime">
                                        <span>
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                                        <span class="item-text"><?= translate('add_listing') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="rt-header-menu mean-container position-relative" id="meanmenu">
        <div class="mean-bar">
            <a href="<?= site_url() ?>">
                <img src='<?= site_url() ?>/assets/uploads/logo/<?= settings('logo') ?>' alt='logo' style="height: 70px; width:100%" />
            </a>
            <div class="mean-bar--right">
                <div class="actions search">
                    <a href="#template-search" class="item-icon" title="Search">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <div class="actions user">
                    <?php if (users_info($_SESSION['id'], 'avatar')) { ?>
                        <a href="<?= site_url() ?>dashboard" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?= translate('dashboard') ?>">
                            <img class="img-fluid" src="<?= site_url() ?>assets/img/avatar/<?= users_info($_SESSION['id'], 'avatar') ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%">
                        </a>
                    <?php } else { ?>
                        <a href="<?= site_url() ?>login"><i class="flaticon-user"></i></a>
                    <?php } ?>
                </div>
                <span class="sidebarBtn">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </div>
        </div>
        <div class="rt-slide-nav">
            <div class="offscreen-navigation">
                <nav class="menu-main-primary-container">
                    <ul class="menu">
                        <li class="list menu-item-parent menu-item-has-children">
                            <a class="animation" href="index.html">Home</a>
                            <ul class="main-menu__dropdown sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index2.html">Home 02</a></li>
                                <li><a href="index3.html">Home 03</a></li>
                                <li><a href="index4.html">Home 04</a></li>
                                <li><a href="index5.html">Home 05</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>