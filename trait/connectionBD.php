<?php
	function connect_bd()
	{
		$conn = mysqli_connect("localhost","root","","restaurant");
		mysqli_set_charset($conn,"utf-8");
		if(!$conn)
		{
			die("connection failed".mysqli_connect_error());
		}
		return $conn;
	}

	function execute_query($sql)
	{
		$conn = connect_bd();
		$result = mysqli_query($conn,$sql);
		return $result;
	}
	





	
?>

