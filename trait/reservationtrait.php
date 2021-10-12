<?php 
	require "log.php";
	init_session();


	function is_dispo($number,$date_arrivee,$time)
	{
		$sql_tables = "select count(*) as nb_tables_en_stock from table_restaurant where nb_personnes = ".$number;
		$result_stock = execute_query($sql_tables);
		$tables_en_stock = mysqli_fetch_assoc($result_stock);
		echo "<pre>";
		print_r($tables_en_stock);
		echo "</pre>";


		$sql_reserve = "select count(*) as nb_tables_reserves from reservation where date_arrivee = '".$date_arrivee."' and time_arrivee = '".$time."' and id_table in (select id_table_restau from table_restaurant where nb_personnes = ".$number.")";
		$result_reserves = execute_query($sql_reserve);
		$tables_reserves = mysqli_fetch_assoc($result_reserves);
		echo "<pre>";
		print_r($tables_reserves);
		echo "</pre>";
		return $tables_en_stock["nb_tables_en_stock"] > $tables_reserves["nb_tables_reserves"];
	}

	function id_table_dispo($number,$date_arrivee,$time)
	{
		$sql_tables = "select id_table_restau as id_tables_en_stock from table_restaurant where nb_personnes = ".$number;
		$result_stock = execute_query($sql_tables);
		$i=0;
		$tab_id_stock=[];
		while($tables_en_stock = mysqli_fetch_row($result_stock))
		{
			$tab_id_stock[$i] = $tables_en_stock[0]; 
			$i++;
		}
		echo "<pre>";
		print_r($tab_id_stock);
		echo "</pre>";
		echo $number;
		$sql_reserve = "select id_table as id_tables_reserves from reservation where date_arrivee = '".$date_arrivee."' and time_arrivee = '".$time."' and id_table in (select id_table_restau from table_restaurant where nb_personnes = ".$number.")";
		$result_reserves = execute_query($sql_reserve);

		if(mysqli_num_rows($result_reserves) != 0)
		{	
			$i = 0;
			$tab_id_reserve = [];
			while($tables_reserves = mysqli_fetch_row($result_reserves))
			{
				$tab_id_reserve[$i] = $tables_reserves[0];
				$i++;
			};
			echo "<pre>";
			print_r($tab_id_reserve);
			echo "</pre>";
			$i = 0;
			while ($i < count($tab_id_stock))
			{
				if(!in_array($tab_id_stock[$i], $tab_id_reserve))
					return $tab_id_stock[$i];
				else
					$i++;
			}
		}
		else
		{
			return $tab_id_stock[0];
		}


	}

	if (isset($_POST["booktable"]))
	{
		if(isset($_POST["number"]) && !empty($_POST["number"]) && isset($_POST["date"]) && !empty($_POST["date"])&& isset($_POST["time"]) && !empty($_POST["time"]) && isset($_POST["msg"]))
		{
			if (is_dispo($_POST["number"],$_POST["date"],$_POST["time"]))
			{
				$id_table = id_table_dispo($_POST["number"],$_POST["date"],$_POST["time"]);
				$sql = "insert into reservation (login,id_table,date_reservation,date_arrivee,time_arrivee,msg) values ('".$_SESSION["user"]["login"]."',".$id_table.",now(),'".$_POST["date"]."','".$_POST["time"]."','".$_POST["msg"]."')";

				execute_query($sql);
				header("location:../logged.php#reservation");

			}
			else
			{
				$_SESSION["info"] = "Sorry ! No tables available for this date";
				header("location:../logged.php#reservation");
			}
			
		}

	}
	
	
?>
