<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to AGMIS!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!--Map CSS-->
    <link href="css/ammap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--Map Js-->
    <script src="js/ammap.js" type="text/javascript"></script>
    <script src="js/ugandaLow.js" type="text/javascript"></script>

    <style>
        #navbar-list li a{
            font-family:"Open Sans Semibold";
        }
        #navbar-list li button
        {
            font-family:"Open Sans Semibold";
        }
    </style>
    <script>
        var map = AmCharts.makeChart("mapdiv", {
            type: "map",



            balloon: {
                color: "#000000"
            },

            dataProvider: {
                map: "ugandaLow",
                getAreasFromMap: true
            },

            areasSettings: {
                autoZoom: true,
                selectedColor: "#CC0000"
            },

            smallMap: {}
        });
    </script>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top shadow" role="navigation" style="height:70px; background: #373E46; border:0px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" style="font-family:'Open Sans Semibold'; color:#fff; font-size:33px;">
                Agmis
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="navbar-list">
            <li>
                <a href="#">REPORTS</a>
            </li>

                <li>
                    <a href="#">STATISTICS</a>
                </li>
                <li>
                    <a href="#">SUMMARIES</a>
                </li>
                <li>
                    <button type="submit" class="btn btn-default sharp-corners shadow" style="color:#fff;margin-top:10px; border:1px solid #373E46; background:#373E46;">CONTACT US</button>
                </li>
                <li>
                    &nbsp&nbsp<button type="submit" class="btn btn-default sharp-corners shadow" style="color:#000;margin-top:10px; border:1px solid #373E46; background:#fff;">LOGIN</button>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</header>

<br>
<div class="jumbotron">
<div class="container">

    <div class="col-md-7">


    <p style="font-size:50px; color:#fff;">GET PRODUCT PRICES</p>

    <div class="panel panel-default shadow" style="border-radius:0px; width:500px; background:#373E46; border:1px solid #373E46;">

        <div class="container">

        <p style="color:#fff;">Get an update when a new report arrives</p>
        <p>
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter your Email Address" arialdescribedby="basic-addon2" style="border-radius:0px;">
            <span class="input-group-addon" id="basic-addon2" style="border-radius:0px; cursor:pointer; font-weight:bold; background:#FFB401;">SUBSCRIBE</span>
        </div>
        </p>

            <p style="font-size:15px; text-decoration: underline;"><a href="#" style="color:#fff;">Download Previous Reports</a></p>

        </div>

    </div>
    </div>

</div>
</div>


<div class="container" style=" margin-top:-50px; position: relative;">

    <div class="panel panel-default shadow" style="font-family:'Open Sans';">
        <div class="panel-body">
            <h3 class="page-header">Statistical Map of Uganda showing Product Prices</h3>
            <!--Statistical Map of Uganda-->
            <div id="mapdiv" class="col-md-5" style="border:0px solid gray; width: 500px; background-color:#EEEEEE; height: 400px;"></div>


            <!--Notes-->

            <div class="col-md-6" style="border:0px solid gray;">

                <h3>Agricultural Information Reporting System</h3>
                <p class="lead">Globally benchmark interdependent benefits vis-a-vis magnetic leadership skills. Authoritatively productivate future-proof products via empowered channels. Authoritatively syndicate plug-and-play functionalities.</p>
                <p>Authoritatively pontificate enabled ideas and user friendly ROI. Objectively pontificate granular meta-services and market positioning ideas. Interactively engineer 2.0 manufactured products without sustainable quality vectors. Globally conceptualize parallel growth strategies with.</p>
                <button class="btn btn-default" style="border-radius:0px;">READ MORE</button>

            </div>

        </div>



    </div>



</div>


<br><br>
<!--Well-->
<div class="well" style="border-radius:0px; border:1px solid #fff; background:#fff;">

    <div class="container">
<div class="col-md-7" style="font-family:'Open Sans';">
    <h2>Make accurate statistical analysis</h2>
    <p style="font-size:20px;">Get the best data from the only true sources that you trust</p>
