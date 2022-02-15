<?php 
$title = settings('site_title').' - '.translate(videoByUrl($_GET['seo_url'],'video_name'));
$desc  = settings('seo_desc');
$keyw  = settings('seo_keyword');
 ?>
   <!-- START  -->
    <?php include_once "partials/head.php"; ?>
    <!-- END  -->

    <!-- START  -->
    <?php include_once "partials/topbar.php"; ?>
    <!-- END  -->

    <!-- START  -->
    <?php include_once "partials/menu.php"; ?>
    <!-- END  -->
    
    <!-- START  -->
    <?php include_once "partials/sidebar.php"; ?>
    <!-- END  -->

    <!-- START  -->
    <?php include_once "partials/modal.php"; ?>
    <!-- END  -->


<div class="page-title-area" style="background-image: url(<?= site_url() ?>/assets/uploads/videos/<?= videoByUrl($_GET['seo_url'],'cover_photo') ?>)">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-title-content">
               <h2><?= translate(videoByUrl($_GET['seo_url'],'video_name')) ?></h2>
               <ul>
                  <li><a href="<?= site_url() ?>"><?= translate('home') ?></a></li>
                  <li><?= translate('media') ?></li>
                  <li><?= translate('videos') ?></li>
                  <li><?= translate(videoByUrl($_GET['seo_url'],'video_name')) ?></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="blog-details-area ptb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12">
            <div class="blog-details-desc">
               <div class="article-image">
                  <img src="tema/genel/uploads/haberler/4.jpg" alt="Sağlıkta Teknolojinin Önemi">
               </div>
               <div class="article-content">
                  <div class="entry-meta">
                     <ul>
                        <li><i class="far fa-clock"></i> <a href="#">18 Şubat 2020, 14:06</a></li>
                     </ul>
                  </div>
                  <h3>Sağlıkta Teknolojinin Önemi</h3>
                  <p>Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>
                  <p>1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>
                  <p>Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>
                  <p>1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>
               </div>
               <div class="article-footer">
                  <div class="article-tags">
                     <span><i class="fas fa-bookmark"></i></span>
                     <a href="haberdetay/saglikta-teknolojinin-onemi">test</a>,															<a href="haberdetay/saglikta-teknolojinin-onemi">Sağlıkta Teknolojinin Önemi</a>							                        
                  </div>
                  <div class="article-share">
                     <ul class="social">
                        <div class="addthis_inline_share_toolbox_34zm"></div>
                     </ul>
                  </div>
               </div>
               <div class="klev-post-navigation">
                  <div class="prev-link-wrapper">
                     <div class="info-prev-link-wrapper">
                        <a href="haberdetay/temizlik-onemlidir">
                        <span class="image-prev">
                        <img src="tema/genel/uploads/haberler/2.jpg" alt="Temizlik Önemlidir.!">
                        <span class="post-nav-title">Önceki</span>
                        </span>
                        <span class="prev-link-info-wrapper">
                        <span class="prev-title">Temizlik Önemlidir.!</span>
                        <span class="meta-wrapper">
                        <span class="date-post">18 Şubat 2020, 14:05</span>
                        </span>
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-12">
            <aside class="widget-area" id="secondary">
               <section class="widget widget_klev_posts_thumb">
                  <h3 class="widget-title">Haberler</h3>
                  <article class="item">
                     <a href="haberdetay/saglikta-teknolojinin-onemi" class="thumb">
                     <span class="fullimage cover" role="img"><img src="tema/genel/uploads/haberler/4.jpg" alt="Sağlıkta Teknolojinin Önemi"></span>
                     </a>
                     <div class="info">
                        <time datetime="18 Şubat 2020, 14:06">18 Şubat 2020, 14:06</time>
                        <h4 class="title usmall"><a href="haberdetay/saglikta-teknolojinin-onemi">Sağlıkta Teknolojinin Önemi</a></h4>
                     </div>
                     <div class="clear"></div>
                  </article>
                  <article class="item">
                     <a href="haberdetay/temizlik-onemlidir" class="thumb">
                     <span class="fullimage cover" role="img"><img src="tema/genel/uploads/haberler/2.jpg" alt="Temizlik Önemlidir.!"></span>
                     </a>
                     <div class="info">
                        <time datetime="18 Şubat 2020, 14:05">18 Şubat 2020, 14:05</time>
                        <h4 class="title usmall"><a href="haberdetay/temizlik-onemlidir">Temizlik Önemlidir.!</a></h4>
                     </div>
                     <div class="clear"></div>
                  </article>
                  <article class="item">
                     <a href="haberdetay/saglikta-bunlara-dikkat-edin" class="thumb">
                     <span class="fullimage cover" role="img"><img src="tema/genel/uploads/haberler/3.jpg" alt="Sağlıkta Bunlara Dikkat Edin"></span>
                     </a>
                     <div class="info">
                        <time datetime="18 Şubat 2020, 14:04">18 Şubat 2020, 14:04</time>
                        <h4 class="title usmall"><a href="haberdetay/saglikta-bunlara-dikkat-edin">Sağlıkta Bunlara Dikkat Edin</a></h4>
                     </div>
                     <div class="clear"></div>
                  </article>
                  <article class="item">
                     <a href="haberdetay/saglikta-5-altin-kural" class="thumb">
                     <span class="fullimage cover" role="img"><img src="tema/genel/uploads/haberler/8.jpg" alt="Sağlıkta 5 Altın Kural"></span>
                     </a>
                     <div class="info">
                        <time datetime="18 Şubat 2020, 13:52">18 Şubat 2020, 13:52</time>
                        <h4 class="title usmall"><a href="haberdetay/saglikta-5-altin-kural">Sağlıkta 5 Altın Kural</a></h4>
                     </div>
                     <div class="clear"></div>
                  </article>
               </section>
               <div class="helpline">
                  <div class="card p-30 card-active">
                     <div class="mb-4">
                        <h3 class="head-after">Bize Soru Sorun</h3>
                     </div>
                     <p>Bizimle iletişime geçmek ve soru sormak için iletişim butonuna tıklayınız.</p>
                     <p><a href="iletisim"><i class="mdi mdi-email-open mdi-24px"></i> İLETİŞİM</a></p>
                  </div>
               </div>
            </aside>
         </div>
      </div>
   </div>
</section>
    <!-- START  -->
    <?php include_once "partials/section_subscribe.php"; ?>  
    <!-- END  -->
    
    <!-- START  -->
    <?php include_once "partials/footer.php"; ?>
    <!-- END  -->