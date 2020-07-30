<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width  ,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <BODY class="bdy">
       
      <?php include('partials/_navbar.php'); ?>
        <!--login button is clicked-->
        <?php
             if(isset($_POST['login']))
             {
                 $email = mysqli_real_escape_string($db,$_POST['email']);
                 $password = mysqli_real_escape_string($db,$_POST['password']); 
                 $query = "SELECT firstname FROM artist,artlover WHERE artist.email='$email' AND artist.password='$password' OR artlover.email='$email' AND artlover.password='$password'";
                 $result = mysqli_query($db,$query);
                 if(mysqli_num_rows($result) == 0)
                 {
                     echo "Oops. Something went wrong. Please try again";
                     header('location: login.php');
                 }
                 else
                 {
                     $_SESSION['firstname'] = $result;
                     header('location: index.php');
                 }
             }
        ?>


        <!--login -->
	      <div class="modal-dialog">
		<div class="modal-content">
             <a href="index.php" class=" ">« Back</a>
			<div class="modal-heading">
				<h2 class="text-center">LogIn</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form action="login.php" method="post">            
                    
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" placeholder="abc@gmail.com" name="email" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Password" name="password" />
						</div>
					</div>

					<div class="form-group text-center">
						<a href="signup.php" class="btn btn-link">SignUp</a>
						<button type="submit" class="btn btn-success btn-lg" name="login">LogIn</button>
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