<?php include '../inc/settings.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agprice - Admin</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/roykusemererwa.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="../js/lumino.glyphs.js"></script>

    <script src="js/jquery.simpleWeather.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/user_finder.js"></script>



</head>

<body onload="initialize()">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span style="color:#449D44;">Agprice</span> Admin</a>
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

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
<img src="../img/logo.png" style="width:100%;">
    <style>


    </style>
    <ul class="nav menu" id="nav-menu">
        <li class="active""><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> DASHBOARD</a></li>
        <li><a href="dataview.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> ALL DATA</a></li>
        <li><a href="dataview.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> NOTIFICATIONS</a></li>
        <li><a href="dataview.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> PRICES</a></li>
        <li><a href="dataview.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> TRADING</a></li>

            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="login.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
    </ul>

</div><!--/.sidebar-->

