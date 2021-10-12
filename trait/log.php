<?php  
	require "connectionBD.php";

	function exists($login, $pass)
	{
		$sql = "select * from user where login = '".$login."' and mdp = '".$pass."'";
		$result = execute_query($sql);
		if (mysqli_num_rows($result) > 0)
			return true;
		else
			return false;
	}

	function init_session()
	{
		session_start();
	}

	function securite()
	{
		if (!isset($_SESSION["user"]))
		{
			header("location:login.php");
		}
	}

	function isadmin($login)
	{
		$sql = "select admin from user where login = '".$login."'";
		$result = execute_query($sql);
		$row = mysqli_fetch_row($result);
		
		return $row[0] == 1;
	}
?>