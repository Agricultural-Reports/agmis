<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	$.get("http://ipinfo.io", function (response) {
		$("#ip").html(response.ip);
		$("#address").html("Location: " + response.city + ", " + response.region);
		$("#details").html(JSON.stringify(response, null, 4));
	}, "jsonp");
</script>
<?php
//$ip = "<div id='ip'></div>";
//echo $ip;
 echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=<div class="ip"></div>')));
 ?>