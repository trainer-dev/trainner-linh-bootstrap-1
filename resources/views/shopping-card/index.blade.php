<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("fontawesome-free-5.9.0-web/css/all.css") }}"/>
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset("css/shopping-card/style.css") }}"/>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ asset("images/shopping-card/logo.png") }}" alt="logo">
                </div>

                <div class="col-lg-8">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <nav class="navbar navbar-expand-lg navbar-light float-right">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div id="nav" class="navbar-collapse collapse">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">My Account</a>
                                        </li>
                                        <li class="nav-item space" style="color: #d5d5d5">
                                            <div class="space">|</div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Wishlist</a>
                                        </li>
                                        <li class="nav-item space" style="color: #d5d5d5">
                                            <div class="space">|</div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">My Card</a>
                                        </li>
                                        <li class="nav-item space" style="color: #d5d5d5">
                                            <div class="space">|</div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Checkout</a>
                                        </li>
                                        <li class="nav-item space" style="color: #d5d5d5">
                                            <div class="space">|</div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="col-lg-10 justify-content-end">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form class="mx-auto my-auto col-lg-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control border border-right-0" placeholder="Search...">
                                            <span class="input-group-append">
                                            <div class="input-group-text bg-banner-color border-left-0" style="border: 0">
                                                <i class="fa fa-search" style="color: #e3e3e3"></i>
                                            </div>
                                        </span>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-lg-4 float-right">
                                            <div class="card-item">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="header-content">TOTAL</div>
                                            <div class="header-content">$600.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid menu">
            <div class="container">
                <div class="navbar navbar-dark ">
                    <div class="container d-flex justify-content-between">
                        <div class="button">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            CATEGORY
                        </div>



                        <div class="col-lg-10 d-flex flex-row justify-content-center">
                            <div class="p-2">CLOTHING</div>
                            <div class="p-2">ELECTRONICS HOT</div>
                            <div class="p-2">HEALTH & BEAUTY</div>
                            <div class="p-2">WATCHES</div>
                            <div class="p-2">JEWELLERY</div>
                            <div class="p-2">SHOES</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column">
                    <div class="container list">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Clothing                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Electromics
                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Shoes
                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Watches
                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Health and Beauty
                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Kids and Babies
                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Sports
                            </li>
                            <li class="list-group-item">
                                <img class="img-fluid" src="{{ asset("images/shopping-card/list-button.png") }}"/>
                                Home and Garden
                            </li>
                        </ul>
                    </div>

                    <div class="container sales">
                        <div class="container">
                            <div class="col-lg-6" style="padding:0">
                                <p class="title">
                                    <b>HOT DEALS</b>
                                </p>
                            </div>
                            <div class="button">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="container" style="padding: 0">
                        @include ('shopping-card.carousels.main')
                        <div class="bg-banner-color">
                            <div class="container" style="background-color: #ef0a2b">
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <p class="banner">MONEY BACK
                                            <br>
                                            30 Days Money Back Guarantee
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <p class="banner">
                                            FREE SHIPPING <br>
                                            Shipping on orders over $99
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <p class="banner">
                                            SPECIAL SALE <BR>
                                            Extra $5 off on all items
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container product">
                        aaa
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--=========================-->
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>


</html>

