<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>One Page Wonder - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/one-page-wonder.css" rel="stylesheet">

        <!--cdn-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    </head>

    <body>
         <div class="container">
        <?php
                include 'common/header.php';
        ?>
        <!-- Full Width Image Header -->
        <header class="header-image" style="background-image: url('assets/image/banner1.jpg'); height: 400px;">
            <div class="headline">
                <div class="container">
                    <!--                    <h1>One Page Wonder</h1>
                                        <h2>Will Knock Your Socks Off</h2>-->

<!--                    <div class="row" style="margin-top: -80px;">
                        <div class="col-lg-4 col-sm-12">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>                                                              
                                <button type="submit" class="btn btn-default btn-lg btn-block btn-success">Log in</button>
                            </form>
                        </div>
                    </div>-->
                </div>
            </div>
        </header>

        <!-- Page Content -->
       



            <hr class="featurette-divider">

            <!-- First Featurette -->
            <div class="featurette" id="about">
                <img class="featurette-image img-circle img-responsive pull-right" src="http://placehold.it/500x500">
                <h2 class="featurette-heading">Just few click to
                    <span class="text-muted">Transfer money</span>
                </h2>
                <p class="lead"></p>
            </div>

            <hr class="featurette-divider">

            <!-- Second Featurette -->
            <div class="featurette" id="services">
<!--                <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
                <h2 class="featurette-heading">The Second Heading
                    <span class="text-muted">Is Pretty Cool Too.</span>
                </h2>-->
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>

            <!--<hr class="featurette-divider">-->

            <!-- Third Featurette -->
            <!--            <div class="featurette" id="contact">
                            <img class="featurette-image img-circle img-responsive pull-right" src="http://placehold.it/500x500">
                            <h2 class="featurette-heading">The Third Heading
                                <span class="text-muted">Will Seal the Deal.</span>
                            </h2>
                            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                        </div>-->

            <hr class="featurette-divider">

            <?php
                include 'common/footer.php';
            ?>
        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
