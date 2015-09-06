



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Money Transection</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

       
        
         <!--money transfer CSS-->
        <link href="css/moneytransfer.css" rel="stylesheet">

        <!--cdn-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    </head>

    <body>
       
        <div class="container cusrom-wrapper-container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    

         
        <?php
                include 'common/header.php';
        ?>
            <hr class="featurette-divider">

               <div class="custom-msg">

                        <?php
                        // echo $_SESSION['error'];
                        if (isset($_SESSION['success'])) {

                            echo '<h4>' . $_SESSION['success'] . '</h4>';

                            unset($_SESSION['success']);
                        }
                        if (isset($_SESSION['error'])) {

                            echo '<h4>' . $_SESSION['error'] . '</h4>';

                            unset($_SESSION['error']);
                        }
                        ?>

                    </div>
                   
                    <?php
             
                    if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
                    {
                       

                                $mysqlserver="localhost";
                                $mysqlusername="root";
                                $mysqlpassword="";
                                $link=mysql_connect('localhost', $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                $dbname = 'moneytransfer';
                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                $cdquery="SELECT * FROM transfer_history";
                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                        
                         ?>

                        
                  
                       <h2>Recent Transfer</h2>
                       <hr class="colorgraph">
                       <h4>Money Send </h4>
                       <table class="table table-striped">
                           <tr><td>To User</td> <td>Amount</td></tr>
                           <?php
                                $checklogin = '';
                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                $cdfromuser=$cdrow["from_user"];
                                $cdto_user = $cdrow["to_user"];
                                $cdamount = $cdrow['amount'];
                                
                                if($_SESSION['id'] == $cdto_user)
                                    $checklogin = mysql_query("SELECT * FROM user WHERE id = '".$cdfromuser."'");
                                     if(mysql_num_rows($checklogin) == 1)
                                    {
                                      
                                    $row = mysql_fetch_array($checklogin);
                                    echo "<td>".$row['name']."</td><td>".$cdamount."</td>";
                                    }
                                }

                            ?>
                       </table>
                           
                       <h4>Money Received </h4>
                       <table class="table table-striped">
                           <tr><td>From User</td> <td>Amount</td></tr>
                           <?php
                                
                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                $cdfromuser=$cdrow["from_user"];
                                $cdto_user = $cdrow["to_user"];
                                $cdamount = $cdrow['amount'];
                                if($_SESSION['id'] == $cdfromuser)
                                    $checklogin = mysql_query("SELECT * FROM user WHERE id = '".$cdto_user."'");
                                     if(mysql_num_rows($checklogin) == 1)
                                    {

                                                                $row = mysql_fetch_array($checklogin);
                                                                echo "<td>".$row['name']."</td><td>".$cdamount."</td>";
                                                                echo "<td>".$cdto_user."</td><td>".$cdamount."</td>";
                                    }
                                }

                            ?>
                       </table>
                           
                         
                         <?php
                    } else{
                        ?>
                        <ul class="list-unstyled transfer-login-msg">
                            <li> <h4>Please <a href="signin.php">login </a>first to view transfer history !!</h4></li>
                        </ul>
                         <?php
                        
                        
                    }      
                    ?>
                        
                        
                        


                    </div>
                </div>

            <hr class="featurette-divider">

           
        </div>
        <!-- /.container -->
             <?php
                include 'common/footer.php';
            ?>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
















   
                   
            


      
           
          
