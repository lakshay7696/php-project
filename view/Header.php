<?php
session_start();
if(!isset($_SESSION['login']))
{
echo "<script type='text/javascript'>
				alert('Please login first!');
				window.location.href='signup.php';
				</script>";
}
else
{
	include "connection.php";
	$stmt=$conn->prepare("SELECT type from user where username=?");
	$stmt->bind_param("s",$_SESSION['login']);
	$stmt->execute();
	$stmt->bind_result($pass);
	$var="";
	if($stmt->fetch())
	{
	$var=$pass;
	$_SESSION['type']=$var;
	}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/royal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <div>
	    
            <div class="head"><a href="http://www.ncuindia.edu/" target="_blank"><img src="img/logo.jpg" style="width:150px;height:75px;float:left;margin:20px;"></a>NCU Telephone Directory</div>
        	<div style=" width: 1000px; height: 30px; margin: auto;background-color: burlywood; border: none; ">
		    <div style="width: 30%; float: left; font-size: 20px;">User Type :<?php echo $var; ?></div>  
                    <div style="width: 30%; float: left; font-size: 20px; margin-left: 40px">Username :<?php echo $_SESSION['login'];?></div>  
                    <div style="width:10%; float:right; font-size: 20px; "> <a href="logout.php" style="text-decoration:none; color: black;">Logout</a> </div>
                </div>     
       </div>
    </body>
</html>
<?php
$stmt->close();
}
?>