<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset("css/theme.css") }}"/>
    <link rel="stylesheet" href="{{ asset("fontawesome-free-5.9.0-web/css/all.css") }}"/>


</head>
<body>

<div id="mycarousel" class="carousel slide white d-none d-sm-block d-lg-block" data-ride="carousel">
    <div class="row down">
        <!-- The slideshow -->
        <div class="carousel-inner col-lg-9 col-sm-9 col-9 mx-auto" style="margin: 3% 0">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-lg-7">
                                <img src="{{ asset("images/banner-shoe.png") }}" class="img-fluid">
                            </div>
                            <div class="content col-5 col-sm-5 col-lg-5">
                                <h2 class="h2">BRANDED SHOWS</h2>
                                <button type="button" class="btn btn-success">SHOP</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-lg-7">
                                <img src="{{ asset("images/banner.png") }}" class="img-fluid">
                            </div>
                            <div class="content col-5 col-sm-5 col-lg-5">
                                <h2 class="h2">BRANDED SHOWS</h2>
                                <button type="button" class="btn btn-success">SHOP</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-lg-7">
                                <img src="{{ asset("images/banner-tshirt.png") }}" class="img-fluid">
                            </div>
                            <div class="content col-5 col-sm-5 col-lg-5">
                                <h2 class="h2">BRANDED SHOWS</h2>
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
                                <h2 class="h2">BRANDED SHOWS</h2>
                                <button type="button" class="btn btn-success">SHOP</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-lg-7">
                                <img src="{{ asset("images/banner.png") }}" class="img-fluid">
                            </div>
                            <div class="content col-5 col-sm-5 col-lg-5">
                                <h2 class="h2">BRANDED SHOWS</h2>
                                <button type="button" class="btn btn-success">SHOP</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 colsm-4 col-lg-4">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-lg-7">
                                <img src="{{ asset("images/banner-tshirt.png") }}" class="img-fluid">
                            </div>
                            <div class="content col-5 col-sm-5 col-lg-5">
                                <h2 class="h2">BRANDED SHOWS</h2>
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

<!--=========================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
