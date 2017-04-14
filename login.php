<?php
	session_start();
	include "connection.php";
	$stmt=$conn->prepare("SELECT password from user where username=?");
	$stmt->bind_param("s",$_POST['user']);
	$stmt->execute();
	$stmt->bind_result($pass);
	if($stmt->fetch()){
		if(password_verify($_POST['pass'],$pass)){
			$_SESSION['login']=$_POST['user'];
			header("location: main.php");
		}
		else echo "<script>alert('Invalid Username or Password');
							window.location.href='signup.php'</script>";
	}
	else echo "<script>alert('Invalid Username or Password');
							window.location.href='signup.php'</script>";
?>