</div>

        <img src="img/imac.png" class="img-responsive">



    </div>



    <br><br>
    <!--Well-->
    <div class="well" style="border-radius:0px; border:1px solid #fff; background:#fff;">

        <div class="container">
            <div class="col-md-7" style="font-family:'Open Sans';">
                <h2>We are Mobile Friendly</h2>
                <p style="font-size:20px;">Get the best data from the only true sources that you trust</p>
            </div>

            <img src="img/s.jpg" class="img-responsive">



        </div>



<style>
        .make-border{
            border:1px solid gray;
        }
    .sharp-corners {
        border-radius:0px;
    }
</style>

        <div class="container" style="font-family:'Open Sans';">

            <center>
                <h1 class="page-header" style="font-family: 'Open Sans Light'; font-size:40px;">Our data creates solutions for different industries</h1>
            </center>

            <div class="panel panel-default" style="border-radius:0px; border:0px solid #fff;">
            <div class="panel-body">

                <table class="table make-border-two" id="table-x">
                    <tr class="make-border-two">
                        <td class="make-border-two">
                            <i class="fa fa-android fa-5x"></i>
                            <p>Android</p>
                        </td>
                        <td class="make-border-two">
                            <i class="fa fa-apple fa-5x"></i>
                            <p>Apple</p>
                        </td>
                        <td class="make-border-two">
                            <i class="fa fa-windows fa-5x"></i>
                            <p>Windows</p>
                        </td>
                        <td class="make-border-two">
                            <i class="fa fa-linux fa-5x"></i>
                            <p>Linux</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="make-border-two">
                            <i class="fa fa-medium fa-5x"></i>
                            <p>Medium</p>
                        </td>

                        <td class="make-border-two">
<i class="fa fa-facebook-official fa-5x"></i>
                            <p>Facebook</p>
                        </td>

                        <td class="make-border-two">
                            <i class="fa fa-twitter fa-5x"></i>
                            <p>Twitter</p>
                        </td>

                        <td class="make-border-two">
                            <i class="fa fa-google-plus-official  fa-5x"></i>
                            <p>Google Plus</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="make-border-two">
                            <i class="fa fa-whatsapp fa-5x"></i>
                            <p>WhatsApp</p>
                        </td>

                        <td class="make-border-two">
                            <i class="fa fa-github fa-5x"></i>
                            <p>Github</p>
                        </td>

                        <td class="make-border-two">
                            <i class="fa fa-foursquare fa-5x"></i>
                            <p>Foursquare</p>
                        </td>

                        <td class="make-border-two">
                            <i class="fa fa-globe fa-5x"></i>
                            <p>The World</p>
                        </td>
                    </tr>
                </table>
                </div>
            </div>

    </div>
</div>
    </div>











<!--Footer-->

<section class="contact">
    <hr>
    <div class="container">
        <div class="col-md-3">
            <ul style="list-style: none;">
                <li>Write for Us</li>
                <li>Books</li>
                <li>Mentorship</li>
                <li>Licensing</li>
            </ul>
        </div>

        <div class="col-md-3">
            <ul style="list-style: none;">
                <li>Write for Us</li>
                <li>Books</li>
                <li>Mentorship</li>
                <li>Licensing</li>
            </ul>
        </div>


        <div class="col-md-2">
            <ul style="list-style: none;">
                <li>Write for Us</li>
                <li>Books</li>
                <li>Mentorship</li>
                <li>Licensing</li>
            </ul>
        </div>



        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=727084914091193";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        <div class="col-md-4">

            <div class="fb-page"
                 style="margin-left:0px;width:100%;";
                 data-href="https://www.facebook.com/evolutionmediagroupug"
                 data-width="380"
                 data-hide-cover="false"
                 data-show-facepile="true"
                 data-show-posts="false"> Facebook Page Loading...</div>

        </div>
        

        <div class="col-md-4 text-center center-block" id="social-icons">
            <div id="content">
                <i class="fa fa-facebook-square"></i>
                <i class="fa fa-twitter-square"></i>
                <i class="fa fa-linkedin-square"></i>
                <i class="fa fa-google-plus-square"></i>
                <i class="fa fa-globe"></i>

                <hr color="#fff">
                <p style="font-size:20px;">&copy; AGMIS <?php echo date('Y'); ?></p>
            </div>
        </div>







<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>