<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


function translate($word = '')
{
    global $conn;
    if (isset($_SESSION['set_lang'])) {
        $set_lang = isset($_SESSION['set_lang']) ? $_SESSION['set_lang'] : NULL;
    } else {
        $set_lang = settings('translation');
    }

    if ($set_lang == '') {
        $set_lang = 'english';
    }
    $query  = "SELECT * FROM languages WHERE word='" . $word . "'";
    $ayarr  = mysqli_query($conn, $query);
    $row    = mysqli_fetch_array($ayarr);
    if (mysqli_num_rows($ayarr) > 0) {
        if (isset($row[$set_lang]) && $row[$set_lang] != '') {
            return $row[$set_lang];
        } else {
            return $row['english'];
        }
    } else {
        $arrayData = array(
            'word'    => $word,
            'english' => ucfirst(str_replace('_', ' ', $word)),
        );
        $qry = mysqli_query($conn, "INSERT INTO languages (word,english) VALUES ('" . $arrayData['word'] . "','" . $arrayData['english'] . "')");
        return ucfirst(str_replace('_', ' ', $word));
    }
}

function url_origin()
{
    $url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}

function unique_token()
{
    $token = openssl_random_pseudo_bytes(16);
    $token = bin2hex($token);
    return $token;
}


function get_city_name($par)
{
    global $conn;
    $sql = "SELECT * FROM cities WHERE id='" . $par . "'";
    $run = mysqli_query($conn, $sql);
    $cn  = mysqli_num_rows($run);
    $bax = mysqli_fetch_array($run);
    return $bax['city_name'];
}

function get_type_name($par)
{
    global $conn;
    $sql = "SELECT * FROM realty_types WHERE id='" . $par . "'";
    $run = mysqli_query($conn, $sql);
    $cn  = mysqli_num_rows($run);
    $bax = mysqli_fetch_array($run);
    return $bax['type_name'];
}

function get_kind_name($par, $show = 'original')
{
    global $conn;
    $sql = "SELECT * FROM realty_kinds WHERE id='" . $par . "'";
    $run = mysqli_query($conn, $sql);
    $cn  = mysqli_num_rows($run);
    $bax = mysqli_fetch_array($run);
    $val = ($bax['id'] == 1) ? 'satılır' : 'kirayə verilir';
    if ($show == 'original') {
        return $bax['type_name'];
    } else {
        return $val;
    }
}

function wish($token, $id)
{
    global $conn;
    $sql  = "SELECT * FROM wishlists WHERE session_id='" . $token . "' AND data_id='" . $id . "'";
    $qryr = mysqli_query($conn, $sql);
    $cn   = mysqli_num_rows($qryr);
    if ($cn > 0) {
        $bax  = true;
    } else {
        $bax = false;
    }

    return $bax;
}

function wish_count($token)
{
    global $conn;
    $sql  = "SELECT * FROM wishlists WHERE session_id='" . $token . "'";
    $qryr = mysqli_query($conn, $sql);
    $cn   = mysqli_num_rows($qryr);
    return $cn;
}

function check_ads($sef)
{
    global $conn;
    $sql  = "SELECT * FROM ads WHERE sef_url='" . $sef . "'";
    $qryr = mysqli_query($conn, $sql);
    $cn   = mysqli_num_rows($qryr);
    return $cn;
}

function get_ads($sef, $par)
{
    global $conn;
    $sel = "SELECT a.id AS ads_id,
    a.kind_id AS ads_kind_id,
    a.type_id AS ads_type_id,
    a.city_id AS ads_city_id,
    a.user_id AS ads_user_id,
    a.rooms AS ads_rooms,
    a.area AS ads_area,
    a.floor_no AS ads_floor_no,
    a.building_floor_no AS ads_building_floor_no,
    a.price AS ads_price,
    a.payment_method AS ads_payment_method,
    a.mortgage AS ads_mortgage,
    a.address AS ads_address,
    a.images AS ads_images,
    a.status AS ads_status,
    a.end_date AS ads_end_date,
    a.created_at AS ads_created_at,
    a.updated_at AS ads_updated_at,
    a.deleted_at AS ads_deleted_at,
    a.sef_url AS ads_sef_url,
    a.seen AS ads_seen,
    c.city_name,
    c.seo_link as city_seo_link,
    c.status as city_status,
    r.region_name,
    r.seo_link as region_seo_link,
    r.status as region_status,
    rk.kind_name,
    rk.seo_link as rk_seo_link,
    rk.status as rk_status,
    rt.type_name,
    rt.seo_link as rt_seo_link,
    rt.status as rt_status
    FROM ads AS a 
    LEFT JOIN cities AS c ON a.city_id=c.id 
    LEFT JOIN regions AS r ON a.regions=r.id 
    LEFT JOIN realty_kinds AS rk ON a.kind_id=rk.id
    LEFT JOIN realty_types AS rt ON a.type_id=rt.id 
    LEFT JOIN ads_users AS au ON a.user_id=au.id 
    WHERE a.sef_url='" . $sef . "' ";
    $run = mysqli_query($conn, $sel);
    $cn  = mysqli_num_rows($run);
    $bax = mysqli_fetch_array($run);
    return $bax[$par];
}

