<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="page-title mt-0 mb-0">
                <h3><?= translate('edit_city') ?></h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                        <li><a href="<?= base_url() ?>/users"><?= translate('users') ?></a></li>
                        <li><a href="#"><?= translate('edit_user') ?></a></li>
                        <li class="active"><a href="#"><?= userById($_GET['id'], 'name') ?></a></li>
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
                        <form class="forms-sample" id="user_edit_form" method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" id="user_id" value="<?= $_GET['id'] ?>">
                            <div class="form-group">
                                <label for="title"><?= translate('name') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="name" id="name" value="<?= userById($_GET['id'], 'name') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('surname') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="surname" id="surname" value="<?= userById($_GET['id'], 'surname') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('email') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" value="<?= userById($_GET['id'], 'email') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('phone_number') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="phone_number" id="phone_number" value="<?= userById($_GET['id'], 'phone_number') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('username') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="text" class="form-control form-control-sm" name="username" id="username" value="<?= userById($_GET['id'], 'username') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('old_password') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="password" class="form-control form-control-sm" name="old_password" id="old_password" placeholder="<?= translate('enter_old_password') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('new_password') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="password" class="form-control form-control-sm" name="new_password" id="new_password" placeholder="<?= translate('enter_new_password') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('confirm_new_password') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <input type="password" class="form-control form-control-sm" name="confirm_new_password" id="confirm_new_password" placeholder="<?= translate('confirm_new_password') ?>">
                            </div>

                            <div class="form-group">
                                <label for="title"><?= translate('user_type') ?> <i class="icon-info text-info" data-toggle="popover" data-content="<?= word_to_trans_seo('Do not write a capital letter in the name of the blog. Headings longer than 70 characters will not be displayed or evaluated in Google index. For this reason, do not use long headers. Do not use double and single quote in the headers.') ?>" data-trigger="hover" data-original-title="<?= translate('city_name') ?>"></i></label>
                                <select name="user_type" id="user_type" class="form-control">
                                    <option value=""><?= translate('please_select_one_item') ?></option>
                                    <option value="0" <?= (userById($_GET['id'], 'user_type') == 0 ? 'selected' : '') ?>><?= translate('share_my_listing') ?></option>
                                    <option value="1" <?= (userById($_GET['id'], 'user_type') == 1 ? 'selected' : '') ?>><?= translate('a_rielitor') ?></option>
                                </select>
                            </div>



                            <button id="edit_user" type="submit" name="edit_user" class="btn btn-primary btn-icon-text btn-sm">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                <?= strtoupper(translate('update')) ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>