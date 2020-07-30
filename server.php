<?php
  session_start();

  $fname = "";
  $lname = "";
  $email = "";
  $p1="";
  $p2="";
  $selected_val="";
   $sql="";
  
   
 
// connect to the database
  $db = mysqli_connect('localhost','root','akbatra567','blog');

  

//if sign up button is clicked
  if(isset($_POST['signup'])){
      $selected_val = $_POST['account_type'];
      $fname = mysqli_real_escape_string($db,$_POST['firstname']);
      $lname = mysqli_real_escape_string($db,$_POST['lastname']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password1']);
      $_SESSION['firstname'] = $fname;
      $_SESSION['lastname'] = $lname;
      $_SESSION['email'] = $email;
      
      if($selected_val=="artist")
        {
         
          $_SESSION['val'] = "artist";
          $sql = "INSERT INTO artist (firstname,lastname,email,password) VALUES ('$fname','$lname','$email','$password')";
          
          $result=mysqli_query($db,$sql);
           if($result == FALSE )
          {
			  echo "Oops. Something went wrong. Please try again"; 

           }
          else
          {
                 header("location:artist_detail.php");//redirecting page 
          }
		}
      if($selected_val=="art_lover")
        {
         
          $_SESSION['val'] = "art_lover";
          $sql = "INSERT INTO artlover (firstname,lastname,email,password)
          VALUES ('$fname','$lname','$email','$password')"; 
          $result= mysqli_query($db,$sql);
          if($result == FALSE )
          {
			  echo "Oops. Something went wrong. Please try again"; 

           }
          else
          {
                 header("location:artist_detail.php");//redirecting page 
          }
		}
      
  }

//if login button is clicked
    

/*logout
if(isset($GET['logout'])){
    session_destroy();
    unset($_SESSION['firstname']);
    unset($_SESSION['success']);
    header('location:index.php');
}*/
           
           
?>