<?php  
	require "connectionBD.php";
	if(isset($_GET["id"]))
	{
		$sql = "delete from reservation where id_reservation = ".$_GET["id"];
		execute_query($sql);

	}
	header("location:../my_bookings.php");
?>