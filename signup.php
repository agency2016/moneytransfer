<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sign Up</title>

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

                    <form role="form" action="insertuser.php" method="post">
                        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                        <hr class="colorgraph">

                        <div class="form-group">
                            <input type="text" name="display_name" required="true" id="display_name" class="form-control input-lg" placeholder="Name" tabindex="3">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" class="form-control input-lg" placeholder="Phone Number" tabindex="3">
                        </div>
                        <div class="form-group">
                            <input type="number" name="amount" required="true" id="amount" class="form-control input-lg" placeholder="Account Amount" tabindex="3">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" required="true" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" required="true" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="pin_number" required="true" id="pin_number" class="form-control input-lg" placeholder="Pin Number" tabindex="6">
                                </div>
                            </div>
                        </div>


                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                            <div class="col-xs-12 col-md-6"><a href="signin.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <hr/>
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



