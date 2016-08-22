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
			<h3 class="page-header">TRADING > POST A NEW DEAL</h3>
		</div>
	</div><!--/.row-->




	<div class="container" style="margin-left:6px; font-family:'Open Sans'; width:95%;">


		<div class="panel panel-default">
			<div class="panel-heading">Post a Deal</div>
			<div class="panel-body">


				<div class="form-group">
					<div class="col-md-4 bold">Category *</div>
					<div class="col-md-8">
						<select style="width:80%;" data-placeholder="Select a Category" class="form-control chzn-select" tabindex="2">
							<option value=""></option>
							<option value="">Beef</option>
							<option value="">Goat Meat</option>
							<option value="">Milk</option>
							<option value="">Pork</option>
							<option value="">Processed Honey</option>
							<option value="">Unprocessed Honey</option>
							<option value="">Green Maize</option>
							<option value="">Kaiso Raice</option>
							<option value="">Maize Flour</option>
							<option value="">Maize Grain</option>
							<option value="">Millet Flour</option>
							<option value="">Millet Grain</option>
							<option value="">Simsim</option>
							<option value="">Sorghum Flour</option>
							<option value="">Sorghum Grain</option>
							<option value="">Super Rice</option>
							<option value="">Upland Rice</option>
					</select>
					</div>
					</div>

<br/>
				<br/>

					<div class="col-md-4 bold">Title of deal *</div>
					<div class="col-md-8">

						<div class="form-group">
						<input type="text" name="title" placeholder="A Short description of your Product" class="form-control" style="width:80%; height:30px; border:1px solid blue;">
					</div>

				</div>
<br/>
				<br/>


				<div class="form-group">
					<div class="col-md-4 bold">District *</div>
					<div class="col-md-8">
						<select style="width:80%;" data-placeholder="Select District" class="form-control chzn-select" tabindex="2">
							<option value=""></option>
							<option value="">Abim</option>
							<option value="">Adjumani</option>
							<option value="">Agago</option>
							<option value="">Alebtong</option>
							<option>Amolatar</option>
							<option value="">Amudat</option>
							<option value="">Amuria</option>
							<option value="">Amuru</option>
							<option value="">Adjumani</option>
							<option value="">Apac</option>
							<option value="">Arua</option>
							<option value="">Budaka</option>
							<option value="">Bududa</option>
							<option value="">Bugiri</option>
							<option value="">Buhweju</option>
							<option value="">Buikwe</option>
							<option value="">Bukedea</option>
							<option value="">Bukomansimbi</option>
							<option value="">Bukwo</option>
							<option value="">Bulambuli</option>
							<option value="">Buliisa</option>
							<option value="">Bundibugyo</option>
							<option value="">Bushenyi</option>
							<option value="">Busia</option>
							<option value="">Butaleja</option>
							<option value="">Butambala</option>
							<option value="">Buvuma</option>
							<option value="">Buyende</option>
							<option value="">Dokolo</option>
							<option value="">Gomba</option>
							<option value="">Gulu</option>
							<option value="">Hoima</option>
							<option value="">Ibanda</option>
							<option value="">Iganga</option>
							<option value="">Isingiro</option>
							<option value="">Jinja</option>
							<option value="">Kaabong</option>
							<option value="">Kabale</option>
							<option value="">Kabarole</option>
							<option value="">Kaberamaido</option>
							<option value="">Kaliro</option>
							<option value="">Kalungu</option>
							<option value="">Kampala</option>
							<option value="">Kamuli</option>
							<option value="">Kamwenge</option>
							<option value="">Kanungu</option>
							<option value="">Kapchorwa</option>
							<option value="">Kasese</option>
							<option value="">Katakwi</option>
							<option value="">Kayunga</option>
							<option value="">Kibaale</option>
							<option value="">Kiboga</option>
							<option value="">Kibuku</option>
							<option value="">Kiiruhura</option>
							<option value="">Kiryandongo</option>
							<option value="">Kisoro</option>
							<option value="">Kitgum</option>
							<option value="">Koboko</option>
							<option value="">Kole</option>
							<option value="">KOtido</option>
							<option value="">Kumi</option>
							<option value="">Kween</option>
							<option value="">Kyankwanzi</option>
							<option value="">Kyegegwa</option>
							<option value="">Kyenjonjo</option>
							<option value="">Masindi</option>
							<option value="">Mbarara</option>
							<option value="">Mitooma</option>
							<option value="">Ntoroko</option>
							<option value="">Ntungamo</option>
							<option value="">Rubirizi</option>
							<option value="">Sheema</option>
						</select>
					</div>
				</div>


<br/>
				<br/>

<div class="col-md-4 bold">Location of Item</div>
			<div class="col-md-8">
				<div class="form-group">
					<input type="text" name="location" id="location" style="height:30px; width:80%;"/>
				</div>
			</div>

				<br/>
				<br/>

				<div class="col-md-4 bold">Condition Of Item*</div>
				<div class="col-md-8">
				<div class="form-group">
					<select class="form-control" style="width:80%;">
						<option>New</option>
						<option>Used</option>
						<option>Fresh</option>
						<option>Original</option>
						<option>Best Offer</option>
						<option>First Class</option>
						<option>Second Hand</option>
						<option>Buy-One-Get-One_free</option>
						<option>Free Delivery</option>
						<option>Hot Deal</option>
					</select>
					</div>
					</div>


				<br/>
				<br/>
				<div class="col-md-4 bold">Description</div>

				<div class="col-md-8">
					<div class="form-group">
						<textarea class="form-control" style="width:80%;"></textarea>
						</div>
					</div>


				<br/>
				<br/>
				<div class="col-md-4 bold">Item Specifics</div>
				<div class="col-md-8">
					<p>Buyers often refine their search using these item specifics. If you don't provide these, your listing may not appear in search results for the characteristics of your item/product.</p>
					<p>List these as an attribute: value pair of characteristics. e.g<br>
					Color: Black<br>Expiry Date: dd/mm/yy</p>

					<div class="col-lg-12">

					<!--Atributes and Values-->
					<div class="col-md-6 bold">Attribute</div>
					<div class="col-md-6 bold">Value</div>

					<div class="col-md-6">
						<input type="text" name="attribute"  class="form-control" style="height:30px;">
					</div>
					<div class="col-md-6">
						<input type="text" name="value" class="form-control" style="height:30px;">
					</div>

</div>

				</div>


			</div>

			</div>
</div>


<?php include 'inc/footer.php'; ?>