<?php include 'inc/header.php'; ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->


        <div class="container" style="margin-left:6px;">

            <?php
            if(isset($_POST['submit'])){
                $csv_file = $_FILES['csvfile'];

                if($csv_file["name"] == ""){
                    ?>
                    <div class='alert alert-danger col-md-9' style="border-radius: inherit; border-left:3px solid red;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error! Missing data</strong>
            <p>Please click on "choose file" to upload a .csv file</p>
        </div>
                    <?php
                }else {
                    $db->upload_csv($csv_file);
                }
            }
            ?>



            <?php
            //manually inserting the data
            if(isset($_POST['manual_submit'])) {

                $table = "csv_tbl";

                $keyword = $_POST['keyword'];
                $district = $_POST['district'];
                $sc = $_POST['subcounty'];
                $county = $_POST['county'];
                $marketname = $_POST['marketname'];
                $amt = $_POST['amount'];
                $qty = $_POST['quantity'];
                $metric = $_POST['metric'];

                $db->enter_data($keyword, $district, $sc, $county, $marketname, $amt, $qty, $metric);

            }
            ?>
            </div>




    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-body tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab"><b>Manually Enter Data</b></a></li>
                    <li><a href="#tab2" data-toggle="tab" class="bold">Upload An Excel File (CSV)</a></li>
                    <li><a href="#tab3" data-toggle="tab">More Options</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <h4>Manually Enter Data</h4>
                        <p>
                        <form method="post">

                            <div class="form-group col-md-4">
                        <label for="keyword">KeyWord</label>
                            <input type="text" name="keyword" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="district">District</label>
                            <select class="form-control" name="district">
                                <option>--Choose District--</option>
                            <option>Kampala</option>
                                <option>Entebbe</option>
                                <option>Masaka</option>
                                <option>Masindi</option>
                            </select>
                        </div>


                            <div class="form-group col-md-4">
                                <label for="county">County</label>
                                <input type="text" name="county" class="form-control" placeholder="Enter County...">
                            </div>


                        <div class="form-group col-md-4">
                            <label for="subcounty">SubCounty</label>
                            <input type="text" name="subcounty" class="form-control" placeholder="Enter Subcounty...">
                        </div>


                        <div class="form-group col-md-4">
                            <label for="marketname">Market Name</label>
                            <input type="text" name="marketname" class="form-control" placeholder="Enter Market Name...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" class="form-control" placeholder="Enter Amount...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="metric">Metric</label>
                            <input type="text" name="metric" class="form-control" placeholder="Enter Metric...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="submit">Submit Information</label>
                            <button name="manual_submit" class="btn btn-success" style="width:100%;">SUBMIT</button>
                        </div>

                        </form>

                        </p>
                    </div>



                    <div class="tab-pane fade" id="tab2">
                        <h4>Upload .CSV File</h4>
                        <p>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="heading">Heading/Title</label>
                            <input type="text" name="heading" class="form-control" placeholder="Enter Heading/title">
                        </div>

                        <div class="form-group">
                            <label for="file">Choose A .CSV File</label>
                            <input type="file" name="csvfile" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <button class="btn btn-success" style="width:100%;" name="submit">SUBMIT</button>
                        </div>
                            </form>
                        </p>
                    </div>

                    <!--End of CSV Upload Form-->

                    <div class="tab-pane fade" id="tab3">
                        <h4>More Options</h4>
                        <p>
                            Here we shall Provide more options of sending in the data
                        </p>
                    </div>
                </div>
            </div>
        </div><!--/.panel-->



    </div><!--/.col-->



    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
