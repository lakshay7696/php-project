<?php 
	session_start();
	$_SESSION['phonecheck']=true;
	include "connection.php";
	$stmt=$conn->prepare("SELECT phone FROM user WHERE phone=?");
	$stmt->bind_param("s",$_POST["phone"]);
	$stmt->execute();
	$result['exists']=2;
	if($stmt->fetch())
		$result['exists']=1;
	echo json_encode($result);
	$conn->close();
?>
