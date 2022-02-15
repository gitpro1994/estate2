<?php 

include('app/vbaza.php');
include('app/komekchi.php');

$pages_static = ['visitors','sss','send-cv','career','register'];
$pages_say    = count($pages_static);

$query    = "SELECT * FROM menus WHERE parent_id=0 AND menu_url!='#' ORDER BY menu_sira ASC";
$result   = mysqli_query($conn, $query);

$qry       = "SELECT * FROM news";
$rsl       = mysqli_query($conn, $qry);

$qry1      = "SELECT * FROM blog";
$rsl1      = mysqli_query($conn, $qry1);

$qry2      = "SELECT * FROM tedbirler";
$rsl2      = mysqli_query($conn, $qry2);

$qry3      = "SELECT * FROM kurslar";
$rsl3      = mysqli_query($conn, $qry3);


$base_url = ayarlar('site_url');

header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
while($row = mysqli_fetch_array($result))
{
 echo '<url>' . PHP_EOL;
 echo '<loc>'.$base_url. $row["menu_url"] .'/</loc>' . PHP_EOL;
 echo '<changefreq>daily</changefreq>' . PHP_EOL;
 echo '</url>' . PHP_EOL;
}
for ($i=0; $i < $pages_say; $i++) { 
 echo '<url>' . PHP_EOL;
 echo '<loc>'.$base_url. $pages_static[$i] .'/</loc>' . PHP_EOL;
 echo '<changefreq>daily</changefreq>' . PHP_EOL;
 echo '</url>' . PHP_EOL;	
}
while($bax = mysqli_fetch_array($rsl)){
echo '<url>' . PHP_EOL;
echo '<loc>'.$base_url.'xeber/'.$bax["news_url"] .'/</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;	
}
while($show = mysqli_fetch_array($rsl1)){
echo '<url>' . PHP_EOL;
echo '<loc>'.$base_url.'meqale/'.$show["blog_url"] .'/</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;	
}
while($shw = mysqli_fetch_array($rsl2)){
echo '<url>' . PHP_EOL;
echo '<loc>'.$base_url.'tedbir/'.$shw["tedbir_url"] .'/</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;	
}
while($shw1 = mysqli_fetch_array($rsl3)){
echo '<url>' . PHP_EOL;
echo '<loc>'.$base_url.'kurs/'.$shw1["kurs_url"] .'/</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;	
}

echo '</urlset>' . PHP_EOL;

?>