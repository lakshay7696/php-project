<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SELECT</title>
        <link href="css/royal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <div class="bodyborder">    
        <div style="width: 1000px; margin: auto;"><?php include "view/Header.php";?></div>
        
        <div class="maindiv">  
            <div style="width: 150px;"><?php include "view/Left-menu.php";?></div>
            <div class="rightmenu" style="width: 150px; float: left; ">
                
                 
                
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
			$sql = "SELECT firstname,phone,address,email from ".$_SESSION['type'];
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc())
			{
			?>	
                         <tr>
                             <td style="width:100px" class="row-pro"><?php echo $row['firstname']; ?></td>
                            <td style="width:100px" class="row-pro" ><?php echo $row['phone']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['email']; ?></td>
                            <td style="width:100px"  class="row-pro" ><?php echo $row['address']; ?></td>	
                            <td style="width:100px"  class="row-pro" ><?php echo $_SESSION['type']; ?></td>

                         </tr>
                        
<?php
}
?>			
                       
			
                        
                    </table>
                </div>  
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
        
        <div style="width: 1000px; margin: auto; margin-top:none;"><?php include "view/Footer.php";?></div>
        </div>
    </body>
  
</html>

