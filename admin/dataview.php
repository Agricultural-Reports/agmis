<?php include 'inc/header.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked dashboard"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Dataview</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dataview</h1>
        </div>
    </div><!--/.row-->



    <div class="col-md-12">

        <div class="col-md-4">
            <p>
                <b>Filter the data:</b>
                <br>
                Day:
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                &nbsp&nbsp
                Month:
                <select>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                </select>

                &nbsp&nbsp
                Year:
                <select>
                    <option>2010</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>

                </select>
                
            </p>
        </div>
            </div>


    <table class="table table-striped table-bordered table-responsive">
        <tr>
            <th>DATE</th>
            <th>KEYWORD</th>
            <th>DISTRICT</th>
            <th>SUBCOUNTY</th>
            <th>COUNTY</th>
            <th>MARKET</th>
            <th>AMOUNT</th>
            <th>QUANTITY</th>
            <th>METRIC</th>
        </tr>


        <?php
        $query = "SELECT * FROM csv_tbl ORDER by id DESC";
        $records_per_page=10;
        $newquery = $db->paging($query, $records_per_page);
        $db->dataview($newquery);
        ?>

    </table>

    <?php $db->paginglink($query, $records_per_page); ?>
</div>