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
            <a href="/artwork">Artwork</a>
            </li>
            <li>
            <a href="artist_1.html">Artist</a>
            </li>
            <li>
            <a href="/sell_art">Sell Art</a>
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
            @guest
            <li>
                <a href="/login">LogIn</a>
            </li>
            <li>
                <a href="/register">SignUp</a>
            </li>
            @else
            <li>
                <a href="/profile">User Name</a>
            </li>
            @endguest
        </ul>
        </div>
    </div>
</nav>
<!-- Navbar Ends Here -->
