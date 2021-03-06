<?php
include '../inc/settings.php';

require_once('inc/geoplugin.class.php');

$geoplugin = new geoPlugin();
$geoplugin->locate();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agprice - Admin</title>


    <link href="../css/roykusemererwa.css" rel="stylesheet">

    <link href="../css/styles.css" rel="stylesheet">

    <link id="base-style" href="assets/css/style.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Icons-->
    <script src="../js/lumino.glyphs.js"></script>

    <script src="js/jquery.simpleWeather.min.js"></script>


    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/user_finder.js"></script>


    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.min.css">

    <!-- metisMenu stylesheet -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body onload="getWeather(<?php echo "{$geoplugin->city}"; ?>)">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span style="color:#449D44;">Agprice</span> Admin in <?php echo "{$geoplugin->city}"; ?></a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                        <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar light-shadow">
<img src="../img/logo.png" style="width:100%;">
    <style>


    </style>
    <ul class="nav menu" id="nav-menu">
        <li class="border-bottom"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> DASHBOARD</a></li>
        <li class="border-bottom"><a href="#"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"></use></svg> NOTIFICATIONS</a></li>
        <li class="border-bottom"><a href="market-prices.php"><i class="fa fa-money"></i> MARKET PRICES</a></li>
        <li class="parent border-bottom">
            <a href="#">
        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg><span> TRADING
            </a>

            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href=latest-deals.php>
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> LATEST DEALS
                    </a>
                </li>
                <li>
                    <a class="" href="add.php">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> POST A DEAL
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> MY STORE
                    </a>
                </li>
            </ul>

        </li>

        <li><a href="dataview.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> ALL DATA</a></li>

        <li class="divider" role="presentation"></li>
        <li><a href="login.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>LOGOUT</a></a></li>



    </ul>

</div><!--/.sidebar-->

