<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  define('BASEPATH', true);
  include_once("../../core/config/database.php");
  include_once("../../core/helpers/general_helper.php");
  
  $name         = clean($_POST['name']);
  $surname      = clean($_POST['surname']);
  $email        = clean($_POST['email']);
  $phone_number = clean($_POST['phone_number']);
  $password     = clean($_POST['password']);
  $username     = clean($_POST['username']);

  $error    = false;
  foreach($_POST as $key => $field) 
  {
    if (empty($_POST[$key])) 
    {
      $error = true;
    }
  }
  
  if ($error) 
  {
    $data = [ 
        'status'     => 204,
        'title'      => translate('error'),
        'message'    => translate('all_area_is_required'), 
        'sorguNtc'   => true
            ];
  }

  $user_check_query = "SELECT * FROM ads_users WHERE email='".$email."' OR phone_number='".$phone_number."' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user   = mysqli_fetch_assoc($result);
  
  if ($user) 
  { 
    if ($user['email'] === $email) 
    {
      $data = [ 
        'status'     => 204,
        'title'      => translate('error'),
        'message'    => translate('this_email_already_used'), 
        'sorguNtc'   => true
            ];
        echo json_encode($data);
        exit;
    }

    elseif ($user['phone_number'] === $phone_numbers) 
    {
       $data = [ 
        'status'     => 204,
        'title'      => translate('error'),
        'message'    => translate('this_phone_number_is_used_please_register_other_phone_number'), 
        'sorguNtc'   => true
            ];
        echo json_encode($data);
        exit;
    }
    
  }
  else
    {
      $hash_password = hash("sha256", $password);

      $query = "INSERT INTO ads_users (name, surname, email, phone_number, password, username, status) 
            VALUES('".$name."', '".$surname."', '".$email."', '".$phone_number."','".$hash_password."', '".$username."', 1)";
      $run = mysqli_query($conn, $query);

      if ($run) 
      {
        $row['id'] = mysqli_insert_id($conn);
        $select = "SELECT * FROM ads_users WHERE id='".$row['id']."'";
        $run    = mysqli_query($conn,$select);
        $bax    = mysqli_fetch_array($run);
        $sessionData = [
                  'id'                => $bax['id'],
                  'set_lang'          => settings('translation'),
                  'name'              => $bax['name'],
                  'surname'           => $bax['surname'],
                  'status'            => $bax['status'],
                  'kadi'              => $bax['username'],
                  'mail'              => $bax['email'],
                  'logged_in'         => true,
          ];

          // dd($sessionData);
          set_userdata($sessionData);
          $data = [ 
              'status'     => 200,
              'title'      => translate('success'),
              'message'    => translate('registration_success'), 
              'sorguNtc'   => true
            ];
          echo json_encode($data);
          
          exit;
      }
      else
      {
          $data = [ 
              'status'     => 204,
              'title'      => translate('error'),
              'message'    => translate('unexpected_error'), 
              'sorguNtc'   => true
            ];
          echo json_encode($data);
          exit; 
      }
        
    }
}
else
{
    include_once("index.html");
}