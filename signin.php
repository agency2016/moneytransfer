<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Log in </title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/moneytransfer.css" rel="stylesheet">

        <!--money transfer CSS-->
        <link href="css/moneytransfer.css" rel="stylesheet">

        <!--cdn-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    </head>

    <body>
        <?php
        include 'common/header.php';
        ?>
        <div class="container">
            <div class="row" class="loginwrapper">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
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
                    if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
                        ?>

                        <h1>Member Area</h1>
                        <pThanks for logging in! You are <code><?= $_SESSION['Username'] ?></code> and your email address is <code><?= $_SESSION['EmailAddress'] ?></code>.</p>

                            <?php
                        } elseif (!empty($_POST['email']) && !empty($_POST['password'])) {
                            $con = mysql_connect("localhost", "root", "");

                            if (!$con) {
                                die('Could not connect: ' . mysql_error());
                            }

                            mysql_select_db("moneytransfer", $con);


                            $username = mysql_real_escape_string($_POST['email']);
                            $password = mysql_real_escape_string($_POST['password']);

                            $checklogin = mysql_query("SELECT * FROM user WHERE email = '" . $username . "' AND password = '" . $password . "'");

                            if (mysql_num_rows($checklogin) == 1) {
                                $row = mysql_fetch_array($checklogin);
                                $email = $row['email'];
                                $display_name = $row['name'];
                                $_SESSION['Username'] = $display_name;
                                $_SESSION['EmailAddress'] = $email;
                                $_SESSION['LoggedIn'] = 1;
                                mysql_close($con);

                                echo "<h1>Success</h1>";
                                echo "<p>We are now redirecting you to the member area.</p>";
                                echo "<meta http-equiv='refresh' content='=12;signin.php' />";
                            } else {
                                echo "<h1>Error</h1>";
                                echo "<p>Sorry, your account could not be found. Please <a href=\"signin.php\">click here to try again</a>.</p>";
                            }
                        } else {
                            ?>
                            <div class="row custom-login">
                                <div class="col-md-6 col-md-offset-3 ">
                                    <form role="form" action="signin.php" method="post">
                                        <h2>Welcome back.</h2>
                                        <hr class="colorgraph">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                                </div>
                                            </div>
                                        </div>
                                        <!--<hr class="colorgraph">-->
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6"><input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                            <p>If you have no account <a href="signup.php">registration </a>here</p>
                                        </div>
                                    </form>

                                </div>
                            </div>





                            <?php
                        }
                        ?>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?php
        include 'common/footer.php';
        ?>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>






