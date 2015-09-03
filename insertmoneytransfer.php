<?php
if( $_POST )
{
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("moneytransfer", $con);

  $users_name = mysql_real_escape_string($_POST['display_name']);
  $users_email = mysql_real_escape_string($_POST['email']);
  $users_password = mysql_real_escape_string($_POST['password']);
  $users_phone = mysql_real_escape_string($_POST['phone_number']);
  
  $query = "
  INSERT INTO `moneytransfer`.`user` (`id`, `name`, `email`, `pin`,
        `account`, `password`, `phone`) VALUES (NULL, '$users_name',
        '$users_email', '$users_pin', '$user_amount',
        $users_password, '$users_phone');";

  mysql_query($query);

  echo "<h2>Thank you for registreation!</h2>";

  mysql_close($con);
  header("Location: /agencyDelta/moneytransfer/signin.php");
  exit(0);   
  
}
?>
  