<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/light-fire-line-2/512/flame-512.png">
    <title>ITF Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        html {
            font-family: 'Open Sans', 'Kanit', sans-serif;
        }

        body {
            padding-top: 55px;
            font-family: 'Open Sans', 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Boostrap Config Import -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <!-- Top Navigation Bar (Locked In) -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Navigation bar will be grouped for small display (smaller than iPad) -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Items that will not be hide while tab is enable -->
                <a class="navbar-brand" href="index.php">
                    <img height="25" width="25" src="images/sunrise_logo.png" alt="SunRise Logo">
                </a>
            </div>
            <!-- Navigation bar elements -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home" aria-hidden="true" alt="Dropdown"></span> Home <span class="glyphicon glyphicon-menu-down" aria-hidden="true" alt="Dropdown"></span></a>
                        <ul class="dropdown-menu">
                            <li><a><b>Create</b></a></li>
                            <li><a href="index.php">Landing Page</a></li>
                            <li><a href="404.php">Custom Page not found</a></li>
                            <li><a href="login.php">Login Page</a></li>
                            <li><a href="lobby_home.php">Lobby Template</a></li>
                            <li><a href="profile_kumamon.php">Profile Template</a></li>
                            <li><a href="4ColPort.php">4 Column Port</a></li>
                            <li><a href="3ColPort.php">3 Column Port</a></li>
                            <li><a href="ThumbnailPort.php">Thumbnail Port</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a><b>GitHub</b></a></li>
                            <li><a href="https://github.com/sagelga/ITF_Websites">GitHub Repository</a></li>
                        </ul>
                    </li>
                    <li><a href="https://github.com/sagelga/ITF_Websites"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Repository</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Link <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                        <ul class="dropdown-menu">
                            <li><a><b>Website Resources</b></a></li>
                            <li><a href="https://getbootstrap.com/">BootStrap 3.3.7</a></li>
                            <li><a href="http://fontawesome.io/">Font Awesome</a></li>
                            <li><a href="https://fonts.google.com/">Google Fonts</a></li>
                            <li><a href="https://developers.facebook.com/">Facebook Developer Tools</a></li>
                            <li><a href="https://dev.twitter.com/">Twitter Developer Tools</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" alt="User"></span></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h3>Sector</h3>
                        <p href="">Page</p>
                        <p href="">Page</p>
                        <p href="">Page</p>
                        <p href="">Page</p>
                    </div>

                    <div class="col-md-2">
                        <h3>Sector</h3>
                        <p href="">Page</p>
                        <p href="">Page</p>
                        <p href="">Page</p>
                        <p href="">Page</p>
                    </div>

                    <div class="col-md-2">
                        <h3>Sector</h3>
                        <p href="">Page</p>
                        <p href="">Page</p>
                        <p href="">Page</p>
                        <p href="">Page</p>
                    </div>

                    <div class="col-md-2">
                        <h3>Connect</h3>
                        <p href="">Facebook</p>
                        <p href="">Twitter</p>
                        <p href="">YouTube</p>
                        <p href="">LinkedIn</p>
                    </div>

                    <div class="col-md-4">
                        <h3 align="center"><img src="images/sunrise_logo.png"> Sun Rise</h3>
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <select name="language" id="language" class="form-control">
                                <option value="en" selected>English</option>
                                <option value="th">ไทย</option
                                <option value="fr">Français</option>
                                <option value="jp">日本語</option>
                                <option value="de">Deutsche</option>
                                <option value="es">Español</option>
                            </select>
                        </div>
                        <div class="col-md-2"></div>
                        <br>
                        <br>
                        <div class="col-md-4"
                            <p align="center"><a href="">Terms</a></p>
                          </div>
                          <div class="col-md-4"
                            <p align="center"><a href="">Sitemap</a></p>
                          </div>
                          <div class="col-md-4"
                            <p align="center"><a href="">Contact</a></p>
                          </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    </html>
