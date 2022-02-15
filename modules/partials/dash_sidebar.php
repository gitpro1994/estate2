<div class="dashbard-menu-wrap">
                    <div class="dashbard-menu-close"><i class="fal fa-times"></i></div>
                    <div class="dashbard-menu-container">
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>Main</h3>
                            <ul class="no-list-style">
                                <li><a href="<?= site_url() ?>dashboard" class="user-profile-act"><i class="fal fa-chart-line"></i><?= translate('dashboard') ?></a></li>
                                <li><a href="<?= site_url() ?>profile"><i class="fal fa-user-edit"></i><?= translate('profile_settings') ?></a></li>
                                <li><a href="dashboard-agents.html"><i class="fal fa-users"></i> Agents List</a></li>
                                <li>
                                    <a href="#" class="submenu-link"><i class="fal fa-plus"></i>Submenu</a>
                                    <ul  class="no-list-style">
                                        <li><a href="#"><i class="fal fa-th-list"></i> Submenu 2 </a></li>
                                        <li><a href="#"> <i class="fal fa-calendar-check"></i> Submenu 2</a></li>
                                        <li><a href="#"><i class="fal fa-comments-alt"></i>Submenu 2</a></li>
                                        <li><a href="#"><i class="fal fa-file-plus"></i> Submenu 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>Listings</h3>
                            <ul  class="no-list-style">
                                <li><a href="dashboard-listing-table.html"><i class="fal fa-th-list"></i><?= translate('my_listings') ?></a></li>
                                <li><a href="<?= site_url() ?>add_listing"><i class="fal fa-file-plus"></i><?= translate('add_new_listing') ?></a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end--> 
                    </div>
                    <div class="dashbard-menu-footer"> &#169;  estate.az - 2022 .  <?= translate('all_rights_reserved') ?>.</div>
                </div>