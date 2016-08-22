<?php include 'inc/header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="margin-top:2px; width:103%;">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Dashboard</li>
            <li class="pull-right" style="margin-left:-20px;"><i class="fa fa-calendar"></i> <?php echo date("l jS F, Y"); ?></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Dashboard</h3>
        </div>
    </div><!--/.row-->

    


    <div class="container" style="margin-left:6px; font-family:'Open Sans'; width:95%;">

        Hallo admin!

<br>
        Your Location:
        <?php
        $geoplugin->locate();
        echo "{$geoplugin->city}, {$geoplugin->countryName}";

        ?>

        
        <!--Location and Weather Finder-->
       <!-- <div id="loc">Detecting Location...<img src="../img/loader2.gif"></div>-->
        <div id="responsex"></div>

        <div class="panel-group">

        <div class="panel panel-default sharp-corners">
    <div class="panel-heading">
        <h4 class="panel-title page-header">
            <a data-toggle="collapse" href="#collapse1"><i class="fa fa-list"></i>&nbspWeather Forecast for your location<i class="caret"></i></a>

        </h4>
    </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
        <div class="jumbotron sharp-corners" style="margin-top:-10px;">
            <div id="forecast">

                <img src="../img/loader.gif">Loading Weather...

            </div>

</div>
        </div>
</div>
            </div>

        <br>
        <div class="panel panel-default">
            <div class="panel-heading"> <i class="fa fa-list"></i> AREAS WE COVER</div>
            <div class="panel-body">

                <div class="col-md-12">
                    <!-- Embedded Google Map -->
                   <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=1.140693,33.033259&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4084546.916877581!2d32.5848905!3d1.2847379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1771a69f6499f945%3A0x874155ce43014549!2sUganda!5e0!3m2!1sen!2sug!4v1469539745967" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0" allowfullscreen></iframe>

                </div>

            </div>

        </div>
            </div>



<br>



        <!--Graph-->

        <div class="panel panel-default sharp-corners" style="min-height:500px;">

            <div class="panel-heading"><i class="fa fa-list"></i>&nbsp Trends</div>
                <div class="panel-body">


                    <table style="width:100%; font-family:'Open Sans';">
                        <tr>
                            <td>
                                <b>Group by Period</b>
                                <select style="width:80%;" data-placeholder="Group By Period" class="form-control chzn-select" tabindex="2">
                                    <option value=""></option>
                                    <option value="">Jan 2015 - To date</option>
                                    <option value="">Jan 2014 - Dec 2014</option>
                                    <option value="">Jan 2013 - Dec 2013</option>
                                    <option value="">Jan 2012 - Dec 2012</option>
                                    <option value="">Jan 2011 - Dec 2011</option>
                                    <option value="">Jan 2010 -Dec 2010</option>
                                    <option value="">Jan 2009 -Dec 2009</option>
                                    <option value="">All Years</option>
                                </select>
                            </td>
                            <td>

                                <b>Group By Type</b>
                                <select style="width:100%;" data-placeholder="Group By Type" class="form-control chzn-select" tabindex="2">
                                    <option value=""></option>
                                    <option value="">Retail</option>

                                </select>
                            </td>
                            <td>

                                <b>Group by Category</b>
                                <select style="width:100%;" data-placeholder="Group By Category" class="form-control chzn-select" tabindex="2">
                                    <option value="">All Products</option>
                                    <option value="">Fuel Products</option>
                                    <option value="">Animal Products</option>
                                    <option value="">Cereals</option>
                                    <option value="">Fish</option>
                                    <option value="">Fruit</option>
                                    <option value="">Oil Seeds</option>
                                    <option value="">Plantains</option>
                                    <option value="">Poultry Products</option>
                                    <option value="">Pulses</option>
                                    <option value="">Root Crops</option>
                                    <option value="">All Years</option>
                                </select>
                            </td>

                            <td>
                                <b>Group by Region</b>

                                <select data-placeholder="Group By Region" class="form-control chzn-select" tabindex="2">
                                    <option value="">All Regions</option>
                                    <option value="">Central</option>
                                    <option value="">Coast</option>
                                    <option value="">Eastern</option>
                                    <option value="">Nairobi</option>
                                    <option value="">North Eastern</option>
                                    <option value="">Coast</option>
                                    <option value="">Northern</option>
                                    <option value="">Rift Valley</option>
                                    <option value="">Western</option>

                                </select>
                            </td>
                            <td>
                                <button class="btn btn-success text-uppercase sharp-corners">generate</button>
                            </td>
                        </tr>
                    </table>

                    <br>
<iframe src="chart.php" style="width:100%; height:400px; overflow: hidden; border:0px solid #fff;" scrolling="no"></iframe>


        </div>

        </div>


        <div class="col-lg-12">
            <center>
           <a href="http://mysaco.com" target="_blank"><img src="../img/2.png" alt=""></a>
            </center>
        </div>







<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>


<!-- MetisMenu -->
<script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js"></script>


<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>


<!-- Metis core scripts -->
<script src="assets/js/core.min.js"></script>

<!-- Metis demo scripts -->
<script src="assets/js/app.js"></script>
<script>
    $(function() {
        Metis.formGeneral();
    });
</script>


</body>



