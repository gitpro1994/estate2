<?php
define('BASEPATH', true);
include("../../../core/config/database.php");
include("../../../core/helpers/general_helper.php");
if (!empty($_SESSION['loggedin_id']) and !empty($_SESSION['username']) and ($_SESSION['loggedin'] == 1)) {

    ######################### ACTIVE CHECKED LANGUAGE ##############################

    if (isset($_POST['lang_active'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE language_list SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = "Dilin statusu aktiv olaraq dəyişdirildi";
                // $content = "Dil status aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/language_list', 'refresh');
        } else {
            redirect(base_url() . '/language_list', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED LANGUAGE ##############################

    if (isset($_POST['lang_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id = $_POST['id'];
            $onearr = array_combine(range(1, count($id)), $id);
            $say = count($id) + 1;
            // print_r($onearr);
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE language_list SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = "Dilin statusu deaktiv olaraq dəyişdirildi";
                // $content = "Dil status deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])."  ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/language_list', 'refresh');
        } else {
            redirect(base_url() . '/language_list', 'refresh');
        }
    }
    ####################################################################################

    ######################### ACTIVE CHECKED NEWS ##############################

    if (isset($_POST['news_active'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE news SET news_status=1  WHERE id = '" . $onearr[$i] . "'");
                $title   = $_SESSION['username'] . " Xəbərin statusu aktiv olaraq dəyişdirdi";
                $content = $_SESSION['username'] . " Xəbərin statusu aktiv olaraq dəyişdirdi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
                $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
                $log_run = mysqli_query($conn, $logs);
            }
            redirect(base_url() . '/news_list', 'refresh');
        } else {
            redirect(base_url() . '/news_list', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED NEWS ##############################

    if (isset($_POST['news_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE news SET news_status=0  WHERE id = '" . $onearr[$i] . "'");
                $title   = $_SESSION['username'] . " Xəbərin statusu deaktiv olaraq dəyişdirdi";
                $content = $_SESSION['username'] . " Xəbərin statusu deaktiv olaraq dəyişdirdi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
                $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
                $log_run = mysqli_query($conn, $logs);
            }
            redirect(base_url() . '/news_list', 'refresh');
        } else {
            redirect(base_url() . '/news_list', 'refresh');
        }
    }
    ##################################################################################


    ######################### DELETE NEWS BY ID ##############################
    if (isset($_GET['del_news']) and $_GET['del_news'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM news WHERE id='" . $id . "'";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/news/" . $rows['news_photo'];

            if (file_exists($sekil)) {
                $title   = $_SESSION['username'] . " " . $rows['news_title'] . " başlıqlı xəbər sildi";
                $content = $rows['news_title'] . " başlıqlı xəbər silindi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
                $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
                $log_run = mysqli_query($conn, $logs);

                unlink($sekil);
                $guncelle = mysqli_query($conn, "DELETE FROM news WHERE id=" . $id . "");
            }

            redirect(base_url() . '/news_list', 'refresh');
        } else {
            redirect(base_url() . '/news_list', 'refresh');
        }
    }


    ##################################################################################

    ######################### DELETE SERVICE BY ID ##############################
    if (isset($_GET['del_service']) and $_GET['del_service'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM services WHERE id='" . $id . "'";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['title']." başlıqlı xidməti sildi";
            // $content = $rows['title']." başlıqlı xidmət silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);


            $guncelle = mysqli_query($conn, "DELETE FROM services WHERE id=" . $id . "");

            redirect(base_url() . '/service_list', 'refresh');
        } else {
            redirect(base_url() . '/service_list', 'refresh');
        }
    }


    ##################################################################################




    ############################# DELETE SERVICE PHOTO #################################

    if (isset($_GET['del_service_photo']) and $_GET['del_service_photo'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM services WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/services/" . $rows['photo'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE services SET photo='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_service/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/edit_service', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE NEWS PHOTO #################################

    if (isset($_GET['del_news_photo']) and $_GET['del_news_photo'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM news WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/news/" . $rows['news_photo'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE news SET news_photo='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_news/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/news_list', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE STAFF PHOTO #################################

    if (isset($_GET['del_staff_photo']) and $_GET['del_staff_photo'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM staff WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/staff/" . $rows['staff_photo'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE staff SET staff_photo='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_staff/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/staff_list', 'refresh');
        }
    }

    ####################################################################################


    ######################### ACTIVE CHECKED CITIES ##############################

    if (isset($_POST['city_active'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE cities SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/cities', 'refresh');
        } else {
            redirect(base_url() . '/cities', 'refresh');
        }
    }


    ######################### DEACTIVE CHECKED CITIES ##############################

    if (isset($_POST['city_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE cities SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/cities', 'refresh');
        } else {
            redirect(base_url() . '/cities', 'refresh');
        }
    }
    ##################################################################################


    ######################### ACTIVE CHECKED USERS ##############################

    if (isset($_POST['user_activate'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {

                $guncelle = mysqli_query($conn, "UPDATE ads_users SET status=2  WHERE id = '" . $onearr[$i] . "'");
                $guncelle_ads = mysqli_query($conn, "UPDATE ads SET status=2 WHERE user_id='" . $onearr[$i] . "' ");
            }
            redirect(base_url() . '/users', 'refresh');
        } else {
            redirect(base_url() . '/users', 'refresh');
        }
    }

    ##################################################################################


    ######################### DEACTIVE CHECKED USERS ##############################

    if (isset($_POST['user_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE ads_users SET status=1  WHERE id = '" . $onearr[$i] . "'");
                $guncelle_ads = mysqli_query($conn, "UPDATE ads SET status=1 WHERE user_id='" . $onearr[$i] . "' ");
            }
            redirect(base_url() . '/users', 'refresh');
        } else {
            redirect(base_url() . '/users', 'refresh');
        }
    }

    ##################################################################################


    if (isset($_POST['advertisement_active'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE ads SET status=2  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/advertisements', 'refresh');
        } else {
            redirect(base_url() . '/advertisements', 'refresh');
        }
    }
    ##################################################################################

    ##################################################################################


    if (isset($_POST['advertisement_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE ads SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/advertisements', 'refresh');
        } else {
            redirect(base_url() . '/advertisements', 'refresh');
        }
    }
    ##################################################################################



    ######################### ACTIVE CHECKED ADS TYPE ##############################

    if (isset($_POST['ads_type_active'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE realty_kinds SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/ads_type', 'refresh');
        } else {
            redirect(base_url() . '/ads_type', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED CITIES ##############################

    if (isset($_POST['ads_type_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE realty_kinds SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/ads_type', 'refresh');
        } else {
            redirect(base_url() . '/ads_type', 'refresh');
        }
    }
    ##################################################################################

    ######################### ACTIVE CHECKED REALTY KINDS ##############################

    if (isset($_POST['realty_type_active'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE realty_types SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/realty_kind', 'refresh');
        } else {
            redirect(base_url() . '/realty_kind', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED REALTY KINDS  ##############################

    if (isset($_POST['realty_type_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE realty_types SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/realty_kind', 'refresh');
        } else {
            redirect(base_url() . '/realty_kind', 'refresh');
        }
    }
    ##################################################################################


    ######################### ACTIVE CHECKED REGIONS ##############################

    if (isset($_POST['region_active'])) {

        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE regions SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/regions', 'refresh');
        } else {
            redirect(base_url() . '/regions', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED REGIONS ##############################

    if (isset($_POST['region_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE regions SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/regions', 'refresh');
        } else {
            redirect(base_url() . '/regions', 'refresh');
        }
    }
    ##################################################################################



    ######################### ACTIVE CHECKED HASHTAGS ##############################

    if (isset($_POST['hashtag_active'])) {

        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE hashtags SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/hashtags', 'refresh');
        } else {
            redirect(base_url() . '/hashtags', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED HASHTAGS ##############################

    if (isset($_POST['hashtag_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE hashtags SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/hashtags', 'refresh');
        } else {
            redirect(base_url() . '/hashtags', 'refresh');
        }
    }
    ##################################################################################

    ######################### ACTIVE CHECKED SETTLEMENTS ##############################

    if (isset($_POST['settlement_active'])) {

        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE settlements SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/settlements', 'refresh');
        } else {
            redirect(base_url() . '/settlements', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED SETTLEMENTS ##############################

    if (isset($_POST['settlement_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE settlements SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/settlements', 'refresh');
        } else {
            redirect(base_url() . '/settlements', 'refresh');
        }
    }
    ##################################################################################


    ######################### ACTIVE CHECKED METRO STATION ##############################

    if (isset($_POST['metro_active'])) {

        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE metros SET status=1  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu aktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu aktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/metro_stations', 'refresh');
        } else {
            redirect(base_url() . '/metro_stations', 'refresh');
        }
    }
    ##################################################################################

    ######################### DEACTIVE CHECKED METRO STATION ##############################

    if (isset($_POST['metro_deactive'])) {
        if (isset($_POST['id']) and !empty($_POST['id'])) {
            $id      = $_POST['id'];
            $onearr  = array_combine(range(1, count($id)), $id);
            $say     = count($id) + 1;
            for ($i = 1; $i < $say; $i++) {
                $guncelle = mysqli_query($conn, "UPDATE metros SET status=0  WHERE id = '" . $onearr[$i] . "'");
                // $title   = $_SESSION['username']." Bloqun statusu deaktiv olaraq dəyişdirdi";
                // $content = "Bloqun statusu deaktiv olaraq dəyişdirildi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
                // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
                // $log_run = mysqli_query($conn,$logs);
            }
            redirect(base_url() . '/metro_stations', 'refresh');
        } else {
            redirect(base_url() . '/metro_stations', 'refresh');
        }
    }
    ##################################################################################


    ############################# DELETE ADS TYPE BY ID #################################
    if (isset($_GET['del_adstype']) and $_GET['del_adstype'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM realty_kinds WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "DELETE FROM realty_kinds WHERE id=" . $id . "");


            redirect(base_url() . '/ads_type', 'refresh');
        } else {
            redirect(base_url() . '/ads_type', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE CITIES BY ID #################################
    if (isset($_GET['del_metro']) and $_GET['del_metro'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM metros WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "DELETE FROM metros WHERE id=" . $id . "");


            redirect(base_url() . '/metro_stations', 'refresh');
        } else {
            redirect(base_url() . '/metro_stations', 'refresh');
        }
    }

    ####################################################################################



    ############################# DELETE USERS BY ID #################################


    if (isset($_GET['del_users']) and $_GET['del_users'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $guncelle = mysqli_query($conn, "UPDATE ads_users SET status=0 WHERE id=" . $id . "");

            $guncelle_ads = "UPDATE ads SET status=0 WHERE user_id='" . $id . "' ";
            $run_guncelle = mysqli_query($conn, $guncelle_ads);

            redirect(base_url() . '/users', 'refresh');
        } else {
            redirect(base_url() . '/users', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE CITIES BY ID #################################
    if (isset($_GET['del_advertisement']) and $_GET['del_advertisement'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM ads WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "UPDATE ads SET status=0 WHERE id=" . $id . "");


            redirect(base_url() . '/advertisements', 'refresh');
        } else {
            redirect(base_url() . '/advertisements', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE CITIES BY ID #################################
    if (isset($_GET['del_cities']) and $_GET['del_cities'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM cities WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "DELETE FROM cities WHERE id=" . $id . "");


            redirect(base_url() . '/cities', 'refresh');
        } else {
            redirect(base_url() . '/cities', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE REGİONS BY ID #################################
    if (isset($_GET['del_region']) and $_GET['del_region'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM regions WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "DELETE FROM regions WHERE id=" . $id . "");


            redirect(base_url() . '/regions', 'refresh');
        } else {
            redirect(base_url() . '/regions', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE HASHTAG BY ID #################################
    if (isset($_GET['del_hashtag']) and $_GET['del_hashtag'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM hashtags WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "DELETE FROM hashtags WHERE id=" . $id . "");


            redirect(base_url() . '/hashtags', 'refresh');
        } else {
            redirect(base_url() . '/hashtags', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE SETTLEMENT BY ID #################################
    if (isset($_GET['del_settlement']) and $_GET['del_settlement'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM settlements WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            // $title   = $_SESSION['username']." ".$rows['blog_title']." başlıqlı bloqu sildi";
            // $content = $rows['blog_title']." başlıqlı bloq silindi. Dəyişiklik edən IP adresi ".getIP()." , istifadə edilən Brauzer ".user_brauzer($_SERVER['HTTP_USER_AGENT'])." ";
            // $logs    = "INSERT INTO logs (log_title,log_content) VALUES('".$title."','".$content."')";
            // $log_run = mysqli_query($conn,$logs);

            // unlink($sekil);
            $guncelle = mysqli_query($conn, "DELETE FROM settlements WHERE id=" . $id . "");


            redirect(base_url() . '/settlements', 'refresh');
        } else {
            redirect(base_url() . '/settlements', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE WORDS BY ID #################################
    if (isset($_GET['del_word']) and $_GET['del_word'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM languages WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);

            $title    = $_SESSION['username'] . " " . $rows['word'] . " sözünü tərcümələr bazasından sildi.";
            $content  = $rows['word'] . " sözü tərcümələr bazasından silindi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
            $logs     = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
            $log_run  = mysqli_query($conn, $logs);

            $guncelle = mysqli_query($conn, "DELETE FROM languages WHERE id=" . $id . "");


            redirect(base_url() . '/edit_lang/' . $_GET['lang'] . '', 'refresh');
        } else {
            redirect(base_url() . '/edit_lang/' . $_GET['lang'] . '', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE STAFF BY ID #################################
    if (isset($_GET['del_staff']) and $_GET['del_staff'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM staff WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/blog/" . $rows['blog_photo'];

            if (file_exists($sekil)) {
                $title   = $_SESSION['username'] . " " . $rows['name'] . " " . $rows['surname'] . " adlı işçini sildi";
                $content = $rows['name'] . " " . $rows['surname'] . " adlı işçi silindi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
                $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
                $log_run = mysqli_query($conn, $logs);

                unlink($sekil);
                $guncelle = mysqli_query($conn, "DELETE FROM blogs WHERE id=" . $id . "");
            }

            redirect(base_url() . '/staff_list', 'refresh');
        } else {
            redirect(base_url() . '/staff_list', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE BLOG PHOTO #################################

    if (isset($_GET['del_blog_photo']) and $_GET['del_blog_photo'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM blogs WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/blog/" . $rows['blog_photo'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE blogs SET blog_photo='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_blog/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/blog_list', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE BLOG PHOTO #################################

    if (isset($_GET['del_slide_photo']) and $_GET['del_slide_photo'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM slider WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/slider/" . $rows['slide_photo'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE slider SET slide_photo='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_slide/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/slide_list', 'refresh');
        }
    }

    ####################################################################################

    ############################# DELETE SLIDE BY ID #################################
    if (isset($_GET['del_slide']) and $_GET['del_slide'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM slider WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/slider/" . $rows['slide_photo'];

            if (file_exists($sekil)) {
                $title   = $_SESSION['username'] . " " . $rows['slide_title'] . " başlıqlı slaydı sildi";
                $content = $rows['slide_title'] . " başlıqlı slayd silindi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
                $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
                $log_run = mysqli_query($conn, $logs);

                unlink($sekil);
                $guncelle = mysqli_query($conn, "DELETE FROM slider WHERE id=" . $id . "");
            }

            redirect(base_url() . '/slide_list', 'refresh');
        } else {
            redirect(base_url() . '/slide_list', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE SLIDE BY ID #################################
    if (isset($_GET['del_video_slide']) and $_GET['del_video_slide'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM slide_videos WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);


            $title   = "Video slayd silindi";
            $content = "Video slayd silindi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
            $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
            $log_run = mysqli_query($conn, $logs);

            $guncelle = mysqli_query($conn, "DELETE FROM slide_videos WHERE id=" . $id . "");

            redirect(base_url() . '/video_slide_list', 'refresh');
        } else {
            redirect(base_url() . '/video_slide_list', 'refresh');
        }
    }

    ####################################################################################







    ############################# ORDER SLIDER #################################

    ################### SLIDER CHANGE DRAG DROP SORT NUMBER   ###########################
    if (!empty($_GET['slider_order']) and $_GET['slider_order'] == 'orderable') {
        $id = $_POST["item"];
        $onearr = array_combine(range(1, count($id)), $id);
        $say = count($id) + 1;
        for ($i = 1; $i < $say; $i++) {
            $guncelle = mysqli_query($conn, "UPDATE slider SET sira_no='" . $i . "'  WHERE id = '" . $onearr[$i] . "'");
        }
        $data = [
            'sorguMsj'   => 'Yeniləndi',
            'sorguNtc'   => true
        ];
        echo json_encode($data);
    }

    ####################################################################################

    ############################## VIDEO SLIDER SORT ###################################

    if (!empty($_GET['video_slider_order']) and $_GET['video_slider_order'] == 'orderable') {
        $id = $_POST["item"];
        $onearr = array_combine(range(1, count($id)), $id);
        $say    = count($id) + 1;
        for ($i = 1; $i < $say; $i++) {
            $guncelle = mysqli_query($conn, "UPDATE slide_videos SET sira='" . $i . "'  WHERE id = '" . $onearr[$i] . "'");
        }
        $data = [
            'sorguMsj'   => 'Yeniləndi',
            'sorguNtc'   => true
        ];
        echo json_encode($data);
    }



    ####################################################################################

    ################### HOME ORDER CHANGE DRAG DROP SORT NUMBER   ###########################
    if (!empty($_GET['home_order']) and $_GET['home_order'] == 'orderable') {
        $id = $_POST["item"];
        $onearr = array_combine(range(1, count($id)), $id);
        $say = count($id) + 1;
        for ($i = 1; $i < $say; $i++) {
            $guncelle = mysqli_query($conn, "UPDATE home_order SET order_no='" . $i . "'  WHERE id = '" . $onearr[$i] . "'");
        }
        $data = [
            'sorguMsj'   => 'Yeniləndi',
            'sorguNtc'   => true
        ];
        echo json_encode($data);
    }

    ####################################################################################

    ######################### DELETE ALBOM BY ID ##############################
    if (isset($_GET['albomdel']) and $_GET['albomdel'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    =  mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM photo_albums WHERE id='" . $id . "'";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/photo_gallery/" . $rows['album_kapak'];

            if (file_exists($sekil)) {
                $title   = $_SESSION['username'] . " " . $rows['album_name'] . " başlıqlı albomu sildi";
                $content = $rows['album_name'] . " başlıqlı albom silindi. Dəyişiklik edən IP adresi " . getIP() . " , istifadə edilən Brauzer " . user_brauzer($_SERVER['HTTP_USER_AGENT']) . " ";
                $logs    = "INSERT INTO logs (log_title,log_content) VALUES('" . $title . "','" . $content . "')";
                $log_run = mysqli_query($conn, $logs);

                unlink($sekil);
                $guncelle = mysqli_query($conn, "DELETE FROM photo_albums WHERE id=" . $id . "");
            }

            redirect(base_url() . '/album_list', 'refresh');
        } else {
            redirect(base_url() . '/album_list', 'refresh');
        }
    }


    ##################################################################################

    ############################# DELETE ALBUM COVER PHOTO #################################

    if (isset($_GET['del_album_cover']) and $_GET['del_album_cover'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM photo_albums WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/photo_gallery/" . $rows['album_kapak'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE photo_albums SET album_kapak='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_album/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/album_list', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE VIDEO COVER PHOTO #################################

    if (isset($_GET['del_video_cover']) and $_GET['del_video_cover'] == "ok") {
        if (isset($_GET['id']) and !empty($_GET['id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $selec = "SELECT * FROM videos WHERE id=" . $id . "";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/videos/" . $rows['cover_photo'];

            if (file_exists($sekil)) {
                $guncelle = mysqli_query($conn, "UPDATE videos SET cover_photo='' WHERE id=" . $id . "");
                unlink($sekil);
            }
            redirect(base_url() . '/edit_video/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/videos_list', 'refresh');
        }
    }

    ####################################################################################


    ############################# DELETE ALBUM COVER PHOTO #################################

    if (isset($_GET['del_photo']) and $_GET['del_photo'] == "ok") {
        // dd($_GET);
        if (isset($_GET['id']) and !empty($_GET['id']) and isset($_GET['album_id']) and !empty($_GET['album_id'])) {
            $id    = mysqli_real_escape_string($conn, $_GET['id']);
            $album = mysqli_real_escape_string($conn, $_GET['album_id']);
            // dd($_GET);
            $selec = "SELECT * FROM photos WHERE id='" . $album . "' AND albums_id='" . $id . "'";
            $mys   =  mysqli_query($conn, $selec);
            $rows  =  mysqli_fetch_array($mys);
            $sekil =  "../../../assets/uploads/photo_gallery/photos/" . $rows['photo_src'];

            if (file_exists($sekil)) {

                $guncelle = "DELETE FROM photos WHERE id='" . $album . "' AND albums_id='" . $id . "'";
                $run      = mysqli_query($conn, $guncelle);
                unlink($sekil);
            }
            redirect(base_url() . '/album_photo/' . $id . '', 'refresh');
        } else {
            redirect(base_url() . '/album_list', 'refresh');
        }
    }

    ####################################################################################
} else {
    echo "NO ACCESS";
}
