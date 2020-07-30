<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width  ,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        
        <!-- Javascript validation for user inputs -->
        <script type = "text/javascript">
        function validate() {
         var emailID = document.signup.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
        var length = document.signup.password1.value.length;
          
        if( document.signup.account_type.value == "-1" ) {
            alert( "Please provide your account type!" );
            return false;
         } 
         else if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.signup.email.focus() ;
            return false;
         }
          else if(document.signup.password1.value != document.signup.password2.value){
             alert('Passwords do not match');
             return false;
         }
         else if(length<7)
         {
             alert('Password should have atleast 8 characters');
             return false;
         }
        
         else
         return( true );
        }
      </script>
    </head>
    <BODY class="bdy">

      <?php include('partials/_navbar.php'); ?>
      
      <!--sign up-->
        <div class="modal-dialog">
		<div class="modal-content"><br>
            <a href="index.php" class=" ">« Back</a>
			<div class="modal-heading">
				<h2 class="text-center">Sign Up</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form method="post" name="signup" onsubmit="return( validate());" >
                    
                  
                    
					<div class="form-group">
                        <select autofocus id="account_type" name="account_type" class="input-lg form-control" placeholder="Type"  >
                            <option selected hidden value="-1" >Choose Category</option>
                            <option value="artist" >Artist</option>
                            <option value="art_lover">Art lover</option>
                        </select>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                           <b>First name:</b><input type="text" class="form-control" placeholder="FirstName" name="firstname" value="<?php echo $fname; ?>" required/>
						                  </div>
                            </div>
                                <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                            <b>Last Name:</b><input type="text" class="form-control" placeholder="LastName"name="lastname" value="<?php echo $lname; ?>" required />
						                  </div>
                                </div>
                            
                        </div>
						<div class="form-group">
							<b>Email id:</b><input type="text" class="form-control" placeholder="abc@gmail.com" name="email" value="<?php echo $email; ?>" required />
						</div>
					</div>
					<div class="form-group">
							<b>Create Password:</b><input type="password" class="form-control" placeholder="create Password" name="password1" required />
                    </div>
                    <div class="form-group">
							<b>Confirm Password:</b><input type="password" class="form-control" placeholder="confirm Password" name="password2" required/>
                    </div>

					<div class="form-group text-center">
						<a href="login.php" class="btn btn-link" >LogIn</a>
                        <form action="artist_detail.html">
						<button type="submit" class="btn btn-success btn-lg" name="signup" value="signup" >Sign Up</button></form>
						<a href="#" class="btn btn-link">Forgot Password?</a>
						
					</div>

				</form>
			</div>
		</div>
	</div>
     
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </BODY>
</html>