<?php include('server.php'); ?>
<!DOCTYPE html>
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
        
        <!--login div-->
       <!-- <div class="content">
            <?php if(isset($_SESSION['firstname'])); ?>
            <p>Welcome<strong><?php echo $_SESSION['firstname']; ?></strong></p>
            <p><a href="index.php?logout='1'">logout</a></p>      
        </div> -->
        
        <!-- about us-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-2 col-xs-12">
              <img src="images/logo.png" class="img-responsive">
            </div>
            <div class="col-lg-10 col-xs-12">
              <h3 >About Us</h3>
              Indian Art Haat is a marketplace that links artists directly with buyers.It has been created to allow indian folk artists to present and sell their work by themselves, simply and intuitively. The gallery offers buyers and collectors a direct relationship with sellers: privileged access to artists around the country, without intermediaries, and with prices direct from the artist's studio.
            </div>
          </div>
        </div>
        
        <!--slideshow-->
        
        <div class="container-fluid">
            <center>
            <div class="carousel slide" id="mycarousel">
                <div class="carousel-inner">
                    <div class="item active">
                       <img class="img-responsive" src="images/slide1.jpg">
                    </div>
                    <div class="item">
                       <img class="img-responsive" src="images/slide2.jpg">
                    </div>
                    <div class="item">
                       <img class="img-responsive" src="images/slide3.jpg">
                    </div>  
                </div>
                <a class="left carousel-control " href="#mycarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control " href="#mycarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </center>
        </div>
        <br><br><br>
        <hr>
        
        <!-- latest arts-->
        <div class="container-fluid section" >
            <h3>New Artworks
                <a  href="art_page1.html" class="btn">
                    <strong>More&nbsp;>></strong>
                </a>
            </h3>
             <hr>
           <div class="carousel slide" id="latestartwork">
            
             <div class="carousel-inner"> 
                <div class="item active">
                   <div class="row ">
                       <div class=" col-lg-3 col-xs-3 home ">
                            <div class="panel-group panel-set">
                                <div class="panel panel-default">
                                     <div class="panel-body"><a href="#"> 
                                         <img class="img-responsive-panel" src="images/1.jpg"></a>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class=" col-lg-3 col-xs-3 home">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                   <div class="panel-body"> <a href="#"> 
                                       <img class="img-responsive-panel" src="images/10.jpg"></a>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class=" col-lg-3 col-xs-3 home">
                          <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-body"><a href="#">  
                                   <img class="img-responsive-panel" src="images/11.jpg"></a></div>
                             </div>
                         </div>
                      </div>
                        <div class=" col-lg-3 col-xs-3 home">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                 <div class="panel-body"><a href="#">  
                                     <img class="img-responsive-panel" src="images/4.jpg"></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                   </div>
                 </div>
                <div class="item ">
                   <div class="row ">
                      <div class=" col-lg-3 col-xs-2 home">
                         <div class="panel-group panel-set">
                            <div class="panel panel-default">
                               <div class="panel-body"><a href="#">
                                   <img class="img-responsive-panel" src="images/11.jpg"></a>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class=" col-lg-3 col-xs-2 home">
                          <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-body"> <a href="#"> 
                                    <img class="img-responsive-panel" src="images/12.jpg"></a>
                                 </div>
                            </div>
                         </div>
                       </div>
                       <div class=" col-lg-3 col-xs-2 home">
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-body"><a href="#">  
                                  <img class="img-responsive-panel" src="images/13.JPG"></a>
                                </div>
                            </div>
                         </div>
                      </div>
                       <div class=" col-lg-3 col-xs-2 home">
                        <div class="panel-group panel-set">
                           <div class="panel panel-default">
                               <div class="panel-body"><a href="#"> 
                                   <img class="img-responsive-panel" src="images/5.png"></a>
                               </div>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
                 
                 <!--item 3-->
                <div class="item">
                   <div class="row ">
                      <div class=" col-lg-3 col-xs-3 home">
                        <div class="panel-group panel-set">
                           <div class="panel panel-default">
                               <div class="panel-body"><a href="#"> 
                                   <img class="img-responsive-panel" src="images/5.png"></a>
                               </div>
                          </div>
                        </div>
                      </div>
                      <div class=" col-lg-3 col-xs-3 home">
                        <div class="panel-group">
                           <div class="panel panel-default">
                              <div class="panel-body"><a href="#">  
                                  <img class="img-responsive-panel" src="images/17.jpg"></a>
                               </div>
                           </div>
                        </div>
                       </div>
                        <div class=" col-lg-3 col-xs-3 home">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                 <div class="panel-body"><a href="#">  
                                     <img class="img-responsive-panel" src="images/7.jpg"></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                       <div class=" col-lg-3 col-xs-3 home">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                 <div class="panel-body"><a href="#">  
                                     <img class="img-responsive-panel" src="images/2.jpg"></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                    </div>
                 </div>
                 <br><br><br>
             </div>
                <a class="left carousel-control slide" href="#latestartwork" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control slide" href="#latestartwork" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
             </div>
            </div>
        <br>
        <hr>
        
        <!--popular arts-->
        <div class="home_art " >
            <h3 style="margin-left: 20px;">Popular Artworks
                <a  href="art_page1.html" class="btn">
                    <strong>More&nbsp;>></strong>
                </a>
            </h3>
            <hr>
            <div class="carousel slide" id="popularartwork">
            
             <div class="carousel-inner"> 
                <div class="item active">
                   <div class="row no-pad">
                       <div class=" col-lg-3 col-xs-3 home ">
                            <div class="panel-group panel-set">
                                <div class="panel panel-default">
                                     <div class="panel-body"><a href="#"> 
                                         <img class="img-responsive-panel" src="images/1.jpg"></a>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class=" col-lg-3 col-xs-3 home">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                   <div class="panel-body"> <a href="#"> 
                                       <img class="img-responsive-panel" src="images/10.jpg"></a>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class=" col-lg-3 col-xs-3 home">
                          <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-body"><a href="#">  
                                   <img class="img-responsive-panel" src="images/11.jpg"></a></div>
                             </div>
                         </div>
                      </div>
                        <div class=" col-lg-3 col-xs-3 home">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                 <div class="panel-body"><a href="#">  
                                     <img class="img-responsive-panel" src="images/4.jpg"></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                   </div>
                 </div>
                <div class="item ">
                   <div class="row no-pad">
                      <div class=" col-lg-3 col-xs-3 home">
                         <div class="panel-group panel-set">
                            <div class="panel panel-default">
                               <div class="panel-body"><a href="#">
                                   <img class="img-responsive-panel" src="images/11.jpg"></a>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class=" col-lg-3 col-xs-3 home">
                          <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-body"> <a href="#"> 
                                    <img class="img-responsive-panel" src="images/12.jpg"></a>
                                 </div>
                            </div>
                         </div>
                       </div>
                       <div class=" col-lg-3 col-xs-3 home">
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-body"><a href="#">  
                                  <img class="img-responsive-panel" src="images/13.JPG"></a>
                                </div>
                            </div>
                         </div>
                      </div>
                       <div class=" col-lg-3 col-xs-3 home">
                        <div class="panel-group panel-set">
                           <div class="panel panel-default">
                               <div class="panel-body"><a href="#"> 
                                   <img class="img-responsive-panel" src="images/5.png"></a>
                               </div>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
                 
                 <!--item 3-->
                <div class="item">
                   <div class="row no-pad">
                      <div class=" col-lg-3 col-xs-3 home">
                        <div class="panel-group panel-set">
                           <div class="panel panel-default">
                               <div class="panel-body"><a href="#"> 
                                   <img class="img-responsive-panel" src="images/5.png"></a>
                               </div>
                          </div>
                        </div>
                      </div>
                      <div class=" col-lg-3 col-xs-3 home">
                        <div class="panel-group">
                           <div class="panel panel-default">
                              <div class="panel-body"><a href="#">  
                                  <img class="img-responsive-panel" src="images/17.jpg"></a>
                               </div>
                           </div>
                        </div>
                       </div>
                        <div class=" col-lg-3 col-xs-3 home">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                 <div class="panel-body"><a href="#">  
                                     <img class="img-responsive-panel" src="images/7.jpg"></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                       <div class=" col-lg-3 col-xs-3 home">
                           <div class="panel-group">
                              <div class="panel panel-default">
                                 <div class="panel-body"><a href="#">  
                                     <img class="img-responsive-panel" src="images/2.jpg"></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                    </div>
                 </div>
                 <br><br><br>
             </div>
                <a class="left carousel-control slide" href="#popularartwork" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                <a class="right carousel-control slide" href="#popularartwork" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
             </div>
            </div>
        <br>
            

    
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
                <a class="btn btn-link"  href="help.html">Help</a> 
                
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
        
       
        <script src="js/jquery-3.1.1.min.js"></script>
        <script type="js/bootsrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </BODY>
</html>