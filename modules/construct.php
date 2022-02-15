<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>Ağsu Tədris Mərkəzi</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description" content="Hosting, Domain, VPS, Server Satışı" />
      <meta name="keywords" content="Hosting, Domain, VPS, Server Satışı" />
      <meta name="robots" content="index,follow" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link rel="shortcut icon" href="img/favicon.ico" />
      <link rel="stylesheet" media="screen and (min-width: 680px)" href="assets/construct/css_sus/instauro-desktop.min.css" type="text/css" />
      <link rel="stylesheet" media="screen and (max-width: 680px)" href="assets/construct/css_sus/instauro-mobile.min.css" type="text/css" />
      <link rel="stylesheet" media="all" href="assets/construct/css_sus/elusive-icons/elusive-webfont.min.css" type="text/css" />
      <link rel="stylesheet" media="all" href="assets/construct/css_sus/style.css" type="text/css" />
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <script type="text/javascript" src="assets/construct/js/modernizr.js"></script>  
   </head>
   <body class="turquoise">
      <div class="bg-holder">
         <img id="bg-image" src="assets/construct/img/01_background1.jpg" alt="background-image" width="1920" height="845" />
         <div class="overlay"></div>
      </div>
      <div id="board" class="animate">
         <div class="inner">
            <div class="front">
               <header>
                  <h1><a href="#"><img src="<?= site_url()?>/assets/uploads/logo/<?= settings('logo') ?>" class="logo-img" style="width:90px;"></a></h1>
                  <svg version="1.1" id="board-front" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="682px" height="403.5px" viewBox="139 78.5 682 403.5" enable-background="new 139 78.5 682 403.5" xml:space="preserve">
                     <defs>
                        <pattern id="pattern-front" x="0" y="0" patternUnits="userSpaceOnUse" height="8" width="8">
                           <image x="0" y="0" height="8" width="8" xlink:href="img/08_pattern-yellow.png"></image>
                        </pattern>
                        <filter id="board-shadow-front" x="0" y="0" width="100%" height="100%">
                           <feOffset result="offOut" in="SourceAlpha" dy="1" />
                           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="0" />
                           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
                        </filter>
                        <filter id="wire-shadow-left-front" x="0" y="0" width="100%" height="100%">
                           <feOffset result="offOut" in="SourceAlpha" dy="1" />
                           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="0" />
                           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
                           <feComponentTransfer>
                              <feFuncA type="linear" slope="1"/>
                           </feComponentTransfer>
                        </filter>
                        <filter id="wire-shadow-right-front" x="0" y="0" width="100%" height="100%">
                           <feOffset result="offOut" in="SourceAlpha" dx="1" dy="1" />
                           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="0" />
                           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
                           <feComponentTransfer>
                              <feFuncA type="linear" slope="1"/>
                           </feComponentTransfer>
                        </filter>
                     </defs>
                     <path id="board-background-front" fill="#F5F5F5" filter="url(#board-shadow-front)" d="M803,182H157c-9.94,0-18,7.56-18,17.5V482h682V199.5C821,189.56,812.94,182,803,182z
                        M166,217.5c-4.97,0-9-4.03-9-9s4.03-9,9-9s9,4.03,9,9S170.97,217.5,166,217.5z M794,217.5c-4.97,0-9-4.03-9-9s4.03-9,9-9
                        s9,4.03,9,9S798.97,217.5,794,217.5z"/>
                     <path id="wire-right-front" fill="#F5F5F5" filter="url(#wire-shadow-right-front)" d="M789.54,201.59c-0.46,1.01-1.25,1.84-2.24,2.35L480,83.12V81.5l0.55-1.4L789.54,201.59z"/>
                     <path id="wire-left-front" fill="#F5F5F5" filter="url(#wire-shadow-left-front)" d="M480,83.12L172.7,203.94c-0.99-0.51-1.78-1.34-2.24-2.35L479.45,80.1l0.55,1.4V83.12z"/>
                  </svg>
                  
               </header>
               <div class="content">
                  <p class="date"><br><?= site_status('title') ?></p>
                  <p class="description"><?= site_status('content') ?></p>
                  <div id="newsletter-holder" class="enabled">
                     <div class="inner">
                        <div class="top">
                           <div class="bottom-holder">
                              <ul style="float:left;">
                                 <li>
                                    Mobil: <?= contact('mobile_phone') ?>
                                 </li>
                                 <li>
                                    <?= contact('address') ?>
                                 </li>
                              </ul>
                              <ul style="float:left;">
                                 <li>
                                   
                                 </li>
                                 <li>
                                    E-Poçt:  <?= contact('email') ?>                                 
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="pin"></div>
      <script type="text/javascript" src="assets/construct/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="assets/construct/js/preloader.min.js"></script>
      <script type="text/javascript" src="assets/construct/js/moment.js"></script>
      <script type="text/javascript" src="assets/construct/js/custom.min.js"></script>
   </body>
</html>