function get_ads_user_information($sef, $parameter)
{
    global $conn;
    $sel_user = "SELECT * FROM ads AS a INNER JOIN ads_users AS au ON a.user_id=au.id WHERE a.sef_url='" . $sef . "' ";
    $run = mysqli_query($conn, $sel_user);
    $cn  = mysqli_num_rows($run);
    $bax = mysqli_fetch_array($run);
    return $bax[$parameter];
}

function today_visitor($val = 'all')
{
    global $conn;
    $result = [];
    $sql  = "SELECT * FROM site_visitor WHERE DATE(visit_date) = CURDATE()";
    $qryr = mysqli_query($conn, $sql);

    while ($bax = mysqli_fetch_array($qryr)) {
        if ($val == 'all') {
            $result[] = $bax;
        } else {
            $result[] = $bax[$val];
        }
    }

    return $result;
}

function yesterday_visitor($val = 'all')
{
    global $conn;
    $result = [];
    $sql  = "SELECT * FROM site_visitor WHERE DATE(visit_date) = SUBDATE(CURDATE(),1)";
    $qryr = mysqli_query($conn, $sql);

    while ($bax = mysqli_fetch_array($qryr)) {
        if ($val == 'all') {
            $result[] = $bax;
        } else {
            $result[] = $bax[$val];
        }
    }

    return $result;
}

function all_visitor($val = 'all')
{
    global $conn;
    $result = [];
    $sql  = "SELECT * FROM site_visitor";
    $qryr = mysqli_query($conn, $sql);

    while ($bax = mysqli_fetch_array($qryr)) {
        if ($val == 'all') {
            $result[] = $bax;
        } else {
            $result[] = $bax[$val];
        }
    }

    return $result;
}
function sayt_ziyaretci()
{
    global $conn;
    error_reporting(0);
    $date       = date("Y-m-d H:i:s");
    $ip         = getIP();
    $d          = file_get_contents("http://api.ipstack.com/" . $ip . "?access_key=4e80391287695a8f962637ff6ceda9c0");
    $vi         = "SELECT * FROM site_visitor WHERE ip='" . $ip . "'";
    $run        = mysqli_query($conn, $vi);
    $qry_cnt    = mysqli_num_rows($run);
    $row        = mysqli_fetch_array($run);

    if ($qry_cnt == 0) {
        $ins    = "INSERT INTO site_visitor (ip,visitor_info) VALUES('" . $ip . "','" . $d . "')";
        $insr   = mysqli_query($conn, $ins);
    } else {
        $say    = $row['count'] + 1;
        $sql    = "UPDATE site_visitor SET count='" . $say . "', visitor_info='" . $d . "' WHERE ip='" . $ip . "'";
        $mysr   = mysqli_query($conn, $sql);
    }
}
function dd($par)
{
    echo "<pre>";
    print_r($par);
    echo "</pre>";
    die();
}

function attemp($login, $par)
{
    global $conn;
    $ayar  = "SELECT * FROM login_attempts WHERE login='" . $login . "'";
    $ayarr = mysqli_query($conn, $ayar);
    $say   = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    if ($say != 0) {
        return $row[$par];
    } else {
        return false;
    }
}


function modul_functionalities($par)
{
    global $conn;
    $ayar  = "SELECT * FROM modul_functionalities WHERE module_keyword='" . $par . "'";
    $ayarr = mysqli_query($conn, $ayar);
    $row   = mysqli_fetch_array($ayarr);
    return $row['module_status'];
}

