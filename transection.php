



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

        <!-- Custom CSS -->
        <link href="css/moneytransfer.css" rel="stylesheet">

        <!--cdn-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    </head>

    <body>
         <div class="container cusrom-wrapper-container">
        <?php
                include 'common/header.php';
        ?>
            <hr class="featurette-divider">

                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <div class="custom-msg">
                            
                            <?php 
                           // echo $_SESSION['error'];
                            if (isset($_SESSION['success']))
                            {

                              echo '<h4>'.$_SESSION['success'].'</h4>';

                              unset($_SESSION['success']);

                            } 
                            if (isset($_SESSION['error']))
                            {

                              echo '<h4>'.$_SESSION['error'].'</h4>';

                              unset($_SESSION['error']);

                            }
                        ?>
                            
                        </div>
                    <?php
             
                    if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
                    {
                         ?>

                        
                   <form role="form" action="insertmoneytransfer.php" method="post">
                       <h2>Transection any amount <small>It's secure and always will be.</small></h2>
                       <hr class="colorgraph">
                       <div class="form-group">
                           <select id="email" name="email" class="form-control">
        
                                <?php

                                $mysqlserver="localhost";
                                $mysqlusername="root";
                                $mysqlpassword="";
                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                $dbname = 'moneytransfer';
                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                $cdquery="SELECT * FROM user";
                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                $cdTitle=$cdrow["email"];
                                $cdname = $cdrow["name"];
                                if($_SESSION['EmailAddress'] != $cdTitle)
                                    echo "<option value='".$cdTitle."'>
                                        $cdname
                                    </option>";

                                }

                                ?>

                            </select>
<!--                           <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">-->
                       </div>
                       <div class="form-group">
                           <label class="sr-only" for="InputAmount">Amount (in dollars)</label>
                           <div class="input-group">
                               <div class="input-group-addon">৳</div>
                               <input type="text" class="form-control input-lg" name="amount" id="amount" placeholder="Amount">
                               <div class="input-group-addon">.00</div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6">
                               <div class="form-group">
                                   <input type="password" name="pin" id="pin" class="form-control input-lg" placeholder="Pin" tabindex="5">
                               </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                               <div class="form-group">
                                   <input type="password" name="pin_check" id="pin_check" class="form-control input-lg" placeholder="Confirm Pin" tabindex="6">
                               </div>
                           </div>
                       </div>

                       <hr class="colorgraph">
                       <div class="row">
                           <div class="col-xs-12 col-md-6"><input type="submit" value="Send" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                       </div>
                   </form>
                         
                         <?php
                    } else{
                        ?>
                        <ul class="list-unstyled transfer-login-msg">
                            <li> <h4>Please <a href="signin.php">login </a>first to transfer money !!</h4></li>
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
















   
                   
            


      
           
          
