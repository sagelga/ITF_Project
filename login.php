﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/light-fire-line-2/512/flame-512.png">
    <title>ITF Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
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

    <h1 align="center">One account. All of Google.</h1>
    <p align="center">Sign in to continue to Google Drive</p>
    <div class="container-fluid">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>
                <div style="padding-top:30px" class="panel-body">
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <div id="fb-root"></div>
                                <script>
                                    (function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=999226773524788";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                    Don't have an account?
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                </div>
                <div class="panel-body">
                    <form id="signupform" class="form-horizontal" role="form">
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" placeholder="example@exapmle.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstname" placeholder="eg. Johny">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastname" placeholder="eg. Appleseed">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="passwd" placeholder="eg. Pen-Pineapple-Apple-Pen">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>Sign Up</button>
                                <span>or</span>
                                <button id="btn-fbsignup" type="button" class="btn btn-primary" disabled="disabled"><i class="icon-facebook"></i>Sign Up with Facebook</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p align="center">Made by IT KMITL Student. Please help donate.</p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" align="center">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="MXB2C4PA7R7B4" />
        <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-rect-paypal-44px.png" border="0" name="submit" title="Donate using PayPal" alt="Donate via PayPal" />
    </form>
    <p align="center">All process is done by PayPal. No refunds.</p>

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
                    <div>
                        <select name="language" id="language" class="form-control">
                            <option value="en" selected>English</option>
                            <option value="fr">Français</option>
                            <option value="de">Deutsche</option>
                            <option value="es">Español</option>
                            <option value="jp">日本語</option>
                        </select>
                    </div>
                    <br />
                    <ul>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
