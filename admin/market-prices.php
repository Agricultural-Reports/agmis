<?php include 'inc/header.php'; ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top:20px;">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked dashboard"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Market Prices</li>
			<li class="pull-right"><i class="fa fa-calendar"></i> <?php echo date("l jS F, Y"); ?></li>
		</ol>

	</div><!--/.row-->


	<center><a href="http://mysaco.com" target="_blank"><img src="../img/2.png"></a></center>
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Market Prices</h2>

			<table class="table table-bordered pull-right" style="background:#8CC640;">
				<tr>
			<th><a href="#" class="no-decoration white-chars"><i class="fa fa-list"></i> List By Region</a></th>
					<th><a href="#" class="no-decoration"><i class="fa fa-list"></i> Average by Commodity</a></th>
					<th><a href="#" class="no-decoration"><i class="fa fa-list"></i> List On Map</a></th>
				</tr>
				</table>

		</div>
	</div><!--/.row-->

<style>
	#region_menu li a {
		font-size:17px;
		font-family:"Open Sans";
		font-weight:bold;
	}
</style>

	<!--Tabs and Pills-->
	<ul class="nav nav-tabs sharp-corners" id="region_menu">
		<li class="active"><a href="#">Central Region</a></li>
		<li class="sharp-corners"><a href="#">Eastern Region</a></li>
		<li class="sharp-corners"><a href="#">Western Region</a></li>
		<li class="sharp-corners"><a href="#">Northern Region</a></li>
		<li class="sharp-corners"><a href="#">All Regions</a></li>
	</ul>

	<div class="panel panel-default sharp-corners">
		<div class="panel-body">

			<table class="table table-bordered" style="width:100%;">
				<tr>
					<th>Commodity</th>
					<td>Unit</td>
					<td>Type</td>
					<td>Average</td>

					<!--Markets-->
					<td class="bold-blue margin">Kalerwe <small>(Jul 9, 2016)</small></td>
					<td class="bold-blue margin">Nakasero <small>(Jul 18, 2016)</small></td>
				</tr>

				<tr>
				<td rowspan="2" class="bold-blue margin">Apple Bananas</td>
					<td>kg</td>
					<td>R.P</td>
				<td>1, 850</td>
				<td>1, 500</td>
					<td>2, 500</td>


				<tr>
					<td></td>
					<td>W.P</td>
					<td>1, 250</td>
					<td>1, 800</td>
					<td>1, 500</td>
				</tr>


				</tr>


				<tr>
					<td rowspan="2" class="bold-blue">Beef</td>
					<td>kg</td>
					<td>R.P</td>
					<td>1, 850</td>
				<td>20, 000</td>
					<td>1, 500</td>

					<tr>
					<td></td>
					<td>W.P</td>
					<td>1, 250</td>
					<td>3000</td>
					<td>1, 500</td>
					</tr>
				</tr>



				<tr>
					<td rowspan="2" class="bold-blue">Cassava Flour</td>
					<td>kg</td>
					<td>R.P</td>
					<td>1, 850</td>
				<td>2000</td>
					<td>1, 500</td>

				<tr>
					<td></td>
					<td>W.P</td>
					<td>1, 250</td>
					<td>3000</td>
					<td>1, 500</td>
				</tr>
				</tr>


			</table>
		</div>
	</div>



	<script>
		$(document).ready(function () {
			$('.nav li a').click(function(e) {

				$('.nav li').removeClass('active');

				var $parent = $(this).parent();
				if (!$parent.hasClass('active')) {
					$parent.addClass('active');
				}
				//e.preventDefault();
			});
		});
	</script>