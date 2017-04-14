<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>DELETE</title>
        <link href="css/royal.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<style>
a
{
color:white;
}
a:hover
{
color:white;
}

</style>	
    </head>
    <body>
        <div class="bodyborder">
         <div style="width: 1000px; margin: auto;"><?php include "view/Header.php";?></div>
        
        <div class="maindiv">  
            <div style="width: 150px;"><?php include "view/Left-menu.php";?></div>
            <div class="rightmenu" style="width: 500px; margin-left: 200px;">
                
                
                <form class="form-horizontal" action="delete_action.php" onsubmit="check()" method="POST">
                    <div>
                        
                        <fieldset class="form-group">
                            <legend ><b>DELETE SECTION</b></legend>
                        
                         
                      <div class="form-group" style="height:25px;">
                               
                     <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-5" for="phone">Contact Number:</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;" class="form-control" id="phone1" name="phone" placeholder="Enter contact number">
                      </div>
                    </div>
<br>
	 <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-5" for="type">User Type:</label>
                      <div class="col-sm-5">
                        
			<select class="form-control" id="type" name="type" placeholder="Select Type" required style="height:30px;">
      			  <option value="SOM">SOM</option>
       			  <option value="SOET">SOET</option>
        		  <option value="SPA">SPA</option>
      			  <option value="CLL">CLL</option>
			  <option value="SOL">SOL</option>			
     			 </select>
                      </div>
                    </div>	
                            
                      <center>      
				<div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
            	</center>
                                    
                         </fieldset>
                        
                        </div>
                </form>  
                
                
                
            </div>
        </div>
        
   
            <div style="width: 1000px; margin: auto; margin-top:none;"><?php include "view/Footer.php";?></div>
        </div>
    </body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
res="";
function check()
	{
             
            var phone=$("#phone1").val().trim();
	    res="";
            var ph = /^(\d{7,15})$/;
            if(!ph.test(phone))
              res+="\nEnter Valid Contact Number";
            
            if(res.length!=0)
	   {
                alert(res);
                
           }
	else
	{
	         
	
	}
}
</script>