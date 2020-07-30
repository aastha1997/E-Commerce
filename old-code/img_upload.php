<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width  ,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <BODY >
      
        <?php
         //for image upload
      if(isset($_POST['img_upload'])){
          header('location: artist_account.php');
      }
        ?>
        <!--image upload-->
         <div class="modal-dialog">
		<div class="modal-content"><br>
			<div class="modal-heading">
				<h2 class="text-center">Your Avatar</h2>
			</div>
			<hr>
			<div class="modal-body">
				<form action="artist_account.php" method="post">
                        <div class="row">
                            
                            <div class="col-lg-6 col-xs-12 ">
                                <input type="file" placeholder="choose file">  
                            </div>
                            <div class="col-lg-6 col-xs-12 ">
                                <center>
                                <h3>Image Preview</h3> </center> 
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 " id="img_preview">
                            <img src="images/img_preview.jpg" alt="img_preview">
                                 </div>
                    </div>
					<center>
						<button type="submit" class="btn btn-lg" name="img_upload">Create Account</button>
					</center>	

				</form>
			</div>
		</div>
	</div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </BODY>
</html>