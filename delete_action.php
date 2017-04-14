<?php
	
		include "connection.php";
		$sql = "DELETE FROM ".$_POST['type']." WHERE phone=".$_POST['phone'];
		mysqli_query($conn,$sql);

		if (mysqli_affected_rows($conn)!=0) 
{
    echo "<script type='text/javascript'>
				alert('Delete Complete!');
				window.location.href='delete.php';
				</script>";
} else
{
    echo "<script type='text/javascript'>
				alert('Record Not Found!');
				window.location.href='delete.php';
				</script>";
}
		
	
	mysqli_close($conn);
?>