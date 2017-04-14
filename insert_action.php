<?php
	session_start();
	$input=true;
	if(($_SESSION['emailinsertcheck']==NULL) || ($_SESSION['phoneinsertcheck']==NULL) )
		$input=false;
	else if($_POST['firstname']==NULL)
		$input=false;
	else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$input=false;
	
	unset($_SESSION['emailinsertcheck']);
	unset($_SESSION['nameinsertcheck']);
	if(!$input){
		echo "<script type='text/javascript'>
				alert('Bad Input!');
				window.location.href='insert.php';
				</script>";

	}
	else{
		include "connection.php";
		
		$sql = "INSERT INTO ". $_POST['type']."(firstname,address,email,phone) VALUES ('".$_POST['firstname']."','".$_POST['address']."','".$_POST['email']."','".$_POST['phone']."')";
		$conn->query($sql);
		echo "<script type='text/javascript'>
				alert('Insert Complete!');
				window.location.href='insert.php';
				</script>";
	}
?>