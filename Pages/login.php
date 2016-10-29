<!DOCTYPE html>
<html lang="en">
<head>
  <title>Phodory</title>
  <meta name="description" content="Welcome to the Phodory Website. Share your photos with your friends!">
  <meta name="keyword" content="search, engine, optimization, search engine optimization, SEO">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/sunrise_logo.png">
    <!-- Google Fonts --> <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- BootStrap CSS --> <link href="css/material-kit.css" rel="stylesheet">
    <!-- FontAwesome CSS --> <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- BootStrap CSS --> <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google Theme CSS --> <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>

    body { font-family: 'Roboto', sans-serif;}

    </style>
</head>
<body>

    <!-- Top Navigation Bar (Locked In) -->
    <div id="navbar">
	            <div class="navigation-example">
    <nav class="navbar navbar-success">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-success">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">
      <img src="images/sunrise_logo.png" height="35px" width="35px"></img>
    </a>
    </div>

                    <!-- Navigation bar elements -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-home" aria-hidden="true"></i> Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

                                <ul class="dropdown-menu"> <li><a><b>Create</b></a></li>
                                    <li><a href="index.html">Landing Page</a></li>
                                    <li><a href="Pages/lobby_home.html">Lobby Template</a></li>
                                    <li><a href="Pages/profile_kumamon.html">Profile Template</a></li>
                                    <li><a href="Pages/status.html">Website Status</a></li>
                                    <li><a href="Pages/login.php">Login</a></li>
                                    <li><a href="Pages/upload.php">Upload</a></li>

                                    <li role="separator" class="divider"></li> <li><a><b>Picture Templates</b></a></li>
                                    <li><a href="Pages/4ColPort.html">4 Column Port</a></li>
                                    <li><a href="Pages/3ColPort.html">3 Column Port</a></li>
                                    <li><a href="Pages/ThumbnailPort.html">Thumbnail Port</a></li>

                                    <li role="separator" class="divider"></li> <li><a><b>Error Page</b></a></li>
                                    <li><a href="Error/404.html">Area 404 Page Not Found</a></li>
                                    <li><a href="Error/403.html">Area 403</a></li>
                                    <li><a href="Error/500.html">Area 500 Server's Problem</a></li>
                                    <li><a href="Error/ErrorList.html">HTTP Response Code</a></li>

                                    <li role="separator" class="divider"></li>
                                    <li><a href="images/nyancat_origin.png">Nyan.cat</a></li>

                                </ul>

                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-external-link-square" aria-hidden="true"></i> Connect <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

                                <ul class="dropdown-menu"> <li><a><b>Website Resources</b></a></li>
                                    <li><a href="https://getbootstrap.com/">BootStrap 3.3.7</a></li>
                                    <li><a href="http://fontawesome.io/">Font Awesome</a></li>
                                    <li><a href="https://fonts.google.com/">Google Fonts</a></li>
                                    <li><a href="https://www.google.com/webmasters/tools/home?hl=en&authuser=0">Google Search Console</a></li>
                                    <li><a href="https://developers.facebook.com/">Facebook Developer Tools</a></li>
                                    <li><a href="https://dev.twitter.com/"> Twitter Developer Tools</a></li>

                                    <li role="separator" class="divider"></li> <li><a><b>Amazon Web Service</b></a></li>
                                    <li><a href="https://aws.amazon.com/ec2/">Amazon EC2</a></li>
                                    <li><a href="https://aws.amazon.com/codedeploy/">Amazon CodeDeploy</a></li>
                                    <li><a href="https://aws.amazon.com/s3/">Amazon S3</a></li>
                                    <li><a href="https://aws.amazon.com/autoscaling/">Amazon AutoScaling</a></li>

                                    <li role="separator" class="divider"></li> <li><a><b>GitHub</b></a></li>
                                    <li><a href="https://github.com/">GitHub</a></li>
                                    <li><a href="https://github.com/sagelga/ITF_Project">ITF Project Repository</a></li>
                                    <li><a href="https://github.com/sagelga/ITF_Project/commits/master">ITF Project Master Branch</a></li>
                                    <li><a href="https://github.com/sagelga/ITF_Project/blob/master/README.md">README for ITF Project</a></li>
                                </ul>

                            </li>
                        </ul>

            </div>
          </div>
    </nav>

    <h1 align="center">One account. All of SunRise.</h1>
    <p align="center">Sign in to continue to SunRise Uploader</p>
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

    <h3 align="center">AWS EC2 Estimated Costs</h3>
    <p align="center">
      <iframe src="https://app.datadoghq.com/graph/embed?token=f588f1cf8aaa8ebc38836130034ccbbe6bdd2e54bf35724a5e397a1acddfa25c&height=200&width=400&legend=true" width="400" height="200" frameborder="0"></iframe>
    </p>

    <br>
    <hr>
    <br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <h3>Sector</h3>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                </div>

                <div class="col-md-2 col-xs-6">
                    <h3>Sector</h3>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                </div>

                <div class="col-md-2 col-xs-6">
                    <h3>Sector</h3>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                </div>

                <div class="col-md-2 col-xs-6">
                    <h3>Connect</h3>
                    <p href="">Facebook</p>
                    <p href="">Twitter</p>
                    <p href="">YouTube</p>
                    <p href="">LinkedIn</p>
                </div>

                <div class="col-md-4 col-xs-12">
                    <h3 align="center"><img src="http://54.254.168.155/images/sunrise_logo.png"> Sun Rise</h3>
                    <center>
                      <!-- Enable ToolTip functionality -->
                      <script> $(function () {$('[data-toggle="tooltip"]').tooltip()}) </script>

                      Change Language

                      <div id="google_translate_element" data-toggle="tooltip" data-placement="top" title="Choose your preferred language. Powered by Google Translate"></div>
                      <script type="text/javascript"> function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', multilanguagePage: true, gaTrack: true, gaId:'UA-86183782-1'}, 'google_translate_element');}</script>
                      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </center>

                    <br>

                    <p align="center"><a href="">Sitemaps</a> | <a href="http://54.254.168.155/Pages/status.html">Status</a> | <a href="">Contact Us</a></p>


                </div>
            </div>
        </div>
    </footer>
    <!-- Boostrap Config Import -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://54.254.168.155/js/jquery.js"></script>
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-86183782-1', 'auto');ga('send', 'pageview');
</body>
</html>

<!--
Nyan nyan nyan nyan nyan nyan nyan nyan
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
-->
