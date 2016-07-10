<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to AGPRICE!</title>

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
                Agprice
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
