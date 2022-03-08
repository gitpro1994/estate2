<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="page-title mt-0 mb-0">
                <h3><?= translate('add_new_city') ?></h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                        <li><a href="<?= base_url() ?>/cities"><?= translate('users') ?></a></li>
                        <li class="active"><a href="#"><?= translate('add_user') ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-auto mt-5 d-inline-block float-right">
                <label class="float-right text-white badge badge-danger ml-1">
                    <big><?= translate('your_device'); ?>: <?= user_brauzer($_SERVER['HTTP_USER_AGENT']); ?></big>
                </label>
                <label class="badge badge-secondary m-t-10"><?= translate('your_ip') ?> : <big><b><?= getIP(); ?></b></big></label>
                <label class="badge badge-dark m-t-10"><?= translate('last_visited_page'); ?> : <big><b><?= user_data('last_visited_page', $_SESSION['loggedin_id']) ?></b></big></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="user_add_form" method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="title"><?= translate('name') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="name" id="name" value="">
                            </div>
                            <div class="form-group">
                                <label for="title"><?= translate('surname') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="surname" id="surname" value="">
                            </div>
                            <div class="form-group">
                                <label for="title"><?= translate('email') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" value="">
                            </div>
                            <div class="form-group">
                                <label for="title"><?= translate('phone_number') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="phone_number" id="phone_number" value="">
                            </div>
                            <div class="form-group">
                                <label for="title"><?= translate('password') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="password" class="form-control form-control-sm" name="password" id="password" value="">
                            </div>
                            <div class="form-group">
                                <label for="title"><?= translate('confirm_password') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="password" class="form-control form-control-sm" name="confirm_password" id="confirm_password" value="">
                            </div>
                            <div class="form-group">
                                <label for="title"><?= translate('user_type') ?> <i class="icon-info text-info" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <select class="form-control" name="user_type" id="user_type">
                                    <option value=""><?= translate('please_select_one_item') ?></option>
                                    <option value="0"><?= translate('share_my_listing') ?></option>
                                    <option value="1"><?= translate('a_rielitor') ?></option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label class="switch">
                                    <input type="checkbox" name="status" id="status" value="1" checked="">
                                    <span class="slider"></span>
                                </label>
                                <label class="d-inline-block" style="line-height: 34px;" for="status"><?= translate('status') ?></label>
                            </div>
                            <button id="add_user" type="submit" name="add_user" class="btn btn-primary btn-icon-text btn-sm">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                <?= strtoupper(translate('save')) ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>