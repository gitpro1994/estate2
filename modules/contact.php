<?php 
$title = settings('site_title');
$desc  = settings('seo_description');
$keyw  = settings('seo_keywords');
?>
<!-- START HEAD -->
<?php include_once "partials/head.php"; ?>
<!-- END HEAD -->
<!-- START TOPBAR -->
<?php include_once "partials/topbar.php"; ?>

<div class="breadcrumb-wrap">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><?= translate('Home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= translate('contact') ?></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="contact-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-box1">
                            <div class="contact-img">
                                <img src="<?= site_url() ?>assets/uploads/backgrounds/contact/<?= back_photo('contact') ?>" alt="contact" height="502" width="607">
                            </div>
                            <div class="contact-content">
                                <h3 class="contact-title"><?= translate('office_information') ?></h3>
                                <div class="contact-list">
                                    <ul>
                                        <li><?= translate('real_estate_agency') ?></li>
                                        <li><?= contact('address') ?></li>
                                    </ul>
                                </div>
                                <div class="phone-box">
                                    <div class="item-lebel">Emergency Call :</div>
                                    <div class="phone-number"><?= contact('mobile_phone') ?></div>
                                    <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                </div>
                                <div class="social-box">
                                    <div class="item-lebel">Social Share :</div>
                                    <ul class="item-social">
                                        <li><a href="<?= social('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?= social('twitter') ?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?= social('instagram') ?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?= social('youtube') ?>"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=<?= contact('mobile_phone') ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                    <div class="item-icon"><i class="fas fa-share-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-box2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d189.876030256247!2d49.86771368526795!3d40.40848560924565!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x40307d8df64325b5%3A0xe4b992bf19d8eb7a!2zZXVyb2NsZWFuIGF6ZXJiYWlqYW4sIDc0IGHEn2FuZW3JmXR1bGxhLCBCYWvEsSwg0JDQt9C10YDQsdCw0LnQtNC20LDQvQ!3m2!1d40.4084856!2d49.8677135!5e0!3m2!1sru!2sus!4v1644958468122!5m2!1sru!2sus" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="contact-content">
                                <h3 class="contact-title"><?= translate('contact_form') ?></h3>
                                <p><?= translate('contact_description') ?>
                                </p>
                                <form class="contact-box rt-contact-form" novalidate="true">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label><?= translate('name') ?> *</label>
                                            <input type="text" class="form-control" name="fname" placeholder="<?= translate('enter_name') ?>" data-error="<?= translate('enter_name') ?>" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label><?= translate('phone_number') ?> *</label>
                                            <input type="text" class="form-control" name="phone" placeholder="<?= translate('enter_phone_number') ?>" data-error="<?= translate('enter_phone_number') ?>" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label><?= translate('message') ?> *</label>
                                            <textarea name="comment" id="message" class="form-text" placeholder="<?= translate('enter_message') ?>" cols="30" rows="5" data-error="<?= translate('enter_message') ?>" required=""></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="item-btn disabled"><?= translate('send_message') ?></button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include_once "partials/footer.php"; ?>