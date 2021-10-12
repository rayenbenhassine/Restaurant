<?php 
	require "log.php"; 
	init_session();
	if(isset($_POST["login"]) && !empty($_POST["login"]) && isset($_POST["password"]) && !empty($_POST["password"]))
	{
		if (exists($_POST["login"],$_POST["password"]))
		{
			$sql = "select * from user where login = '".$_POST["login"]."'";
			$result = execute_query($sql);
			$row = mysqli_fetch_assoc($result); 
			$_SESSION["user"] = $row;
			if(!isadmin($_POST["login"]))
			{
				header("location: ../logged.php");
			}
			else
			{
				header("location:../loggedadmin.php");
			}
		}
		else
		{
			$_SESSION["info"] = "Invalid username or password";
			header("location:../login.php");
		}
	}
?>