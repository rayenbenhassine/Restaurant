<?php 
		require "connectionBD.php";

		if (isset($_POST["submit"]))
		{
			if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["birthdate"]) && isset($_POST["email"]) && isset($_POST["adress"]) && isset($_POST["tel"]) && isset($_POST["login"]) && isset($_POST["password"]) && !empty(["firstname"]) && !empty(["lastname"]) && !empty(["birthdate"]) && !empty(["email"]) && !empty(["adress"]) && !empty(["tel"]) && !empty(["login"]) && !empty(["password"]))
			{
				$sql = "insert into user values ('".$_POST["login"]."','".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["birthdate"]."','".$_POST["email"]."','".$_POST["adress"]."',".$_POST["tel"].",0)";
				execute_query($sql);
				header("location:../index.php");
			}
		}
	?>