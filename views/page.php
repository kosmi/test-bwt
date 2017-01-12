<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Test-Kosmina</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/main.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    </head>
    <body>
        <div class="container">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Register</a>
                            </li>
                            <li>
                                <a href="#">Weather</a>
                            </li>
                            <li>
                                <a href="#">Your feedback</a>
                            </li>
                            <li>
                                <a href="#">Reviews</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">        
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Login">
                                    <input type="pass" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-log-in"></span>
                                    Log in
                                </button>
                            </form>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

            {{content}}
            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Anastasiya Kosmina</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->


        <!-- jQuery -->
        <!--<script src="js/jquery-3.1.0.min.js"></script>-->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>
