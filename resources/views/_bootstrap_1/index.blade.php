<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/theme.css") }}"/>
    <link rel="stylesheet" href="{{ asset("fontawesome-free-5.9.0-web/css/all.css") }}"/>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="container-fluid white">
        <nav class="container navbar navbar-expand-md navbar-light white justify-content-start">
            <a href="/">
                <img src="{{ asset("images/logo.png") }}" alt="logo" class="logo d-none d-sm-block d-lg-block">
                <img src="{{ asset("images/logo.png") }}" alt="logo" class="img-fluid d-block d-sm-none d-lg-none">
            </a>
            <div class="navbar-collapse collapse d-none d-lg-block" id="navbar6">
                <form class="mx-auto my-auto d-inline col-5 col-sm-8 col-lg-8 ">
                    <div class="input-group">
                        <input type="text" class="form-control border border-right-0" placeholder="Search...">
                        <span class="input-group-append">
                        <div class="input-group-text bg-transparent border-left-0">
                            <i class="fa fa-search" style="color: #e3e3e3"></i>
                        </div>
                    </span>
                    </div>
                </form>
            </div>

            <a href="#" class="right d-block d-sm-none d-lg-none">
                <div class="row">
                    <img src="{{ asset("images/card.png") }}" alt="card" class="img-fluid">
                </div>
            </a>

            <a href="#" class="d-none d-sm-block d-lg-block right">
                <div class="row">
                    <img src="{{ asset("images/card.png") }}" alt="card" class="card-img">
                    <div class="card-price d-none d-sm-none d-lg-block">
                        300$
                    </div>
                </div>

            </a>


        </nav>
    </div>

    <nav class="navbar navbar-expand-sm bg-theme-menu navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">HOME</h4>
                        <h5 class="d-block d-sm-none d-lg-none">HOME</h5>
                    </a>
                </li>
                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">SALE</h4>
                        <h5 class="d-block d-sm-none d-lg-none">SALE</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">HANDBAGS</h4>
                        <h5 class="d-block d-sm-none d-lg-none">HANDBAGS</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">WALLETS</h4>
                        <h5 class="d-block d-sm-none d-lg-none">WALLETS</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">ACCESSORIES</h4>
                        <h5 class="d-block d-sm-none d-lg-none">ACCESSORIES</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">MEN STORE</h4>
                        <h5 class="d-block d-sm-none d-lg-none">MEN STORE</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">SHOES</h4>
                        <h5 class="d-block d-sm-none d-lg-none">SHOES</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">VINTAGE</h4>
                        <h5 class="d-block d-sm-none d-lg-none">VINTAGE</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">SERVICES</h4>
                        <h5 class="d-block d-sm-none d-lg-none">SERVICES</h5>
                    </a>
                </li>

                <li class="nav-link d-none d-sm-none d-lg-block" id="space">
                    |
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="h4 d-none d-sm-block d-lg-block">CONTACT US</h4>
                        <h5 class="d-block d-sm-none d-lg-none">CONTACT US</h5>
                    </a>
                </li>

                <li class="nav-link d-block d-sm-none d-lg-none">
                    <form class="mx-auto my-auto d-inline col-5 col-sm-6 col-lg-5 ">
                        <div class="input-group">
                            <input type="text" class="form-control border border-right-0" placeholder="Search...">
                            <span class="input-group-append">
                        <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                    </span>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text-center bg-theme-slideshow slideshow" style="margin-bottom:0" >
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mx-auto">
                        <div class="col-md-5 text-md-right text-center">
                            <img src="{{ asset("images/slideshow.png") }}" alt="slideshow" class="image">
                        </div>
                        <div class="col-md-5">
                            <div class="carousel-caption d-none d-md-block text-left" style="margin-bottom: 10%">
                                <h1 class="intro">COWHIDE <br>
                                    STANDARD CREW</h1>

                                <p class="para">
                                    <strong>
                                        White coloured, short-sleeved, printed T-shirt for
                                        man by Levi's. This crew next T-shirt is made of or-
                                        ganic cotton and comes in a regular fit.
                                    </strong>
                                </p>

                                <br>

                                <button type="button" class="btn btn-outline-light button"><strong>SHOP NOW</strong></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row mx-auto">
                        <div class="col-md-5 text-md-right text-center">
                            <img src="{{ asset("images/slideshow.png") }}" alt="slideshow" class="image">
                        </div>
                        <div class="col-md-5">
                            <div class="carousel-caption d-none d-md-block text-left" style="margin-bottom: 10%">
                                <h1 class="intro">COWHIDE <br>
                                    STANDARD CREW</h1>

                                <p class="para">
                                    <strong>
                                        White coloured, short-sleeved, printed T-shirt for
                                        man by Levi's. This crew next T-shirt is made of or-
                                        ganic cotton and comes in a regular fit.
                                    </strong>
                                </p>

                                <br>

                                <button type="button" class="btn btn-outline-light button"><strong>SHOP NOW</strong></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row mx-auto">
                        <div class="col-md-5 text-md-right text-center">
                            <img src="{{ asset("images/slideshow.png") }}" alt="slideshow" class="image">
                        </div>
                        <div class="col-md-5">
                            <div class="carousel-caption d-none d-md-block text-left" style="margin-bottom: 10%">
                                <h1 class="intro">COWHIDE <br>
                                    STANDARD CREW</h1>

                                <p class="para">
                                    <strong>
                                        White coloured, short-sleeved, printed T-shirt for
                                        man by Levi's. This crew next T-shirt is made of or-
                                        ganic cotton and comes in a regular fit.
                                    </strong>
                                </p>

                                <br>

                                <button type="button" class="btn btn-outline-light button"><strong>SHOP NOW</strong></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mycarousel" class="carousel slide white d-none d-sm-block d-lg-block" data-ride="carousel">
        <div class="row">
            <!-- The slideshow -->
            <div class="carousel-inner col-lg-9 col-sm-9 col-9 mx-auto">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-lg-4">
                            <div class="row">
                                <div class="col-7 col-sm-7 col-lg-7">
                                    <img src="{{ asset("images/banner-shoe.png") }}" class="img-fluid">
                                </div>
                                <div class="content col-5 col-sm-5 col-lg-5">
                                    <h2 class="h2">BRANDED <br>SHOWS</h2>
                                    <button type="button" class="btn btn-success">SHOP</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-4">
                            <div class="row">
                                <div class="col-7 col-sm-7 col-lg-7  img-center">
                                    <img src="{{ asset("images/banner.png") }}" class="img-fluid">
                                </div>
                                <div class="content col-5 col-sm-5 col-lg-5">
                                    <h2 class="h2">BRANDED <br>SHOWS</h2>
                                    <button type="button" class="btn btn-success">SHOP</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-4">
                            <div class="row">
                                <div class="col-7 col-sm-7 col-lg-7 img-center" >
                                    <img src="{{ asset("images/banner-tshirt.png") }}" class="img-fluid">
                                </div>
                                <div class="content col-5 col-sm-5 col-lg-5">
                                    <h2 class="h2">BRANDED <br>SHOWS</h2>
                                    <button type="button" class="btn btn-success">SHOP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 colsm-4 col-lg-4">
                            <div class="row">
                                <div class="col-7 col-sm-7 col-lg-7">
                                    <img src="{{ asset("images/banner-shoe.png") }}" class="img-fluid">
                                </div>
                                <div class="content col-5 col-sm-5 col-lg-5">
                                    <h2 class="h2">BRANDED <br>SHOWS</h2>
                                    <button type="button" class="btn btn-success">SHOP</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-4">
                            <div class="row">
                                <div class="col-7 col-sm-7 col-lg-7 img-center" >
                                    <img src="{{ asset("images/banner.png") }}" class="img-fluid">
                                </div>
                                <div class="content col-5 col-sm-5 col-lg-5">
                                    <h2 class="h2">BRANDED <br>SHOWS</h2>
                                    <button type="button" class="btn btn-success">SHOP</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 colsm-4 col-lg-4">
                            <div class="row">
                                <div class="col-7 col-sm-7 col-lg-7 img-center">
                                    <img src="{{ asset("images/banner-tshirt.png") }}" class="img-fluid">
                                </div>
                                <div class="content col-5 col-sm-5 col-lg-5">
                                    <h2 class="h2">BRANDED <br>SHOWS</h2>
                                    <button type="button" class="btn btn-success">SHOP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev col-1 col-sm-1 col-lg-1" href="#mycarousel" data-slide="prev">
                <i class="fas fa-angle-left fa-5x"></i>
            </a>
            <a class="carousel-control-next col-1 col-sm-1 col-lg-1" href="#mycarousel" data-slide="next">
                <i class="fas fa-angle-right fa-5x"></i>
            </a>
        </div>
    </div>

    <div class="container-fluid bg-theme-feature">
        <h2>FEATURED PRODUCTS</h2>
    </div>

    <div class="container-fluid white">
        <div class="container row">
            <div class="col-xs-5 col-sm-5 col-lg-3 product">
                <img src="{{ asset("images/brand-shoes.png") }}" alt="shoe" width=" 100%"/>
                <h4>BRAND SHOE</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-5 text-md-right">
                        <h4 class="price">300$</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 text-md-left">
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-lg-3 product">
                <img src="{{ asset("images/brand-tee.png") }}" alt="shoe" width=" 100%"/>
                <h4>BRAND TEES</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-5 text-md-right">
                        <h4 class="price">300$</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 text-md-left">
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-lg-3 product"><img src="{{ asset("images/brand-shirt.png") }}" alt="shoe" width=" 100%"/>
                <h4>BRAND SHOES</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-5 text-md-right">
                        <h4 class="price">300$</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 text-md-left">
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-lg-3 product">
                <img src="{{ asset("images/brand-little-bag.png") }}" alt="shoe" width=" 100%"/>
                <h4>BRAND TEES</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-5 text-md-right">
                        <h4 class="price">300$</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 text-md-left">
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-lg-3 product"><img src="{{ asset("images/brand-bag.png") }}" alt="shoe" width=" 100%"/>
                <h4>BRAND WOMEN BAG</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-5 text-md-right">
                        <h4 class="price">300$</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 text-md-left">
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-lg-3 product">
                <img src="{{ asset("images/brand-cargos.png") }}" alt="shoe" width=" 100%"/>
                <h4>BRAND CARGOS</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-5 text-md-right">
                        <h4 class="price">300$</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 text-md-left">
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-theme-footer">
        <div class="row container footer">
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3>FEATURED SALE</h3>
                <p>
                    Alexis Hudson      <br>
                    American Apparel  <br>
                    Ben Sherman       <br>
                    Big Buddha        <br>
                    Chanel            <br>
                    Christian Audigier<br>
                    Coach             <br>
                    Cole Hann
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3>MENS STORE</h3>
                <p>
                    Alexis Hudson      <br>
                    American Apparel  <br>
                    Ben Sherman       <br>
                    Big Buddha        <br>
                    Chanel            <br>
                    Christian Audigier<br>
                    Coach             <br>
                    Cole Hann
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3>WOMEN STORE</h3>
                <p>
                    Alexis Hudson      <br>
                    American Apparel  <br>
                    Ben Sherman       <br>
                    Big Buddha        <br>
                    Chanel            <br>
                    Christian Audigier<br>
                    Coach             <br>
                    Cole Hann
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3>QUICK LINKS</h3>

                <p>
                    Alexis Hudson      <br>
                    American Apparel  <br>
                    Ben Sherman       <br>
                    Big Buddha        <br>
                    Chanel            <br>
                    Christian Audigier<br>
                    Coach             <br>
                    Cole Hann
                </p>
            </div>
        </div>
    </div>

    <div class="text-center bg-theme-creater" style="margin-top:-1px">
        <p style="padding: 1%;">Copyright @ 2013 Css Author</p>
    </div>


</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset("js/demo.js") }}"></script>

</body>
</html>
