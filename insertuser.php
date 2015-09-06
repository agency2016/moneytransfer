<?php
session_start();
if ($_POST) {
    include 'connect.php';

    $users_name = mysql_real_escape_string($_POST['display_name']);
    $users_email = mysql_real_escape_string($_POST['email']);
    $users_password = ($_POST['password']);
    $users_phone = ($_POST['phone_number']);
    $users_pin = ($_POST['pin_number']);
    $user_amount = mysql_real_escape_string($_POST['amount']);
    //checking
    $checklogin = mysql_query("SELECT * FROM user WHERE email = '".$users_email."' OR name = '".$users_name."'");

    if (is_null($users_password) || empty($users_password) || is_null($users_pin) || empty($users_pin)) {
        mysql_close($con);
        $_SESSION['error'] = '<span class="error-msg" >Insert Necessary Information!Try again</span>';
        header("Location: /agencyDelta/moneytransfer/signup.php");
        //exit(0);
        //echo 'i am here2';
    }
    elseif (mysql_num_rows($checklogin) >= 1) {
        
        mysql_close($con);
        $_SESSION['error'] = '<span class="error-msg" >User already exist with this name or email!Try again</span>';
        header("Location: /agencyDelta/moneytransfer/signup.php");
        //exit(0);
        //echo $_SESSION['error'];
    } 
    else{
        $query = "
            INSERT INTO `moneytransfer`.`user` (`id`, `name`, `email`, `pin`,
                  `account`, `password`, `phone`) VALUES (NULL, '$users_name',
                  '$users_email', '$users_pin', '$user_amount',
                  '$users_password', '$users_phone');";

              mysql_query($query);

              mysql_close($con);
              $_SESSION['success'] = '<span class="success-msg" >Registration Complete !</span>';
              header("Location: /agencyDelta/moneytransfer/signin.php");
              exit(0);
        
    }

    
}
?>
  