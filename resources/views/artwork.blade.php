@extends('layouts.app')
@section('title', 'Artwork')
@section('content')

    <!--div filters-->
    <div class="container-fluid">
        <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('popularity')"> Popular Arts</button>
                <button class="btn" onclick="filterSelection('latest')"> Latest</button>
        </div>
        <div id="myDropdown">
                <select autofocus id="price-type">
                            <option selected hidden>Price</option>
                            <option value="descending">High to Low</option>
                            <option value="ascending">Low to High</option>
                        </select>
        
            <select autofocus id="category_type">
                            <option selected hidden>Category</option>
                            <option value="category1">Abstract Art</option>
                            <option value="category2">Spiritual Art</option>
                <option value="category3">Figurative Art</option>
                <option value="category4">Contemporary Art</option>
                <option value="category5">Personalised Art</option>
                        </select>
        
            <select autofocus id="size_type">
                            <option selected hidden>Size</option>
                            <option value="Size1">Standard</option>
                            <option value="Size2">Popular</option>
                <option value="Size3">Medium</option>
                <option value="Size4">Large</option>
                <option value="Size5">Cute Size</option>
                        </select>

            <select autofocus id="state_type">
                            <option selected hidden>State</option>
                            <option value="delhi">Delhi-NCR</option>
                            <option value="outside delhi">Bihar</option>
                        </select>
        </div>
    </div>

            <!-- images-->
        <div class="container-fluid">
    <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork1_detail.html">
                    <img class="img-responsive" src="{{ asset('images/1.jpg')}}" style="width:70%">
                    <div class="caption">
                            <p>Peacock</p>
                        
                    </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork2_detail.html">
                        <img class="img-responsive" src="{{ asset('images/2.jpg') }}" style="width:71.5%">
                    <div class="caption">
                            <p>Woman in Mathura</p>
                        </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork3_detail.html">
                        <img class="img-responsive" src="{{ asset('images/7.jpg')}}" style="width:100%">
                        <div class="caption">
                            <p>Fishes</p>
                    </div></a>
                </div>
        </div>
    </div>
    <div class="row">	
        <div class="column">
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork4_detail.html">
                    <img class="img-responsive" src="{{ asset('images/4.jpg') }}" style="width:88%">
                    <div class="caption">
                        <p>Painting depicting dance scene</p>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork5_detail.html">
                        <img class="img-responsive" src="{{ asset('images/5.png') }}" style="width:88%">
                    <div class="caption">
                        <p>Painting</p>
                        </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork6_detail.html">
                        <img class="img-responsive" src="{{ asset('images/6.jpg') }}" style="width:100%">
                        <div class="caption">
                        <p>Painting depicting Mother and her child</p>
                        </div></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">	
        <div class="column">
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork7_detail.html">
                    <img class="img-responsive" src="{{ asset('images/3.jpg') }}"style="width:100%">
                    <div class="caption">
                        <p>Painting depicting Lord Ram and Sita</p>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork8_detail.html">
                    <img class="img-responsive" src="{{ asset('images/8.jpg') }}"style="width:45.8%">
                    <div class="caption">
                        <p>Lord Ganesha</p>
                        </div></a>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <a href="artwork9_detail.html">
                        <img class="img-responsive" src="{{ asset('images/9.jpg') }}" style="width:67%">
                        <div class="caption">
                        <p>Goddess Kali</p>
                    </div></a>
            </div>
        </div>
    </div>
    </div>
        </div>
        
        <!--pagination-->
        <div style="text-align: center;">
        <ul class="pagination pagination-lg">
            <li class="disabled">
                <span>�&nbsp;</span>
            </li>
            <li class="active">
                <a href="art_page1.html">1</a>
            </li>
            <li>
                <a href="art_page2.html">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="art_page2.html">&nbsp;�</a>
            </li>
        </ul>
            </div>
        
@endsection