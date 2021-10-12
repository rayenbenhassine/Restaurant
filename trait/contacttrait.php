<?php  
	require "log.php";
	init_session();
	
	if (isset($_POST["submit"]))
	{
		if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["msg"]) && !empty(["name"]) && !empty(["email"]) && !empty(["subject"]) && !empty(["msg"]))
		{
			$sql = "insert into contact (name,email,subject,message) values ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["msg"]."')";
			execute_query($sql); 


		}
	}
	if(!isset($_SESSION["user"]))
		header("location:../index.php#contact");
	else
		header("location:../logged.php#contact");


?>