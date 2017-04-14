<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>INSERT</title>
        <link href="css/royal.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<style>
	.leftmenu1, .leftmenu2{
	width:150px;
	}
	a {
	color:#ffffff;
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
            <div class="rightmenu" style="  margin-left: 150px;">
                
                
                <form class="form-horizontal" onsubmit="return check()" action="insert_action.php" method="POST" > 
                    <div>
                        
                        <fieldset class="field-pro">
                            <legend><b>INSERT SECTION</b></legend>

                      <div class="form-group" style="height:40px;">

                      <label class="control-label col-sm-2" for="firstname">Name:</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;"class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                      </div>
                    </div>
	
                     <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="phone">Contact Number :</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;" class="form-control" id="phone" name="phone" placeholder="Enter contact number">
                      </div>
                    </div>
			<br>

				   <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="email">Email:</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;" class="form-control" id="email" name="email" placeholder="Enter email">
                      </div>
                    </div>


		 <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="type">User Type:</label>
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
                            <br>
                       
                       <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="address">Address:</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;" class="form-control" id="address" name="address" placeholder="Enter address">
                      </div>
                    </div>

                
				<div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
            	
                
                

                       

              
                
                 </fieldset>
                        
                        </div>
                </form>  
                

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	

res="";

function cb(exists){
  return exists;
}

  
        function checkEmail(email,type){
	
        $.ajax({
              url: 'checkinsertEmail.php',
              type: 'POST',
              async: false,
              data: { email: email, type: type },
               success: function(data){
                var obj=$.parseJSON(data);
                 if(obj.exists==1)
                  res=res+"\nEmail already in use"  
		 
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
      }
       function checkPhone(phone,type){
     
	 $.ajax({
              url: 'checkinsertPhone.php',
              type: 'POST',
              async: false,
              data: { phone: phone, type: type },
               success: function(data){
                var obj=$.parseJSON(data);
                 if(obj.exists==1)
                  res=res+"\nphone no. already in use"   
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
      }
	 function check(){
            var email=$("#email").val().trim();
            var phone=$("#phone").val().trim();
	    var type=$("#type").val();
            res="";
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var ph = /^(\d{7,15})$/;
            if(!re.test(email)){
                res=res+"\nEnter a valid email";
            }
            
            if(!ph.test(phone))
              res+="\nEnter Valid Contact Number";
            
            checkEmail(email,type);
	    checkPhone(phone,type);
            if(res.length!=0){
                alert(res);
                return false;
            }
            else
                return true;        
        }
</script>


            </div>
        </div>
        
            
            
          <div style="width: 1000px; margin: auto; margin-top:none;"><?php include "view/Footer.php";?></div>
        </div>
    </body>
</html>