function module_permission($yer, $id)
{
    global $conn;
    $ayar  = "SELECT $yer FROM modullar WHERE modul_id='" . $id . "'";
    $ayarr = mysqli_query($conn, $ayar);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$yer];
}

function table_count()
{
    global $conn;
    $sql = "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'avropa'";
    $run = mysqli_query($conn, $sql);
    return mysqli_fetch_array($run)[0];
}

function is_connected($host = 'www.google.com')
{
    $connected = @fsockopen($host, 80);
    //website, port  (try 80 or 443)
    if ($connected) {
        $is_conn = true; //action when connected
        fclose($connected);
    } else {
        $is_conn = false; //action in connection failure
    }
    return $is_conn;
}

function _d($date)
{
    if ($date == '' || is_null($date) || $date == '0000-00-00') {
        return '';
    }
    $formats = 'Y-m-d';
    $get_format = settings('date_format');
    if ($get_format != '') {
        $formats = $get_format;
    }
    return date($formats . ' H:i', strtotime($date));
}

function config_date($date)
{
    if ($date == '' || is_null($date) || $date == '0000-00-00') {
        return '';
    }
    $formats = 'Y-m-d';
    $get_format = settings('date_format');
    if ($get_format != '') {
        $formats = $get_format;
    }
    return date($formats, strtotime($date));
}

function get_nicetime($date)
{
    $get_format = settings('date_format');
    if (empty($date)) {
        return "Unknown";
    }
    // Current time as MySQL DATETIME value
    $csqltime = date('Y-m-d H:i:s');
    // Current time as Unix timestamp
    $ptime = strtotime($date);
    $ctime = strtotime($csqltime);

    //Now calc the difference between the two
    $timeDiff = floor(abs($ctime - $ptime) / 60);

    //Now we need find out whether or not the time difference needs to be in
    //minutes, hours, or days
    if ($timeDiff < 1) {
        $timeDiff = translate('just_now');
    } elseif ($timeDiff > 1 && $timeDiff < 60) {
        $timeDiff = floor(abs($timeDiff)) . " " . translate('minutes_ago');
    } elseif ($timeDiff > 60 && $timeDiff < 120) {
        $timeDiff = floor(abs($timeDiff / 60)) . " " . translate('hour_ago');
    } elseif ($timeDiff < 1440) {
        $timeDiff = floor(abs($timeDiff / 60)) . " " . translate('hours_ago');
    } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
        $timeDiff = floor(abs($timeDiff / 1440)) . " " . translate('day_ago');
    } elseif ($timeDiff > 2880) {
        $timeDiff = date($get_format, $ptime);
    }
    return $timeDiff;
}

function getMonthslist($m)
{
    $months = array(
        '01' => translate('January'),
        '02' => translate('February'),
        '03' => translate('March'),
        '04' => translate('April'),
        '05' => translate('May'),
        '06' => translate('June'),
        '07' => translate('July '),
        '08' => translate('August'),
        '09' => translate('September'),
        '10' => translate('October'),
        '11' => translate('November'),
        '12' => translate('December'),
    );
    return $months[$m];
}

function getDateformat()
{
    $date = array(
        "Y-m-d" => "yyyy-mm-dd",
        "Y/m/d" => "yyyy/mm/dd",
        "Y.m.d" => "yyyy.mm.dd",
        "d-M-Y" => "dd-mmm-yyyy",
        "d/M/Y" => "dd/mmm/yyyy",
        "d.M.Y" => "dd.mmm.yyyy",
        "d-m-Y" => "dd-mm-yyyy",
        "d/m/Y" => "dd/mm/yyyy",
        "d.m.Y" => "dd.mm.yyyy",
        "m-d-Y" => "mm-dd-yyyy",
        "m/d/Y" => "mm/dd/yyyy",
        "m.d.Y" => "mm.dd.yyyy",
    );
    return $date;
}

function timezone_list()
{
    static $timezones = null;
    if ($timezones === null) {
        $timezones = [];
        $offsets = [];
        $now = new DateTime('now', new DateTimeZone('UTC'));
        foreach (DateTimeZone::listIdentifiers() as $timezone) {
            $now->setTimezone(new DateTimeZone($timezone));
            $offsets[] = $offset = $now->getOffset();
            $timezones[$timezone] = '(' . format_GMT_offset($offset) . ') ' . format_timezone_name($timezone);
        }
        array_multisort($offsets, $timezones);
    }
    return $timezones;
}

