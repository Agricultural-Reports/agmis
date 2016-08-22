<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.simpleWeather.js" type="text/javascript"></script>
<script>
$.get("http://ipinfo.io", function (response) {
$("#ip").html("IP: " + response.ip);
$("#address").html("Location: " + response.city + ", " + response.region);
$("#details").html(JSON.stringify(response, null, 4));
}, "jsonp");
</script>
<h3>Client side IP geolocation using <a href="http://ipinfo.io">ipinfo.io</a></h3>

<hr/>
<div id="ip"></div>
<div id="address"></div>
<hr/>Full response: <pre id="details"></pre>

