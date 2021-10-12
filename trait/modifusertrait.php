<?php  
	require "log.php";
	init_session();
	if (isset($_POST["submit"]))
	{
		if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["date_naissance"]) && isset($_POST["email"]) && isset($_POST["adresse"]) && isset($_POST["tel"]) && isset($_POST["login"]) && isset($_POST["mdp"]) && !empty(["prenom"]) && !empty(["nom"]) && !empty(["date_naissance"]) && !empty(["email"]) && !empty(["adresse"]) && !empty(["tel"]) && !empty(["login"]) && !empty(["mdp"]))
		{

			if($_POST["login"] != $_SESSION["user"]["login"])
			{
				$sql = "select * from user where login = '".$_POST["login"]."'";
				$result = execute_query($sql);
				if(mysqli_num_rows($result) == 0)
				{
					$sql = "update user set login = '".$_POST["login"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set mdp = '".$_POST["mdp"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set prenom = '".$_POST["prenom"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set nom = '".$_POST["nom"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set date_naissance = '".$_POST["date_naissance"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set email = '".$_POST["email"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set adresse = '".$_POST["adresse"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);
					$sql = "update user set tel = '".$_POST["tel"]."' where login = '".$_SESSION["user"]["login"]."'";
					execute_query($sql);

					$sql = "select * from user where login = '".$_POST["login"]."'";
					$result = execute_query($sql);
					$row = mysqli_fetch_assoc($result);
					$_SESSION["user"] = $row;

				}
				else
				{
					$_SESSION["info"] = "Please try another login";

				}
			}
			else
			{
				$sql = "update user set mdp = '".$_POST["mdp"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);
				$sql = "update user set prenom = '".$_POST["prenom"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);
				$sql = "update user set nom = '".$_POST["nom"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);
				$sql = "update user set date_naissance = '".$_POST["date_naissance"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);
				$sql = "update user set email = '".$_POST["email"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);
				$sql = "update user set adresse = '".$_POST["adresse"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);
				$sql = "update user set tel = '".$_POST["tel"]."' where login = '".$_SESSION["user"]["login"]."'";
				execute_query($sql);

				$sql = "select * from user where login = '".$_POST["login"]."'";
				$result = execute_query($sql);
				$row = mysqli_fetch_assoc($result);
				$_SESSION["user"] = $row;
			}
		}
	}
	header("location:../my_account.php");


?>