function format_GMT_offset($offset)
{
    $hours = intval($offset / 3600);
    $minutes = abs(intval($offset % 3600 / 60));
    return 'GMT' . ($offset ? sprintf('%+03d:%02d', $hours, $minutes) : '');
}

function format_timezone_name($name)
{
    $name = str_replace('/', ', ', $name);
    $name = str_replace('_', ' ', $name);
    $name = str_replace('St ', 'St. ', $name);
    return $name;
}
function select_flag($lang)
{
    global $conn;
    $ayar  = "SELECT `flag_key` FROM `language_list` WHERE `lang_field`='" . $lang . "' ";
    $ayarr = mysqli_query($conn, $ayar);
    $row   = mysqli_fetch_array($ayarr);
    return strtoupper($row['flag_key']);
}

function getIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = ($remote == "::1" ? "127.0.0.1" : $remote);
    }
    return $ip;
}

function redirect($uri = '', $method = 'auto', $code = NULL)
{
    if (!preg_match('#^(\w+:)?//#i', $uri)) {
        $uri = site_url($uri);
    }

    // IIS environment likely? Use 'refresh' for better compatibility
    if ($method === 'auto' && isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS') !== FALSE) {
        $method = 'refresh';
    } elseif ($method !== 'refresh' && (empty($code) or !is_numeric($code))) {
        if (isset($_SERVER['SERVER_PROTOCOL'], $_SERVER['REQUEST_METHOD']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1') {
            $code = ($_SERVER['REQUEST_METHOD'] !== 'GET')
                ? 303   // reference: http://en.wikipedia.org/wiki/Post/Redirect/Get
                : 307;
        } else {
            $code = 302;
        }
    }

    switch ($method) {
        case 'refresh':
            header('Refresh:0;url=' . $uri);
            break;
        default:
            header('Location: ' . $uri, TRUE, $code);
            break;
    }
    exit;
}

function clean($data)
{
    global $conn;
    $data = trim($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}

function password_generate($length = 8, $min_lowercases = 1, $min_uppercases = 1, $min_numbers = 1, $min_specials = 0)
{

    $lowercases = 'abcdefghijklmnopqrstuvwxyz';
    $uppercases = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specials = '!#%&/(){}[]+-';

    $absolutes = '';
    if ($min_lowercases && !is_bool($min_lowercases)) $absolutes .= substr(str_shuffle(str_repeat($lowercases, $min_lowercases)), 0, $min_lowercases);
    if ($min_uppercases && !is_bool($min_uppercases)) $absolutes .= substr(str_shuffle(str_repeat($uppercases, $min_uppercases)), 0, $min_uppercases);
    if ($min_numbers && !is_bool($min_numbers)) $absolutes .= substr(str_shuffle(str_repeat($numbers, $min_numbers)), 0, $min_numbers);
    if ($min_specials && !is_bool($min_specials)) $absolutes .= substr(str_shuffle(str_repeat($specials, $min_specials)), 0, $min_specials);

    $remaining = $length - strlen($absolutes);

    $characters = '';
    if ($min_lowercases !== false) $characters .= substr(str_shuffle(str_repeat($lowercases, $remaining)), 0, $remaining);
    if ($min_uppercases !== false) $characters .= substr(str_shuffle(str_repeat($uppercases, $remaining)), 0, $remaining);
    if ($min_numbers !== false) $characters .= substr(str_shuffle(str_repeat($numbers, $remaining)), 0, $remaining);
    if ($min_specials !== false) $characters .= substr(str_shuffle(str_repeat($specials, $remaining)), 0, $remaining);

    $password = str_shuffle($absolutes . substr($characters, 0, $remaining));

    return $password;
}

function hash_password($par)
{
    $par = hash("sha256", $par);
    return $par;
}

function has_userdata($key)
{
    return isset($_SESSION[$key]);
}

function set_userdata($data, $value = NULL)
{
    if (is_array($data)) {
        foreach ($data as $key => &$value) {
            $_SESSION[$key] = $value;
        }

        return;
    }

    $_SESSION[$data] = $value;
}

function user_data($par, $id)
{
    global $conn;
    $ayar  = "SELECT $par FROM login_credentials WHERE id='" . clean($id) . "'";
    $ayarr = mysqli_query($conn, $ayar);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function social($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM social_media_settings";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function smtp_config($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM smtp_settings";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function site_status($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM site_status";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function contact($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM contact_settings";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function settings($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM global_settings";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function theme()
{
    global $conn;
    $ayar  = "SELECT * FROM theme_settings";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return $row['theme_mode'];
}

function api_settings($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM apis_settings";
    $ayarr = mysqli_query($conn, $ayar);
    $aycnt = mysqli_num_rows($ayarr);
    $row   = mysqli_fetch_array($ayarr);
    return html_entity_decode($row[$par]);
}

function statistics($par)
{
    global $conn;
    $ayar  = "SELECT $par FROM statistics";
    $ayarr = mysqli_query($conn, $ayar);
    $row   = mysqli_fetch_array($ayarr);
    return $row[$par];
}

function user_brauzer($par)
{
    if (strpos($par, 'MSIE') !== FALSE)
        return 'Internet explorer';
    elseif (strpos($par, 'Trident') !== FALSE)
        return 'Internet explorer';
    elseif (strpos($par, 'Firefox') !== FALSE)
        return 'Mozilla Firefox';
    elseif (strpos($par, 'Chrome') !== FALSE)
        return 'Google Chrome';
    elseif (strpos($par, 'Opera Mini') !== FALSE)
        return "Opera Mini";
    elseif (strpos($par, 'Opera') !== FALSE)
        return "Opera";
    elseif (strpos($par, 'Safari') !== FALSE)
        return "Safari";
    else
        return 'Bilinmir';
}



function base_url($uri = '', $protocol = NULL)
{
    return settings('site_url') . '/auth_dash';
}

function site_url($uri = '', $protocol = NULL)
{
    return settings('site_url');
}

function set_language($action = '')
{
    set_userdata('set_lang', $action);
    if (!empty($_SERVER['HTTP_REFERER'])) {
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        redirect(base_url('home'), 'refresh');
    }
}


function save_url($sess_id)
{
    global $conn;
    $full_url = (isset($SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://" . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI'];
    $sql = "UPDATE login_credentials SET last_visited_page='" . $full_url . "' WHERE id='" . $sess_id . "'";
    $run = mysqli_query($conn, $sql);
}

function seo($str, $options = array())
{
    $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
    $defaults = array(
        'delimiter' => '-',
        'limit' => null,
        'lowercase' => true,
        'replacements' => array(),
        'transliterate' => true
    );
    $options = array_merge($defaults, $options);
    $char_map = array(
        // Latin
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C', 'Ə' => 'E',
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
        'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
        'ß' => 'ss',
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
        'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
        'ÿ' => 'y', 'ə' => 'e',
        // Latin symbols
        '©' => '(c)',
        // Greek
        'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
        'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
        'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
        'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
        'Ϋ' => 'Y',
        'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
        'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
        'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
        'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
        'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
        // Turkish
        'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
        'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
        // Russian
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
        'я' => 'ya',
        // Ukrainian
        'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
        'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
        // Czech
        'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
        'Ž' => 'Z',
        'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
        'ž' => 'z',
        // Polish
        'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
        'Ż' => 'Z',
        'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
        'ż' => 'z',
        // Latvian
        'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
        'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
        'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
        'š' => 's', 'ū' => 'u', 'ž' => 'z'
    );
    $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
    if ($options['transliterate']) {
        $str = str_replace(array_keys($char_map), $char_map, $str);
    }
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
    $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
    $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
    $str = trim($str, $options['delimiter']);
    return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}

function word_to_trans_seo($par)
{
    $a = strtolower(seo($par));
    $a = str_replace("-", "_", $a);
    return translate($a);
}

function admin_info($id, $par)
{
    global $conn;
    $sel = "SELECT * FROM login_credentials WHERE id='" . $id . "'";
    $run = mysqli_query($conn, $sel);
    $bax = mysqli_fetch_array($run);
    return $bax[$par];
}

function users_info($id, $par)
{
    global $conn;
    $user_data = "SELECT * FROM ads_users WHERE id='" . $id . "'";
    $run       = mysqli_query($conn, $user_data);
    $bax       = mysqli_fetch_array($run);
    return $bax[$par];
}



/* DASHBOARD VIEW START */
function show_menu()
{
    global $conn;
    $menus  = '';
    $menus .= multilevel_menu($conn);
    return $menus;
}

function multilevel_menu($conn, $parent_id = 0)
{
    global $conn;
    $sql = "";
    $menu = "";
    if ($parent_id == 0) {
        $sql = "SELECT * FROM menus WHERE parent_id=0 ORDER BY menu_sira ASC";
    } else {
        $sql = "SELECT * FROM menus WHERE parent_id=$parent_id ORDER BY menu_sira ASC";
    }
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $akt_pas = ($row['menu_status'] == 1) ? 'aktif-menu' : 'pasif-menu';
        $menu .= ' <li class="dd-item dd3-item">
                        <div class="dd-handle dd3-handle">' . $row['menu_sira'] . '</div>
                        <div class="dd3-content ' . $akt_pas . '">
                           ' . $row['menu_name'] . ' 
                           <div class="nestablebtns">
                              <a data-toggle="tooltip" data-placement="top" title="Düzəliş et" href="header-menu-duzenle/21.html"><i class="ti-pencil-alt"></i></a>
                              <a data-toggle="tooltip" data-placement="top" title="Sil" class="popconfirm" href="../_class/yonetim_islem.php?menusil=ok&id=21"><i class="ti-trash"></i></a>
                           </div>
                        </div>
                     ';

        $menu .= '<ol class="dd-list">' . multilevel_menu($conn, $row['menu_id']) . '</ol>';
        $menu .= '</li>';
    }
    return $menu;
}
/* DASHBOARD VIEW END*/



/* FRONT VIEW START*/

function show_menu_front()
{
    global $conn;
    $menus  = '';
    $menus .= multilevel_menu_front($conn);
    return $menus;
}

function multilevel_menu_front($conn, $parent_id = 0)
{
    global $conn;
    $sql = "";
    $menu = "";
    if ($parent_id == 0) {
        $sql = "SELECT * FROM menus WHERE parent_id=0 ORDER BY menu_sira ASC";
    } else {
        $sql = "SELECT * FROM menus WHERE parent_id=$parent_id ORDER BY menu_sira ASC";
    }
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $target = ($row['target'] == 0) ? '' : '_blank';
        $urli   = (filter_var($row['menu_url'], FILTER_VALIDATE_URL)) ? $row['menu_url'] : site_url() . '/' . $row['menu_url'];
        $menu .= '<li class="nav-item"><a href="' . $urli . '" class="nav-link" target="' . $target . '">' . word_to_trans_seo($row['menu_name']) . '</a>';
        $menu .= '<ul class="dropdown-menu">' . multilevel_menu_front($conn, $row['menu_id']) . '</ul>';
        $menu .= '</li>';
    }
    return $menu;
}

/* FRONT VIEW END*/


function menuByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM pages WHERE page_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function findParent($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM menus WHERE seo='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $sec    = "SELECT * FROM menus WHERE menu_id='" . $rows['parent_id'] . "'";
    $rrr    = mysqli_query($conn, $sec);
    $bax    = mysqli_fetch_array($rrr);
    $say    = mysqli_num_rows($rrr);
    if ($say != 0) {
        return $bax[$par];
    } else {
        redirect(site_url() . '/error');
    }
}


function staffById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM staff WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function menuById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM menus WHERE menu_id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function cityById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM cities WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function userById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM ads_users WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function adsTypeById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM realty_kinds WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function metroById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM metros WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}


function regionById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM regions WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function hashtagById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM hashtags WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function settlementById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM settlements WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function newsById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM news WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}


function serviceByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM services WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function serviceById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM services WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function catByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM staff_category WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function catById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM staff_category WHERE cat_id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function newsByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM news WHERE news_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function staffByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM staff WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function blogByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM blogs WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function albumById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM photo_albums WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function albumByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM photo_albums WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function videoByUrl($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM videos WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function videoById($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM videos WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function photosByAlbumId($id, $par)
{
    global $conn;
    $id     = clean($id);
    $select = "SELECT * FROM photos WHERE seo_url='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    return $rows[$par];
}

function slide($id, $par)
{
    global $conn;
    $select = "SELECT * FROM slider WHERE id='" . $id . "'";
    $run    = mysqli_query($conn, $select);
    $rows = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows[$par];
    } else {
        redirect(site_url() . '/error');
    }
}

function back_photo($par)
{
    global $conn;
    $select = "SELECT * FROM background_images WHERE page='" . $par . "'";
    $run    = mysqli_query($conn, $select);
    $rows   = mysqli_fetch_array($run);
    $say    = mysqli_num_rows($run);
    if ($say != 0) {
        return $rows['photo'];
    }
    // else
    // {
    //     redirect(site_url().'/error');
    // }

}
