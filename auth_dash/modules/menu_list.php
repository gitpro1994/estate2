<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
   <div class="page-title mt-0 mb-0">
      <h3>Menu İdarəetməsi</h3>
      <div class="crumbs">
         <ul id="breadcrumbs" class="breadcrumb">
            <li><a href="index.php"><i class="icon-home menu-icon"></i></a></li>
            <li><a href="#">Menü Yönetimi</a></li>
            <li class="active"><a href="#">Menu İdarəetməsi</a></li>
         </ul>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <form class="forms-sample" method="post" id="add_menu_form" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="menu_ust">Üst Menu Seç</label>
                  <select class="js-example-basic-single form-control-sm" name="menu_ust" id="menu_ust"  style="width:100%">
                     <option value="0">Üst Menu</option>
                     <?php 
                     $query     = "SELECT * FROM menus ORDER BY menu_sira ASC";
                     $statement = mysqli_query($conn,$query);
                     while ($bax = mysqli_fetch_array($statement)) {
                        
                      ?>
                     <option value="<?=$bax['menu_id'] ?>" ><?=$bax['menu_name'] ?></option>
                     <?php }  ?>
                    
                  </select>
               </div>
               <div class="form-group">
                  <label for="menu_sira">Menu Sıra</label>
                  <input type="number" min="0" class="form-control form-control-sm" name="menu_sira" id="menu_sira" />
               </div>
               <div class="form-group">
                  <label for="menu_ad">Menu Adı</label>
                  <input type="text" class="form-control form-control-sm" name="menu_ad"  id="menu_ad" />
               </div>
               
               <div class="form-group sayfalar">
                  <label for="menu_url">Bağlantı Səhifəsi</label>
                  <select name="menu_url" id="menu_url" class="js-example-basic-single form-control-sm" style="width:100%">
                     <option value="#">-Seçin-</option>
                     <optgroup label="Menular">
                        <?php 
                        $query     = "SELECT * FROM menus  ORDER BY menu_sira ASC";
                        $statement = mysqli_query($conn,$query);
                        while ($bax = mysqli_fetch_array($statement)) {
                         ?>
                        <option value="<?=$bax['menu_url'] ?>" ><?=$bax['menu_name'] ?></option>
                        <?php }  ?>
                     </optgroup>
                     <!-- <optgroup label="Səhifələr">
                        <option value="send-cv">CV-ni göndər</option>
                        <option value="career">Vakansiyalar</option>
                        <option value="register">Kursa Qeydiyyat</option>
                     </optgroup> -->
                     <optgroup label="Tədbirlər">
                        <?php 
                        $tedbir = "SELECT * FROM tedbirler WHERE tedbir_status=1";
                        $runt   = mysqli_query($conn,$tedbir);
                        while ($ted = mysqli_fetch_array($runt)) {
                         ?>
                        <option value="tedbir/<?= $ted['tedbir_url'] ?>" ><?=$ted['tedbir_title'] ?></option>
                        <?php } ?>
                     </optgroup>
                      <optgroup label="Xəbərlər">
                        <?php 
                        $tedbir = "SELECT * FROM news WHERE news_status=1";
                        $runt   = mysqli_query($conn,$tedbir);
                        while ($ted = mysqli_fetch_array($runt)) {
                         ?>
                        <option value="xeber/<?= $ted['news_url'] ?>" ><?=$ted['news_title'] ?></option>
                        <?php } ?>
                     </optgroup>
                      <optgroup label="Məqalələr">
                        <?php 
                        $tedbir = "SELECT * FROM blogs WHERE blog_status=1";
                        $runt   = mysqli_query($conn,$tedbir);
                        while ($ted = mysqli_fetch_array($runt)) {
                         ?>
                        <option value="meqale/<?= $ted['blog_url'] ?>" ><?=$ted['blog_title'] ?></option>
                        <?php } ?>
                     </optgroup>
                   <!--    <optgroup label="Kurslar">
                        <?php 
                        $tedbir = "SELECT * FROM kurslar WHERE kurs_status=1";
                        $runt   = mysqli_query($conn,$tedbir);
                        while ($ted = mysqli_fetch_array($runt)) {
                         ?>
                        <option value="kurs/<?= $ted['kurs_url'] ?>" ><?=$ted['kurs_title'] ?></option>
                        <?php } ?>
                     </optgroup> -->
                                          
                  </select>
               </div>
               
               <div class="form-group sayfalar">
                  <div class="form-check form-check-flat form-check-primary">
                     <label class="form-check-label">
                     <input type="checkbox" name="newtab" id="newtab"  class="form-check-input">
                     Linkə klik edən yeni səhifədə açsın ?
                     <i class="input-helper"></i></label>
                  </div>
               </div>
               <div class="form-group">
                  <label class="d-block" for="menu_durum">Menu Statusu</label>
                  <label class="switch">
                  <input type="checkbox" name="menu_durum" id="menu_durum" checked>
                  <span class="slider"></span>
                  </label>
               </div>
               <button id="add_menu" class="btn btn-primary mr-2 btn-sm"><i class="mdi mdi-spin mdi-loading"></i>  <?= translate('save') ?></button>
            </form>
         </div>
      </div>
   </div>
   <div class="col-lg-6 grid-margin stretch-card ">
      <div class="card">
         <div class="card-body">
            <div class="clearfix m-b-20">
               <div class="dd nestable-with-handle">
                  <ol class="dd-list">
                       <?= show_menu(); ?>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
