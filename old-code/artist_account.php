<?php include('server.php'); ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width  ,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <BODY>
        <!-- nav bar-->
        <nav class="navbar navbar-inverse" id="nav-top" >
          <div class="container-fluid">
            
                <a class="navbar-brand brand" href="#">
                    <b>Indian Art Haat</b>
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
                            <input type="text" class="form-control" placeholder="Search" style="height:28px;" >
                            <div class="input-group-btn">
                               <button class="btn btn-default" type="submit">
                                  <i class="glyphicon glyphicon-search"></i>
                               </button>
                            </div>
                         </div>
                      
                  </li>
                  <li>
                      <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;My cart</a>
                  </li>
                  <li>
                      <a href="#">Log out</a>
                  </li>
              </ul>
              </div>
          </div>
        </nav>
        
        <!--header-->
        <div class="container-fluid">
            <div id="member_detail">
                <div class="col-lg-2 col-xs-2">
                    <div class="avatar">
                        <img src="images/artist.JPG" style='height: 100%; width: 100%; object-fit: contain'>
                    </div>
                </div>
                <div class="col-lg-10 col-xs-10"><br><br><br><br>
                    <h3><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?></h3>
                    <small class="text-muted"><br>
                                <span>    
                                    Madhubani,BIHAR
                                     <!-- php echo $_SESSION['city']." ".$_SESSION['state'] ?> -->                                      
                                </span>
                            </small>
                </div>
            </div>
        </div>
        <hr>
        <h3 style="margin-left:20px;"><u><b>Artwork</b></u></h3>
        <hr>
        <!--artworkd-->
        <div class="container-fluid">
	     <div class="row">
  		<div class="col-md-4">
    			<div class="thumbnail">
        			<img class="img-responsive" src="../project/images/10.jpg" style="width:100%">
        		</div>
  		</div>
 		<div class="col-md-4">
  			<div class="thumbnail">
     				<img class="img-responsive" src="../project/images/11.jpg" style="width:75.5%">
        		</div>
 		</div>
  		<div class="col-md-4">
  			<div class="thumbnail">
     		   		<img class="img-responsive" src="../project/images/12.jpg" style="width:78%">
     			</div>
		</div>
	</div>
	<div class="row">	
	   <div class="column">
  		<div class="col-md-4">
    			<div class="thumbnail">
        			<img class="img-responsive" src="../project/images/13.jpg" style="width:100%">
        		</div>
  		</div>
 		<div class="col-md-4">
  			 <div class="thumbnail">	
    			 	<img class="img-responsive" src="../project/images/14.jpg" style="width:97%">
        		 </div>
 		</div>
  		<div class="col-md-4">
  			<div class="thumbnail">
     		 		<img class="img-responsive" src="../project/images/15.png" style="width:95%">
     			</div>
 	 	</div>
	    </div>
	</div>

	<div class="row">	
	   <div class="column">
  		<div class="col-md-4">
    			<div class="thumbnail">
      				<img class="img-responsive" src="../project/images/16.jpg" style="width:100%">
        		</div>
  		</div>
 		<div class="col-md-4">
  			<div class="thumbnail">     				
    				<img class="img-responsive" src="../project/images/17.jpg" style="width:77%">
     			</div>
 		</div>
  		<div class="col-md-4">
  			<div class="thumbnail">     		 		
     		   		<img class="img-responsive" src="../project/images/18.jpg" style="width:88%">  	  		
     			</div>
 	 	</div>
	    </div>
	</div>
	</div>
        <!--footer-->
        <div class="container-fluid main-footer" id="footer-container">
            <a href="#nav-top" id="navBackToTop">
            <div class="navFooterBackToTop">
                <span class="navFooterBackToTopText"><strong>Back to top</strong></span>
            </div>
            </a>
            <div class="brand-name">
               <span class="brand">Indian Art Haat
               </span>
            <br>
            </div>
    
           <div class="credits">
               <span class=" pull-right">
                <a class="btn btn-link"  href="about_us.html">About Us</a>
                <a class="btn btn-link"  href="#">Help</a> 
                
                    <span class="hide" >Contact Us</span>    
                    
                        <a  href="#" >
                            <i class="fa fa-facebook " class="fav"></i>
                        </a>
                        &nbsp;
                        <a  href="#" >
                            <i class="fa fa-linkedin" class="fav"></i>
                        </a>
                        &nbsp;

                        <a href="#" >
                            <i class="fa fa-twitter" class="fav"></i>
                        </a>
                        &nbsp;
                        <a href="#" >
                            <i class="fa fa-google" class="fav"></i>
                        </a>
                        &nbsp;
                             
                    </span>
              

            </div>
        
        </div>
        

    </BODY>
</html>