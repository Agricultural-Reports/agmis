<?php
include '../inc/settings.php';
$location = $_GET['l'];

try {
	$insert = $db->runQuery ("INSERT INTO ap_user(loc) VALUES(:loc)");
	$insert->bindValue(":loc", $location);
	$insert->execute ();

} catch (PDOException $err)
{
	echo $err->getMessage ();
}
?>