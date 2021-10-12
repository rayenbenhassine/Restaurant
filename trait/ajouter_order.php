<?php  
	require "log.php";
	init_session();
	securite();

	if(isset($_POST["submit"]))
	{
		if(isset($_POST["dish"]) && !empty($_POST["dish"]) && isset($_POST["qte"]) && !empty($_POST["qte"]))
		{
			$sql = "insert into commande (date_commande,login,id_plat,qte) values ('".date("Y-m-d")."','".$_SESSION["user"]["login"]."',".$_POST["dish"].",".$_POST["qte"].")";
			execute_query($sql);
			header("location:../logged.php#order");
		}
	}


?>