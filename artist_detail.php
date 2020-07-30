<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width  ,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <script type = "text/javascript">
        function validate() {
       
        var length = document.personal.mobile.value;
        var pin = document.personal.pin.value;
        if(length.toString().length<10 || length.toString().length >10 )
         {
             alert('Mobile number must have 10 digits');
             return false;
         }
         else if(pin.toString().length < 6 || pin.toString().length > 6)
         {
             alert('Pin Code must have 6 digits');
             return false;
         }
         else
         return( true );
        }
      </script>
    </head>
    <BODY >
        <!--nav bar-->
       <nav class="navbar navbar-inverse" id="nav-top">
          <div class="container-fluid">
            
                <a class="navbar-brand" href="#">
                Indian Art Haat
                </a>
            
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <a href="art_page1.html">Artwork</a>
                  </li>
                  <li>
                    <a href="artist_1.htm">Artist</a>
                  </li>
                  <li>
                    <a href="sell_art.htm">Sell Art</a>
                  </li>
                </ul>
                
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      
                         <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                               <button class="btn btn-default" type="submit">
                                  <i class="glyphicon glyphicon-search"></i>
                               </button>
                            </div>
                         </div>
                      
                  </li>
                  <li>
                      <a href="login.php">LogIn</a>
                  </li>
                  <li>
                      <a href="signup.php">SignUp</a>
                  </li>
              </ul>
              </div>
          </div>
        </nav>
        
		
      <?php 
        
		if(isset($_POST['continue']))
		{
          $email = $_POST['email'];
          $mobile = $_POST['mobile'];
          $st_add = $_POST['st_add'];
          $pin = $_POST['pin'];
          $city = $_POST['city'];
          $state = $_POST['state'];
        
        $_SESSION['city'] = $city;
        $_SESSION['state'] = $state;
         // echo $_SESSION['val'];
       if(($_SESSION['val']=="artist"))
       {  $sqll = "UPDATE artist SET mobile='$mobile',address='$st_add',pincode='$pin',city='$city',state='$state' WHERE email='$email'" ;
          mysqli_query($db,$sqll);
           header('location: img_upload.php'); //redirecting page 
		}
         /*if(($_SESSION['selected_val']=="art_lover"))   
          {  $sqll = "UPDATE artLover SET mobile='$mobile',address='$st_add',pincode='$pin',city='$city',state='$state' WHERE email='$email'" ;
          mysqli_query($db,$sqll);
           header('location: index.php'); //redirecting page 
		}  */
        }
       ?>
		
        <!--personal detail-->
        <div class="detail">        
			<div class="">
				<h2 class="text-center">Personal Details</h2>
                <small style="color:red; float:right; margin-right:10px;"><b>Please fill all fields</b> </small>
			</div>
           <br>
			<hr />
			<div class="">
				<form method="post" name="personal" onsubmit="return( validate());">
					<h3>Personal information</h3>
                    <hr>
                    <div class="row">
                    <div class="col-lg-1 col-xs-12">
                        <b>Full name:</b>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <input type="text" class="form-control" placeholder="first name" name="firstname" value="<?php echo  $_SESSION['firstname']; ?>"/> 
                    </div>
                    <div class="col-lg-5 col-xs-12">
                        <input type="text" class="form-control" placeholder="last name" name="lastname" value="<?php echo $_SESSION['lastname']; ?>"/>
                    </div>
                    <br><br><br>
                    <div class="col-lg-1 col-xs-4">
                        <b>Email id:</b>
                    </div>
                    <div class="col-lg-3 col-xs-8">
                       <input type="email" class="form-control" placeholder="abc@gmail.com" name="email" value="<?php echo  $_SESSION['email']; ?>"/> 
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-1 col-xs-4">
                        <b>Mobile no:</b>
                    </div>
                    <div class="col-lg-3 col-xs-8">
                       <input type="text" class="form-control" placeholder="" name="mobile" required/> 
                    </div>
                    <br><br><br><hr>
                    <h3>Address</h3>
                    <hr>
                    <div class="col-lg-1 col-xs-12">
                        <b>Street Address:</b>
                    </div>
                    <div class="col-lg-11 col-xs-12">
                        <input type="text" class="form-control" name="st_add" required>
                    </div>
                    <br><br><br>
                    <div class="col-lg-1 col-xs-2">
                        <b>Pin code:</b>
                    </div>
                    <div class="col-lg-3 col-xs-4">
                        <input type="number" class="form-control" name="pin" required >
                    </div>
                    <div class="col-lg-1 col-xs-2">
                        <b>City:</b>
                    </div>
                    <div class="col-lg-3 col-xs-4">
                        <input type="text" class="form-control" name="city" required>
                    </div>
                    <div class="col-lg-1 col-xs-2">
                        <b>State:</b>
                    </div>
                    <div class="col-lg-3 col-xs-3 ">
                       <select autofocus id="" name="state">
                            <option selected hidden>State</option>
                            <option value="Delhi-NCR">Delhi-NCR</option>
                            <option value="UP">UP</option>
                            <option value="Bihar">Bihar</option>
                        </select>
                    </div>
                    <br><br><br>
                    <button type="submit" id="continue" class="btn" name="continue">
                        <b>Continue&nbsp;>></b>
                        </button>
                        
                 </div>
				</form>
                
                
                
			</div>
        
		</div>

     
        
        
        <script src="JS/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </BODY>
</html>