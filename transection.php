<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Money Tractarians</title>

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
       <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form">
            <h2>Transection any amount <small>It's secure and always will be.</small></h2>
            <hr class="colorgraph">
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">৳</div>
                    <input type="text" class="form-control input-lg" id="exampleInputAmount" placeholder="Amount">
                    <div class="input-group-addon">.00</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="pin" id="password" class="form-control input-lg" placeholder="Pin" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="pin_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Pin" tabindex="6">
                    </div>
                </div>
            </div>

            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Send</a></div>
            </div>
        </form>

    </div>
</div>


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


