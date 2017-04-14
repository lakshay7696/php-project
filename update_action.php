<?php
	session_start();
	$input=true;
	if(($_SESSION['emailupdatecheck']==NULL) || ($_SESSION['phoneupdatecheck']==NULL) )
		$input=false;
	else if($_POST['firstname']==NULL)
		$input=false;
	else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$input=false;
	
	unset($_SESSION['emailupdatecheck']);
	unset($_SESSION['nameupdatecheck']);
	if(!$input){
		echo "<script type='text/javascript'>
				alert('Bad Input!');
				window.location.href='fetch.php';
				</script>";

	}
	else{
		include "connection.php";
		
		$sql = "UPDATE ".$_POST['type']." SET firstname='".$_POST['firstname']."',address='".$_POST['address']."',email='".$_POST['email']."',phone='".$_POST['phone']."' where phone='".$_POST['oldphone']."'";
		//echo $sql;
		$conn->query($sql);
		echo "<script type='text/javascript'>
				alert('Update Complete!');
				window.location.href='fetch.php';
				</script>";
	}
?>

;