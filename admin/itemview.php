<?php include 'inc/header.php'; ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top:2%;">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg>
				</a></li>
			<li class="active">Dashboard</li>
			<li class="pull-right"><i class="fa fa-calendar"></i> <?php echo date("l jS F, Y"); ?></li>
		</ol>
	</div><!--/.row-->

	<div class="row" style="margin-top:-20px;">
		<div class="col-lg-12">
			<h2 class="page-header">Commodities for buying</h2>
		</div>
	</div><!--/.row-->




	<div class="container" style="margin-left:6px; font-family:'Open Sans'; width:95%;">


		<div class="panel panel-default">
<div class="panel-heading"><i class="fa fa-list"></i> LIST OF COMMODITIES ON SALE</div>
			<div class="panel-body">

				<table style="width:50%;">
					<tr>
						<td>
				<select style="width:80%;" data-placeholder="Average Prices Across All Markets" class="form-control chzn-select" tabindex="2">
					<option value=""></option>
					<option value="">Jan 2015 - To date</option>
</select>
						</td>

						<td>
							<select style="width:80%;" data-placeholder="All Categories" class="form-control chzn-select" tabindex="2">
								<option value=""></option>
								<option value="">Jan 2015 - To date</option>
							</select>
						</td>
					</tr>
					</table>

				<br>
					<!--Horizontal thumbnail-->
			<div class="thumbnail right-caption span4 sharp-corners" style="width:320px;">
				<div class="well">Tomatoes</div>
				<img src="../img/t.jpg" style="width:130px; height:130px;">
				<div class="caption">
					<h5>Thumbnail label</h5>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus</p>
				</div>
			</div>


			<!--Horizontal thumbnail-->
			<div class="thumbnail right-caption span4 sharp-corners" style="width:320px;">
				<div class="well">Onions</div>
				<img src="../img/o.jpg" style="width:130px; height:130px;">
				<div class="caption">
					<h5>Thumbnail label</h5>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus</p>
				</div>
			</div>



			<!--Horizontal thumbnail-->
			<div class="thumbnail right-caption span4 sharp-corners" style="width:320px;">
				<div class="well">Onions</div>
				<img src="../img/b.jpg" style="width:130px; height:130px;">
				<div class="caption">
					<h5>Thumbnail label</h5>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus</p>
				</div>
			</div>

			<!--Horizontal thumbnail-->
			<div class="thumbnail right-caption span4 sharp-corners" style="width:320px;">
				<div class="well">Onions</div>
				<img src="../img/a.jpg" style="width:130px; height:130px;">
				<div class="caption">
					<h5>Thumbnail label</h5>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus</p>
				</div>
			</div>

</div>
		</div>
</div>



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

