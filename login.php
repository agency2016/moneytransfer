<?php
session_start();
if ($_POST) {
    include 'connect.php';
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $username = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);

        $checklogin = mysql_query("SELECT * FROM user WHERE email = '".$username."' AND password = '".$password."'");

        if(mysql_num_rows($checklogin) == 1)
        {
            $row = mysql_fetch_array($checklogin);
            $email = $row['email'];
            $balance = $row['account'];
            $passport = $row['phone'];
            $display_name = $row['name'];
            $_SESSION['Username'] = $display_name;
            $_SESSION['EmailAddress'] = $email;
            $_SESSION['LoggedIn'] = 1;
            $_SESSION['Balance'] = $balance;
            $_SESSION['pass'] = $passport;
            mysql_close($con);
            $_SESSION['success'] = '<span class="error-msg" >Logged in Success!!</span>';
            header("Location: /agencyDelta/moneytransfer/signin.php");

        }
        else
        {
             $_SESSION['error'] = '<span class="error-msg" >Invalid User!!</span>';
             header("Location: /agencyDelta/moneytransfer/signin.php");
        }
    }
    else{
             $_SESSION['error'] = '<span class="error-msg" > Fill Up All Fields!!</span>';
             header("Location: /agencyDelta/moneytransfer/signin.php");
    }
    

    
}
?>
  