@extends('layouts.app')

@section('content')
    <!--login div-->
    <!-- about us-->
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-2 col-xs-12">
    <img src="{{ asset('images/logo.png')}}" class="img-responsive">
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
                        <img class="img-responsive" src="{{ asset('images/slide1.jpg')}}">
                    </div>
                
                    <div class="item">
                        <img class="img-responsive" src="{{ asset('images/slide2.jpg')}}">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{ asset('images/slide3.jpg')}}">
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
                            <img class="img-responsive-panel" src="{{ asset('images/1.jpg')}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"> <a href="#"> 
                        <img class="img-responsive-panel" src="{{ asset('images/10.jpg')}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-body"><a href="#">  
                    <img class="img-responsive-panel" src="{{ asset('images/11.jpg')}}"></a></div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="#">  
                        <img class="img-responsive-panel" src="{{ asset('images/4.jpg')}}"></a>
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
                    <img class="img-responsive-panel" src="{{ asset('images/11.jpg')}}"></a>
                </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-2 home">
            <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-body"> <a href="#"> 
                    <img class="img-responsive-panel" src="{{ asset('images/12.jpg')}}"></a>
                    </div>
            </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-2 home">
            <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-body"><a href="#">  
                    <img class="img-responsive-panel" src="{{ asset('images/13.JPG')}}"></a>
                </div>
            </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-2 home">
        <div class="panel-group panel-set">
            <div class="panel panel-default">
                <div class="panel-body"><a href="#"> 
                    <img class="img-responsive-panel" src="{{ asset('images/5.png')}}"></a>
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
                    <img class="img-responsive-panel" src="{{ asset('images/5.png')}}"></a>
                </div>
            </div>
        </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-body"><a href="#">  
                    <img class="img-responsive-panel" src="{{ asset('images/17.jpg')}}"></a>
                </div>
            </div>
        </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="#">  
                        <img class="img-responsive-panel" src="{{ asset('images/7.jpg')}}"></a>
                    </div>
                </div>
            </div>
            </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="#">  
                        <img class="img-responsive-panel" src="{{ asset('images/2.jpg')}}"></a>
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
                            <img class="img-responsive-panel" src="{{ asset('images/1.jpg')}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"> <a href="#"> 
                        <img class="img-responsive-panel" src="{{ asset('images/10.jpg')}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-body"><a href="#">  
                    <img class="img-responsive-panel" src="{{ asset('images/11.jpg')}}"></a></div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="#">  
                        <img class="img-responsive-panel" src="{{ asset('images/4.jpg')}}"></a>
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
                    <img class="img-responsive-panel" src="{{ asset('images/11.jpg')}}"></a>
                </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-body"> <a href="#"> 
                    <img class="img-responsive-panel" src="{{ asset('images/12.jpg')}}"></a>
                    </div>
            </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-body"><a href="#">  
                    <img class="img-responsive-panel" src="{{ asset('images/13.JPG')}}"></a>
                </div>
            </div>
            </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
        <div class="panel-group panel-set">
            <div class="panel panel-default">
                <div class="panel-body"><a href="#"> 
                    <img class="img-responsive-panel" src="{{ asset('images/5.png')}}"></a>
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
                    <img class="img-responsive-panel" src="{{ asset('images/5.png')}}"></a>
                </div>
            </div>
        </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-body"><a href="#">  
                    <img class="img-responsive-panel" src="{{ asset('images/17.jpg')}}"></a>
                </div>
            </div>
        </div>
        </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="#">  
                        <img class="img-responsive-panel" src="{{ asset('images/7.jpg')}}"></a>
                    </div>
                </div>
            </div>
            </div>
        <div class=" col-lg-3 col-xs-3 home">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="#">  
                        <img class="img-responsive-panel" src="{{ asset('images/2.jpg')}}"></a>
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

    @include('partials._footer')
@endsection