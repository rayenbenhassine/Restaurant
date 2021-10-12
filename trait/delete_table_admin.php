<?php  
	require "connectionBD.php";
	if(isset($_GET["id_table_restau"]))
	{
		$sql = "delete from table_restaurant where id_table_restau = ".$_GET["id_table_restau"];
		execute_query($sql);
		$sql = "delete from reservation where id_table = ".$_GET["id_table_restau"]." and date_arrivee < now()";
		execute_query($sql);

	}
	header("location:../loggedadmin.php#tables");
?>