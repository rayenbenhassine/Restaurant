<?php  
	require "connectionBD.php";

	$sql = "delete from reservation where id_reservation = ".$_GET["id"];
	execute_query($sql);
	header("location:../loggedadmin.php#comingbookings");

?>