<?php
session_start();

require_once 'inc/settings.php';

if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    if($db->login($uname, $pwd))
    {
$db->redirect('dashboard.php');
    }else{
        $error = "Wrong Details";
    }
}
?>
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
    
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        #navbar-list li a{
            font-family:"Open Sans Semibold";
        }
        #navbar-list li button
        {
            font-family:"Open Sans Semibold";
        }
    </style>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:70px; background: #373E46; border:0px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="font-family:'Open Sans Semibold'; color:#fff; font-size:33px;">
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
                    <a href="login.php">LOGIN</a>

                </li>

                <li>
                    <button class="btn btn-default sharp-corners shadow" style="color:#fff;margin-top:10px; border:1px solid #373E46; background:#373E46;">CONTACT US</button>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</header>



<div class="centered">


    <h2 class="page-header text-center" style="font-family:'Open Sans';">Agprice</h2>
    
    <?php
    if(isset($error))
    {
        ?>
        <div class='alert alert-danger' style="border-radius: inherit; border-left:3px solid red;"><strong>Error! </strong>
            Invalid Login Details!
        </div>
    <?php
    }
?>
    <div class="panel panel-default sharp-corners" style="width:400px;">
        <div class="panel-heading">
            <b><i class="fa fa-lock"></i>Login</b>
        </div>

        <form method="post">

        <div class="panel-body">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="uname" class="form-control sharp-corners">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pwd" class="form-control sharp-corners">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right  sharp-corners" name="submit">Login</button>
            </div>
        </div>
        </form>
    </div>
</div>