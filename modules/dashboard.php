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
            <!-- header end  -->    
            <!-- wrapper  -->   
            <div id="wrapper">
                <!-- dashbard-menu-wrap --> 
                <div class="dashbard-menu-overlay"></div>
                <?php include_once ("partials/dash_sidebar.php") ?>
                <!-- dashbard-menu-wrap end  -->        
                <!-- content -->    
                <div class="dashboard-content">
                    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
                    <div class="container dasboard-container">
                        <!-- dashboard-title -->    
                        <div class="dashboard-title fl-wrap">
                            <div class="dashboard-title-item"><span><?= translate('dashboard') ?></span></div>
                            <div class="dashbard-menu-header">
                                <div class="dashbard-menu-avatar fl-wrap">
                                    <img src="<?= site_url() ?>assets/images/avatar/<?php echo users_info($_SESSION['id'],'avatar') ?>" alt="<?php echo users_info($_SESSION['id'],'name') ." ".users_info($_SESSION['id'],'surname') ; ?>">

                                    <h4><?php echo users_info($_SESSION['id'],'name') ." ".users_info($_SESSION['id'],'surname') ; ?></h4>
                                </div>
                                <a href="<?= site_url() ?>logout" class="log-out-btn   tolt" data-microtip-position="bottom"  data-tooltip="Log Out"><i class="far fa-power-off"></i></a>
                            </div>
                            <!--Tariff Plan menu-->
                            
                            <!--Tariff Plan menu end-->                     
                        </div>
                        <!-- dashboard-title end -->        
                        <div class="dasboard-wrapper fl-wrap no-pag">
                            <div class="dashboard-stats-container fl-wrap">
                                <div class="row">

                                    <!-- <div class="col-md-4">
                                        <div class="dashboard-stats fl-wrap">
                                            <i class="fal fa-map-marked"></i>
                                            <h4><?= translate('all_listings') ?></h4>
                                            <div class="dashboard-stats-count">0</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-stats fl-wrap">
                                            <i class="fal fa-chart-bar"></i>
                                            <h4><?= translate('printed') ?></h4>
                                            <div class="dashboard-stats-count">0</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-stats fl-wrap">
                                            <i class="fal fa-comments-alt"></i>
                                            <h4><?= translate('expired') ?></h4>
                                            <div class="dashboard-stats-count">0</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-stats fl-wrap">
                                            <i class="fal fa-heart"></i>
                                            <h4><?= translate('under_inspection') ?></h4>
                                            <div class="dashboard-stats-count">0</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-stats fl-wrap">
                                            <i class="fal fa-comments-alt"></i>
                                            <h4><?= translate('expired') ?></h4>
                                            <div class="dashboard-stats-count">0</div>
                                        </div>
                                    </div>
                                           -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="notification success-notif  fl-wrap">
                                        <p>Your listing <a href="#">Family house in Brooklyn</a> has been approved!</p>
                                        <a class="notification-close" href="#"><i class="fal fa-times"></i></a>
                                    </div>
                                    <div class="dashboard-widget-title fl-wrap">Your  Statistic</div>
                                    <div class="dasboard-content fl-wrap">
                                        <!-- chart-wra-->
                                        <div class="chart-wrap   fl-wrap">
                                            <div class="chart-header fl-wrap">
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="Week" class="chosen-select no-search-select" >
                                                        <option>Week</option>
                                                        <option>Month</option>
                                                        <option>Year</option>
                                                    </select>
                                                </div>
                                                <div id="myChartLegend"></div>
                                            </div>
                                            <canvas id="canvas-chart"></canvas>
                                        </div>
                                        <!--chart-wrap end-->                                   
                                    </div>
                                    <div class="dashboard-widget-title fl-wrap">Last Activites</div>
                                    <div class="dashboard-list-box  fl-wrap">
                                        <!-- dashboard-list end-->
                                        <div class="dashboard-list fl-wrap">
                                            <div class="dashboard-message">
                                                <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                                                <div class="main-dashboard-message-icon color-bg"><i class="far fa-check"></i></div>
                                                <div class="main-dashboard-message-text">
                                                    <p>Your listing <a href="#">Urban Appartmes</a> has been approved! </p>
                                                </div>
                                                <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> 28 may 2020</div>
                                            </div>
                                        </div>
                                        <!-- dashboard-list end-->
                                        <!-- dashboard-list end-->
                                        <div class="dashboard-list fl-wrap">
                                            <div class="dashboard-message">
                                                <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                                                <div class="main-dashboard-message-icon color-bg"><i class="fal fa-comment-alt"></i></div>
                                                <div class="main-dashboard-message-text">
                                                    <p> Someone left a review on <a href="#">Park Central</a> listing!</p>
                                                </div>
                                                <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> 28 may 2020</div>
                                            </div>
                                        </div>
                                        <!-- dashboard-list end-->
                                        <!-- dashboard-list end-->
                                        <div class="dashboard-list fl-wrap">
                                            <div class="dashboard-message">
                                                <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                                                <div class="main-dashboard-message-icon color-bg"><i class="far fa-heart"></i></div>
                                                <div class="main-dashboard-message-text">
                                                    <p><a href="#">Fider Mamby</a> bookmarked your <a href="#">Holiday Home</a> listing!</p>
                                                </div>
                                                <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> 28 may 2020</div>
                                            </div>
                                        </div>
                                        <!-- dashboard-list end-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!--box-widget-->
                                    <div class="dasboard-widget fl-wrap">
                                        <div class="dasboard-widget-title fl-wrap">
                                            <h5><i class="fas fa-comment-alt"></i>Last Messages</h5>
                                        </div>
                                        <div class="chat-contacts fl-wrap">
                                            <!-- chat-contacts-item-->
                                            <a class="chat-contacts-item" href="#">
                                                <div class="dashboard-message-avatar">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                    <div class="message-counter">2</div>
                                                </div>
                                                <div class="chat-contacts-item-text">
                                                    <h4>Mark Rose</h4>
                                                    <span>27 Dec 2018 </span>
                                                    <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                </div>
                                            </a>
                                            <!-- chat-contacts-item -->
                                            <!-- chat-contacts-item-->
                                            <a class="chat-contacts-item" href="#">
                                                <div class="dashboard-message-avatar">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                    <div class="message-counter">1</div>
                                                </div>
                                                <div class="chat-contacts-item-text">
                                                    <h4>Adam Koncy</h4>
                                                    <span>27 Dec 2018 </span>
                                                    <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                </div>
                                            </a>
                                            <!-- chat-contacts-item -->
                                            <!-- chat-contacts-item-->
                                            <a class="chat-contacts-item chat-contacts-item_active" href="#">
                                                <div class="dashboard-message-avatar">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                    <div class="message-counter">3</div>
                                                </div>
                                                <div class="chat-contacts-item-text">
                                                    <h4>Andy Smith</h4>
                                                    <span>27 Dec 2018 </span>
                                                    <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                </div>
                                            </a>
                                            <!-- chat-contacts-item -->
                                            <!-- chat-contacts-item-->
                                            <a class="chat-contacts-item" href="#">
                                                <div class="dashboard-message-avatar">
                                                    <img src="images/avatar/5.jpg" alt="">
                                                    <div class="message-counter">4</div>
                                                </div>
                                                <div class="chat-contacts-item-text">
                                                    <h4>Joe Frick</h4>
                                                    <span>27 Dec 2018 </span>
                                                    <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                </div>
                                            </a>
                                            <!-- chat-contacts-item -->
                                            <!-- chat-contacts-item-->
                                            <a class="chat-contacts-item" href="#">
                                                <div class="dashboard-message-avatar">
                                                    <img src="images/avatar/4.jpg" alt="">
                                                </div>
                                                <div class="chat-contacts-item-text">
                                                    <h4>Alise Goovy</h4>
                                                    <span>27 Dec 2018 </span>
                                                    <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                </div>
                                            </a>
                                            <!-- chat-contacts-item -->
                                            <!-- chat-contacts-item-->
                                            <a class="chat-contacts-item" href="#">
                                                <div class="dashboard-message-avatar">
                                                    <img src="images/avatar/6.jpg" alt="">
                                                </div>
                                                <div class="chat-contacts-item-text">
                                                    <h4>Cristiano Olando</h4>
                                                    <span>27 Dec 2018 </span>
                                                    <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                </div>
                                            </a>
                                            <!-- chat-contacts-item -->
                                        </div>
                                    </div>
                                    <!--box-widget end -->                              
                                    <!--box-widget-->
                                    <div class="box-widget fl-wrap">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg  "  data-bg="images/all/blog/1.jpg"></div>
                                            </div>
                                            <div class="banner-widget_content">
                                                <h5>Participate in our loyalty program. Refer a friend and get a discount.</h5>
                                                <a href="#" class="btn float-btn color-bg small-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget end -->                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-footer -->
                    <div class="dashboard-footer">
                        <div class="dashboard-footer-links fl-wrap">
                            <span>Helpfull Links:</span>
                            <ul>
                                <li><a href="about.html">About  </a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="help.html">Help Center</a></li>
                            </ul>
                        </div>
                        <a href="#main" class="dashbord-totop  custom-scroll-link"><i class="fas fa-caret-up"></i></a>
                    </div>
                    <!-- dashboard-footer end -->               
                </div>
                <!-- content end -->    
                <div class="dashbard-bg gray-bg"></div>
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="<?= site_url() ?>/assets/js/jquery.min.js"></script>
        <script src="<?= site_url() ?>/assets/js/plugins.js"></script>
        <script src="<?= site_url() ?>/assets/js/scripts.js"></script>
        <script src="<?= site_url() ?>/assets/js/charts.js"></script>
        <script src="<?= site_url() ?>/assets/js/dashboard.js"></script>
        <script type="text/javascript">
        $(window).bind('load', function() {
            $('img').each(function() {
                if((typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) || this.readyState == 'uninitialized') {
                    $(this).attr('src', '<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>');
                }
            });
        });
        </script>
    </body>
</html>