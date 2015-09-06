<?php session_start(); ?>
<?php

if ($_POST) {
    include 'connect.php';
    $user_from = $_SESSION['EmailAddress'];
    $user_from_mail = $_SESSION['Username'];
    //echo $user_from;
    //echo $user_from_mail;
    $checklogin = mysql_query("SELECT * FROM user WHERE name = '" . $user_from_mail . "' AND email = '" . $user_from . "'");
    $from_id =0;
    $pin = 0;
    $amount = 0;
    if (mysql_num_rows($checklogin) == 1) {
        $row = mysql_fetch_array($checklogin);
        $from_id = $row['id'];
        $pin = $row['pin'];
        $amount = $row['account'];
    }
    $users_to = mysql_real_escape_string($_POST['email']);
    $users_amount = mysql_real_escape_string($_POST['amount']);
    $users_pin = mysql_real_escape_string($_POST['pin']);
    $users_pincheck = mysql_real_escape_string($_POST['pin_check']);
    
//    echo $users_pin;
//    echo $users_pincheck;
//    echo $pin;
//    exit;
    if ($users_pin != $users_pincheck || $users_pin != $pin) {

        //echo "<h2>Check Pin Number!</h2>";
        mysql_close($con);
        $_SESSION['error'] = '<span class="error-msg" >Insert Necessary Information Correctly!Try ASgain</span>';
        header("Location: /agencyDelta/moneytransfer/transection.php");
        exit(0);
    } 
    else if($amount<= $users_amount){
        
       
        mysql_close($con);
        $_SESSION['error'] = '<span class="error-msg" >Dont have suficient balance!</span>';
        header("Location: /agencyDelta/moneytransfer/transection.php");
        exit(0);
    }
    else {
        
        $get_user_to = mysql_query("SELECT * FROM user WHERE email = '" . $users_to . "'");
        $user_obj_to = mysql_fetch_array($get_user_to);
        $to_id = $user_obj_to['id'];
        $to_amount = $user_obj_to['account'];
        $to_name = $user_obj_to['name'];
        // $sql = "UPDATE user SET lastname='Doe' WHERE id='".."'";
        //update two users 
       // echo $to_id;echo $from_id;exit;
        $query = "
        INSERT INTO `moneytransfer`.`transfer_history` (`id`, `from_user`, `to_user`, `amount`
             ) VALUES (NULL, '$to_id','$from_id',
              '$users_amount'
           );";

        mysql_query($query);
        $from_current = $amount - $users_amount;
        $to_current = $to_amount+$users_amount;
        $sql = "UPDATE user SET account='".$to_current."' WHERE id='".$to_id."'";
        mysql_query($sql);
        $sql = "UPDATE user SET account='".$from_current."' WHERE id='".$from_id."'";
        mysql_query($sql);
        $_SESSION['Balance'] =  $from_current;
        $_SESSION['success'] = '<span class="success-msg" >You have successfully transferred money '.$users_amount.' to '.$to_name.'!</span>';
        mysql_close($con);
        header("Location: /agencyDelta/moneytransfer/signin.php");
        exit(0);
    }
}
?>
  