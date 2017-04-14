<?php
session_start();

if(!isset($_SESSION['login']))
{
	$var="ANONYMOUS";
	$var1="UNKNOWN";
}
else
{
	$var=$_SESSION['login'];
	
	include "connection.php";
	$stmt=$conn->prepare("SELECT type from user where username=?");
	$stmt->bind_param("s",$_SESSION['login']);
	$stmt->execute();
	$stmt->bind_result($pass);
	
	if($stmt->fetch())
	{
	$var1=$pass;
	}
}
?>	

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View USERS</title>
      
        <link rel="shortcut icon" type="image/png" href="img/Icon-4-phone-book.png"/>
        <link href="css/royal.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
a{
color:white;
}
</style>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        
        <div class="bodyborder">    
            
        <div style="width: 1000px; margin: auto;">
	 <div>
	    
            <div class="head"><a href="http://www.ncuindia.edu/" target="_blank"><img src="img/logo.jpg" style="width:150px;height:75px;float:left;margin:20px"></a>NCU Telephone Directory</div>
        	<div style=" width: 1000px; height: 30px; margin: auto;background-color: burlywood; border: none; ">
		    <div style="width: 30%; float: left; font-size: 20px;">User Type :<?php echo $var1;?></div>  
                    <div style="width: 30%; float: left; font-size: 20px; margin-left: 40px">Username :<?php echo $var;?></div>  
                    
                </div>     
       </div>
	</div>
        
        <div class="maindiv">  
            <div style="width: 150px;"><?php include "view/Left-menu.php";?></a></div>
            <div class="rightmenu" style="width: auto;margin-left:150px;">
		
               
 <div class="dropdown">
 <label class="control-label col-sm-2" for="user" style="margin-left:30%;margin-top:30px;">SELECT USER:</label>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:30px;">Select User Type
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="margin-left:45%;">
      <li><a href="viewuserssoet.php">SOET</a></li>
      <li><a href="#">SPA</a></li>
      <li><a href="#">SOM</a></li>
      <li><a href="#">CLL</a></li>
      <li><a href="#">SOL</a></li>    
</ul>
  </div>
                <div style="padding-left: 330px;margin-top: 30px;"><b><font face="rockwell">DETAILS_OF_USERS</font></b></div>
                <div style="margin-left: 120px;margin-top: 10px">
                    <table style="width:600px;">
                        <tr>
                          <th>Name</th>
                          <th>Phone No.</th> 
                          <th>Email ID</th>
                          <th>Address</th>
                          <th>Type</th>
                        </tr>
                        
                        <?php
			include "connection.php";
			$sql = "SELECT firstname,phone,address,email from soet order by firstname";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc())
			{
			?>	
                         <tr>
                             <td style="width:100px" class="row-pro"><?php echo $row['firstname']; ?></td>
                            <td style="width:100px" class="row-pro" ><?php echo $row['phone']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['email']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['address']; ?></td>	
                            <td style="width:100px"  class="row-pro" ><?php echo "SOET"; ?></td>

                         </tr>
                        
<?php
}
?>		
                 <?php
			include "connection.php";
			$sql = "SELECT firstname,phone,address,email from som order by firstname";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc())
			{
			?>	
                         <tr>
                             <td style="width:100px" class="row-pro"><?php echo $row['firstname']; ?></td>
                            <td style="width:100px" class="row-pro" ><?php echo $row['phone']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['email']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['address']; ?></td>	
                            <td style="width:100px"  class="row-pro" ><?php echo "SOM"; ?></td>

                         </tr>
                        
<?php
}
?>
                 <?php
			include "connection.php";
			$sql = "SELECT firstname,phone,address,email from sol order by firstname";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc())
			{
			?>	
                         <tr>
                             <td style="width:100px" class="row-pro"><?php echo $row['firstname']; ?></td>
                            <td style="width:100px" class="row-pro" ><?php echo $row['phone']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['email']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['address']; ?></td>	
                            <td style="width:100px"  class="row-pro" ><?php echo "SOL"; ?></td>

                         </tr>
                        
<?php
}
?>
                 <?php
			include "connection.php";
			$sql = "SELECT firstname,phone,address,email from spa order by firstname";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc())
			{
			?>	
                         <tr>
                             <td style="width:100px" class="row-pro"><?php echo $row['firstname']; ?></td>
                            <td style="width:100px" class="row-pro" ><?php echo $row['phone']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['email']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['address']; ?></td>	
                            <td style="width:100px"  class="row-pro" ><?php echo "SPA"; ?></td>

                         </tr>
                        
<?php
}
?>
                 <?php
			include "connection.php";
			$sql = "SELECT firstname,phone,address,email from cll order by firstname";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc())
			{
			?>	
                         <tr>
                             <td style="width:100px" class="row-pro"><?php echo $row['firstname']; ?></td>
                            <td style="width:100px" class="row-pro" ><?php echo $row['phone']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['email']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['address']; ?></td>	
                            <td style="width:100px"  class="row-pro" ><?php echo "CLL"; ?></td>

                         </tr>
                        
<?php
}
?>	
                       
			
                        
                    </table>
                </div>  
                
    </div>
        </div>
 <div style="width: 1000px; margin: auto; margin-top:none;"> <?php include "view/Footer.php";?></div>
        
        </div>
        
    </body>
</html>