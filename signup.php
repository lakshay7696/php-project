<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SignUP/Login Page</title>
        <link href="css/royal.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	    
</head>
    
    <body>
        <div class="bodyborder">    
        <div style="width: 1000px; margin: auto;">
            <div>
		<div class="head1">NCU Telephone Directory</div>
            
           </div>     
        </div>
        
        <div class="maindiv">  
           
            <div  style="width: 400px;height: 505px; float: left;  ">
                   <div style="width: 400px; height: 505px;border-right: 1px solid black;">
                       <img src="img/Icon-4-phone-book.png" alt="phone_directory" style="width: 300px;padding-top: 80px;">
                       
                   </div>
            </div>
            
            <div style="width: 600px; height: 505px; margin-left: 400px;">
                <div style="height: 130px; background-color: burlywood;">
                <div style=" float: left;  width: 195px; height: 130px; font-size: 30px;float: left; ">
                    <div style="margin-top: 30px; margin-left: 5px;"><b>Existing User?</b></div></div>
                <div style="float: right;width: 400px; height: 130px;float: right;">
                    <form method="post" action="login.php">
                        <div style="margin-top:20px;"><div style="margin-left:40px; float:left"> Username:  <input type="text" name="user" placeholder="Enter Username" required></div></div><br>
                      <div style="margin-left:43px; float:left;margin-top: 10px;">Password:  <input type="password" name="pass" placeholder="Enter Password" required></div><br>
                       
                      <div style="margin-left:120px; margin-top:25px;"><input type="submit" name="login" value="Login"></div> 
		      <div style="margin-left:150px;"><strong><a href="viewusers.php">Or continue without login</a></strong></div>

                    </form>
                </div>
                </div>
                
                <div style="height: 370px; width: 600px; ">
                 <div style="height: 50px; font-size: 30px;"><div style="margin-top: 5px; margin-left: 5px; text-align: center;"><b>SignUP</b></div></div>
                <div style=" height: 320px;">
                    <center>
			 <div class="container" id="sign_up_form" >
               
                  <form class="form-horizontal" onsubmit="return check()" action="signup_action.php" method="POST">   

			 <div class="form-group" style="height:25px;">
                      <label  class="control-label col-sm-2" for="name">Username:</label>
                      <div class="col-sm-5">
                        <input type="text" style="height:30px;"required="required" class="form-control" id="uname" name="uname" placeholder="Enter username">
                      </div>
                    </div>
                      
                      
                      <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="pwd">Password:</label>
                      <div class="col-sm-5">
                        <input type="password" style="height:30px;" required="required" class="form-control" id="pwd" name="password" placeholder="Enter password">
                      </div>
                    </div>
	
	              <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2"  for="pwd">Re-enter:</label>
                      <div class="col-sm-5">
                        <input type="password" style="height:30px;" required="required" class="form-control" id="cpwd" name="cpassword" placeholder="Confirm password">
                      </div>
                    </div>
		   
                  
                       <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="firstname">Name:</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;"class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                      </div>
                    </div>

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
		
                     <div class="form-group" style="height:25px;">
                      <label class="control-label col-sm-2" for="phone">Contact Number :</label>
                      <div class="col-sm-5">
                        <input type="text" required="required" style="height:30px;" class="form-control" id="phone" name="phone" placeholder="Enter contact number">
                      </div>
                    </div>
	  	
                   
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
                  </form>
                </div>
  </div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	

res="";

function cb(exists){
  return exists;
}

  function checkUsername(username){
        $.ajax({
              url: 'checkUsername.php',
              type: 'POST',
              async: false,
              data: { username: username },
               success: function(data){
                  var obj=$.parseJSON(data);
                 if(obj.exists==1)
                      res+="\nUsername already in use"; 
               },
              error: function(textStatus, errorThrown){
                alert(errorThrown);
               }
            });  
      }
        function checkEmail(email){
        $.ajax({
              url: 'checkEmail.php',
              type: 'POST',
              async: false,
              data: { email: email },
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
       function checkPhone(phone){
        $.ajax({
              url: 'checkPhone.php',
              type: 'POST',
              async: false,
              data: { phone: phone },
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
            var username=$("#uname").val().trim();
            var pass=$("#pwd").val();
            var cpass=$("#cpwd").val();
            var phone=$("#phone").val().trim();
            res="";
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var ph = /^(\d{7,15})$/;
            if(!re.test(email)){
                res=res+"\nEnter a valid email";
            }
            if(pass.length<8){
                res=res+"\nMinimum password length is 8";
            }
            if(username.length<4)
                res=res+"\nMinimun length of username is 4";
            if(cpass!=pass)
                res=res+"\nConfirm password does not match";
            if(!ph.test(phone))
              res+="\nEnter Valid Contact Number";
            checkUsername(username);
            checkEmail(email);
	    checkPhone(phone);
            if(res.length!=0){
                alert(res);
                return false;
            }
            else
                return true;        
        }
</script>


                    </center>     
                </div>
                </div>
            </div>
        </div>
        
        
        <div style="width: 1000px; margin: auto; margin-top:none;">
                   
        <div id="foot1">NCU Telephone Directory @ 2017</div>
    
        </div>
        </div>
       
    </body>
</html>
