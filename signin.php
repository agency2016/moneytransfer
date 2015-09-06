
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sign In</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/moneytransfer.css" rel="stylesheet">

       

        <!--cdn-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    </head>

    <body>
        <?php
        include 'common/header.php';
        ?>
         <div class="container cusrom-wrapper-container">
          
           

                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
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
                         ?>

                         <h1>Member Area</h1>
                         <table class="table table-striped">
                             
                             <tr><td>Name :</td><td><?=$_SESSION['Username']?></td></tr>
                             <tr><td>Email :</td><td><?=$_SESSION['EmailAddress']?></td></tr>
                             <tr><td>Your Balance :</td><td><?=$_SESSION['Balance']?></td></tr>
                         </table>
                         
                         <?php
                    } else{
                        ?>
                            <form role="form" action="login.php" method="post">
                                    <h2>Please Sign In <small>It's free and always will be.</small></h2>
                                    <hr class="colorgraph">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required="true"class="form-control input-lg" placeholder="Email Address" tabindex="4">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <input type="password" name="password" required="true" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="colorgraph">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6"><input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                        <p>If you have no account <a href="signup.php">registration </a>here</p>
                                    </div>
                           </form>
                         
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






<<<<<<< HEAD
=======










   
                   
            


      
           
          
>>>>>>> origin/master
