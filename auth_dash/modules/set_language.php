<?php 
if (isset($_GET['lang']) AND (!empty($_SESSION['username']))) 
{
    $action = clean($_GET['lang']);
    $sql = "SELECT * FROM language_list WHERE lang_field='".$action."'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($run);
    set_userdata('set_lang', $action);
    set_userdata('lang_flag', $row['flag_key']);
    if (!empty($_SERVER['HTTP_REFERER'])) {
        redirect($_SERVER['HTTP_REFERER']);
    }
    else{
        redirect(base_url('home'), 'refresh');  
    }
}
else
{
        redirect(base_url('home'), 'refresh'); 
}
?>

