<?php 

$user_data = mysqli_query($conn,"SELECT * FROM ads_users WHERE email='".$_SESSION['mail']."' ");
$bax       = mysqli_fetch_array($user_data);

// $pass = password_generate();
// $hash = hash_password($pass);
// echo "<pre>";
// echo $pass;
// echo "<br>";
// echo $hash;
// echo "</pre>";
// die();

?>


<div class="wrapper" id="wrapper">
    <header class="rt-header sticky-on">
        <div id="sticky-placeholder"></div>
        <div id="navbar-wrap" class="header-menu menu-layout1 header-menu menu-layout3">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-area">
                            <a href="<?= site_url() ?>" class="temp-logo">
                                <img src="<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>" width="157" height="40" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 d-flex justify-content-end">
                        <div class="header-action-layout1">
                            <ul class="action-list">
                                <?php 
                                $rk  = "SELECT * FROM realty_kinds WHERE status=1";
                                $rkr = mysqli_query($conn,$rk);
                                while ($bax = mysqli_fetch_array($rkr)) {
                                    ?>
                                    <li class="action-item-style left-right-btn">
                                        <a href="<?= site_url() ?>items/<?= $bax['seo_link'] ?>" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="<?= translate($bax['kind_name']) ?>">
                                            <i class="<?= $bax['icons'] ?>"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                                
                                <li class="action-item-style left-right-btn">
                                    <a href="<?= site_url() ?>contact" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="<?= translate('contac') ?>">
                                        <i class="fa fa-address-book icon-round"></i>
                                    </a>
                                </li>
                                <li class="action-item-style left-right-btn">
                                    <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Compare">
                                    <i class="flaticon-left-and-right-arrows icon-round"></i>
                                    <div class="item-count">0</div>
                                </a>
                            </li>
                            <li class="action-item-style wish-btn">
                                <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Favourites">
                                <i class="flaticon-heart icon-round"></i>
                                <div class="item-count">0</div>
                            </a>
                        </li>
                        <?php 
                        if(isset($_SESSION['mail']))
                        {
                            ?>
                            <li class="action-item-style my-account">
                                <a href="<?= site_url() ?>dashboard" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="<?= translate('dashboard') ?>">
                                    <i class="flaticon-user-1 icon-round"></i>
                                </a>
                            </li>
                            <li class="action-item-style my-account">
                                <a href="<?= site_url() ?>logout" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="<?= translate('logout') ?>">
                                    <i class="fas fa-sign-out-alt icon-round"></i>
                                </a>
                            </li>
                            <?php }else{ ?>
                            <li class="action-item-style my-account">
                                <a href="<?= site_url() ?>login" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="<?= translate('login') ?>">
                                    <i class="flaticon-user-1 icon-round"></i>
                                </a>
                            </li>
                            <?php } ?>
                        <li class="listing-button">
                            <a href="<?= site_url() ?>add_listing" class="listing-btn">
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
  <a href="index.html">
      <img src='<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>' alt='logo' class='img-fluid'/>
  </a>
  <div class="mean-bar--right">
   <div class="actions search">
    <a href="#template-search" class="item-icon" title="Search">
        <i class="fas fa-search"></i>
    </a>
</div>
<div class="actions user">
    <a href="account.html"><i class="flaticon-user"></i></a>
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
<li class="list menu-item-parent menu-item-has-children">
  <a class="animation" href="with-sidebar2.html">Listing</a>
  <ul class="main-menu__dropdown sub-menu">
   <li>
    <a href="half-map1.html">Properties Map Grid</a>
</li>
<li>
    <a href="half-map2.html">Properties Map List</a>
</li>
<li>
    <a href="without-sidebar.html">Properties Full Width</a>
</li>
<li>
    <a href="with-sidebar.html">Properties Grid</a>
</li>
<li>
    <a href="single-listing1.html">Single Property 1</a>
</li>
<li>
    <a href="single-listing2.html">Single Property 2</a>
</li>
<li>
    <a href="single-listing3.html">Single Property 3</a>
</li>
</ul>
</li>
<li class="list menu-item-parent menu-item-has-children">
  <a class="animation" href="index.html">Pages</a>
  <ul class="main-menu__dropdown sub-menu">
   <li><a href="https://www.radiustheme.com/demo/html/homlisti/about.html">About Us</a></li>
   <li><a href="404.html">Error page</a></li>
   <li>
    <a href="with-sidebar.html">Properties Grid</a>
</li>
<li><a href="without-sidebar.html">Properties Full Width</a></li>
<li><a href="single-agency1.html">Single Agency page</a></li>
<li><a href="single-agent1.html">Single-agent page</a></li>
<li><a href="pricing-1.html">Pricing page</a></li>
</ul>
</li>
<li class="list menu-item-parent menu-item-has-children">
  <a class="animation" href="index.html">Blog</a>
  <ul class="main-menu__dropdown sub-menu">
   <li><a href="blog1.html">Blog 1</a></li>
   <li><a href="blog2.html">Blog 2</a></li>
   <li><a href="blog-details1.html">Blog Details Page</a></li>
</ul>
</li>
<li class="list menu-item-parent menu-item-has-children">
  <a class="animation" href="index.html">Agents</a>
  <ul class="main-menu__dropdown sub-menu">
   <li><a href="agency-lists1.html">Agency List page</a></li>
   <li><a href="agent-lists1.html">Agent List Page</a></li>
   <li><a href="agent-reviews1.html">Agent Reviews Page</a></li>
</ul>
</li>
<li class="list menu-item-parent">
  <a class="animation" href="contact.html">Contact us</a>
</li>
</ul>
</nav>
</div>
</div>
</div>