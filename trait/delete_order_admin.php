<?php  
	require "log.php";
	init_session();
	securite();

	$sql = "delete from commande where id_commande = ".$_GET["id_commande"];
	execute_query($sql);
	if (isadmin($_SESSION["user"]["login"]))
		header("location:../loggedadmin.php#orders");
	else
		header("location:../my_orders.php");


?>