<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <div class="page-title mt-0 mb-0">
            <h3><?= translate('background_images') ?></h3>
            <div class="crumbs">
               <ul id="breadcrumbs" class="breadcrumb">
                  <li><a href="<?= base_url() ?>"><i class="icon-home menu-icon"></i></a></li>
                  <li><a href="#"><?= translate('site_configuration') ?></a></li>
                  <li class="active"><a href="#"><?= translate('background_images') ?></a></li>
               </ul>
            </div>
         </div>
         <div class="col col-auto mt-5 d-inline-block float-right">
           <label class="float-right text-white badge badge-danger ml-1">
               <big><?= translate('your_device'); ?>: <?= user_brauzer($_SERVER['HTTP_USER_AGENT']); ?></big>
           </label> 
           <label class="badge badge-secondary m-t-10"><?= translate('your_ip') ?> : <big><b><?= getIP(); ?></b></big></label> 
           <label class="badge badge-dark m-t-10"><?= translate('last_visited_page'); ?> : <big><b><?= user_data('last_visited_page',$_SESSION['loggedin_id']) ?></b></big></label>
         </div>
      </div>
      <div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">                      
            <form class="forms-sample" method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('login_page_background') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="login_page" id="login_page" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_login" class="row lightGallery">
                              <a class="mx-auto" href="<?= base_url() ?>/assets/images/auth/<?= back_photo('login') ?>">
                                 <img src="<?= base_url() ?>/assets/images/auth/<?= back_photo('login') ?>" style="height:70px;max-width: 100%;">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('cookies_page') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="cookies" id="cookies" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_cookies" class="row lightGallery">
                              <a class="mx-auto" href="../assets/uploads/backgrounds/cookies/<?= back_photo('cookies') ?>">
                                 <img src="../assets/uploads/backgrounds/cookies/<?= back_photo('cookies') ?>" style="height:70px;max-width: 100%;">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('contact_page') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="contact" id="contact" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_contact" class="row lightGallery">
                              <a class="mx-auto" href="../assets/uploads/backgrounds/contact/<?= back_photo('contact') ?>">
                                 <img src="../assets/uploads/backgrounds/contact/<?= back_photo('contact') ?>" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('about_page') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="about" id="about" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_about" class="row lightGallery">
                              <a class="mx-auto" href="../assets/uploads/backgrounds/about/<?= back_photo('about') ?>">
                                 <img src="../assets/uploads/backgrounds/about/<?= back_photo('about') ?>" style="height:70px;max-width: 100%;">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('photo_gallery_page') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="photo_gallery" id="photo_gallery" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_photo_gallery" class="row lightGallery">
                              <a class="mx-auto" href="../assets/uploads/backgrounds/photo_gallery/<?= back_photo('photo_gallery') ?>">
                                 <img src="../assets/uploads/backgrounds/photo_gallery/<?= back_photo('photo_gallery') ?>" style="height:70px;max-width: 100%;">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('homepage_why_us') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="why_us" id="why_us" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_why_us" class="row lightGallery">
                              <a class="mx-auto" href="../assets/uploads/backgrounds/why_us/<?= back_photo('why_us') ?>">
                                 <img src="../assets/uploads/backgrounds/why_us/<?= back_photo('why_us') ?>" style="height:70px;max-width: 100%;">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header"><?= translate('contact_in_homepage') ?></div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="contact_home" id="contact_home" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="for_home_contact" class="row lightGallery">
                              <a class="mx-auto" href=".../assets/uploads/backgrounds/home_contact/<?= back_photo('contact_home') ?>">
                                 <img src="../assets/uploads/backgrounds/home_contact/<?= back_photo('contact_home') ?>" style="height:70px;max-width: 100%;">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Sıkça Sorulan Sorular Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan7" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan7/1.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan7/1.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Müşteri Görüşleri Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan8" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan8/1.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan8/1.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Hizmetler Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan9" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan9/3.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan9/3.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Ekibimiz Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan10" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan10/3.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan10/3.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Foto Galeri Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan11" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan11/1_1.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan11/1_1.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Video Galeri Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan12" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan12/1.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan12/1.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Haberler Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan13" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan13/3.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan13/3.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">İletişim Arka Plan</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan14" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan14/2.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan14/2.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card mb-4">
                     <div class="card-header">Sıkça Sorulan Sorular Sol Resim</div>
                     <div class="card-body">
                        <div class="form-group">
                           <input type="file" name="arkaplan15" class="file-upload-default">
                           <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info form-control-sm" disabled="" placeholder="<?= translate('select_photo_file') ?>">
                              <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i class="icon-cloud-upload font-12"></i> <?= translate('select_file') ?></button>
                              </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <div id="lightgallery" class="row lightGallery">
                              <a class="mx-auto" href="../tema/genel/uploads/arkaplan/arkaplan15/faq-img1.jpg"><img src="../tema/genel/uploads/arkaplan/arkaplan15/faq-img1.jpg" style="height:70px;max-width: 100%;"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </form>                 
         </div>
      </div>
   </div>

</div>

</div>