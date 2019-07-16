<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("fontawesome-free-5.9.0-web/css/all.css") }}"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/pc/pc.css") }}"/>

</head>
<body>
<div class="container-fluid">
    <nav class="container navbar navbar-expand-md bg-white d-sm-none d-lg-block" style="padding: 0">
        <div class="navbar-collapse collapse w-100 order-1 order-md-1 dual-collapse2">
            <div class="navbar-nav mr-auto">
                <img class="img-fluid" src="{{asset("images/_bootstrap_2/logo.png")}}"/>
            </div>

            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link items" href="#">HOME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link items" href="#">ABOUT ME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link items" href="#">WORKS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link items" href="#">RESUME</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=" container nav d-block d-sm-block d-lg-none" style="padding: 0">
        <div class="col-5" style="padding: 0">
            <img class="img-fluid" src="{{asset("images/_bootstrap_2/logo.png")}}"/>
        </div>

        <hr style="color: #919191">

        <div class="row">
            <div class="col-3">
                <div class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                </div>
            </div>
            <div class="col-3" style="padding-left: 0; padding-right: 0;">
                <div class="nav-item">
                    <a class="nav-link" href="#">ABOUT ME</a>
                </div>
            </div>
            <div class="col-3">
                <div class="nav-item">
                    <a class="nav-link" href="#">WORKS</a>
                </div>
            </div>
            <div class="col-3">
                <div class="nav-item">
                    <a class="nav-link" href="#">RESUME</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center"  style="padding: 0">
        <br><br>
        <i class="fas fa-quote-left fa-4x d-none d-sm-block d-lg-block"></i>
        <i class="fas fa-quote-left fa-3x d-sm-none d-lg-none"></i>
        <br>
        <p class="text-center col-lg-6 mx-auto">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <br>
        <hr style="margin:0;">
        <img class="img-fluid mx-auto" src="{{ asset("images/_bootstrap_2/banner.png") }}" alt="banner"/>
    </div>

    <br>

    <p class="container text-left">
        Portfolio
    </p>

    <div class="container">
        <div class="row">
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-1.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-2.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-3.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-4.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-5.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-6.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-7.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-8.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-9.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-10.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-11.png") }}" alt="layer"/>
            </div>
            <div class="image col-lg-3 col-md-4 col-6 text-center">
                <img class="img-fluid" src="{{ asset("images/_bootstrap_2/layer-12.png") }}" alt="layer"/>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container text-left  ">
        <img class="img-fluid col-avatar col-4 d-md-none d-block d-md-none d-lg-none" src="{{ asset("images/_bootstrap_2/avatar.png") }}" alt="avatar" style="padding: 0"/>
        <img class="img-fluid col-md-avatar col-sm-3 d-sm-none d-none d-md-block d-lg-none" src="{{ asset("images/_bootstrap_2/avatar.png") }}" alt="avatar" style="padding: 0;"/>
        <img class="img-fluid avatar col-lg-2 col-md-3 d-none d-md-none d-lg-block" src="{{ asset("images/_bootstrap_2/avatar.png") }}" alt="avatar" style="padding: 0;"/>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="left-150 col-lg-3 d-none d-md-none d-lg-block">
                    <p class="h3 normal">Lorem Ipsum</p>
                    <i class="fas fa-map-marker-alt"> Kerala, India</i>
                </div>

                <div class="col-left col-lg-3 d-md-none d-block d-md-none d-lg-none">
                    <p class="h3 normal">Lorem Ipsum</p>
                    <i class="fas fa-map-marker-alt"> Kerala, India</i>
                </div>

                <div class="col-md-left col-lg-3 d-sm-none d-none d-md-block d-lg-none">
                    <p class="h3 normal">Lorem Ipsum</p>
                    <i class="fas fa-map-marker-alt"> Kerala, India</i>
                </div>

                <div class="col-md-3 d-none d-lg-block d-sm-none text-right" style="padding-right: 50px; ">
                    <i class="fab fa-twitter fa-3x"></i>
                    <i class="fab fa-dribbble fa-3x"></i>
                </div>
            </div>


            <div class="row">
                <p class="normal col-lg-8 col-sm-12 col-12 footer-left">
                    <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only give centuries, but also the leap
                    into electronic typesetting, remaining essentially uncaged. Its was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>
                </p>

                <div class="col-lg-4 d-block d-sm-block d-lg-none bottom-30" style="margin-left: 3%;">
                    <br>
                    <div class="row">
                        <i class="fab fa-twitter fa-3x text-left"></i>
                        <div class="col-4 col-sm-4 symble">Twitter</div>
                        <i class="fab fa-dribbble fa-3x text-left"></i>
                        <div class="col-4 col-sm-4 symble">Dribbble</div>
                    </div>
                </div>

                <hr class="col-11 col-sm-11 d-block d-sm-block d-lg-none" style="background: white; margin-bottom: 45px">

                <div class="col-lg-3 col-sm-12 col-12" style="margin-top: -2%;">
                    <p class="normal h3">
                        My skill
                    </p>
                    <br>

                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-2">
                            <p class="none-italic h4 ">Ps</p>
                        </div>
                        <div class="col-lg-10 col-sm-10 col-10">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-2">
                            <p class="h4 none-italic">Ai</p>
                        </div>
                        <div class="col-lg-10 col-sm-10 col-10">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-2">
                            <p class="h4 none-italic">Bs</p>
                        </div>
                        <div class="col-lg-10 col-sm-10 col-10">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-2">
                            <p class="h4 none-italic">Cs</p>
                        </div>
                        <div class="col-lg-10 col-sm-10 col-10">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <br><br>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright py-3 d-none d-sm-none d-lg-block">
            <div class="container">
                <div class="text-right">Copyright © 2012 CSS Author</div>
            </div>
        </div>
        <!-- Copyright -->
    </div>

</div>

<!--=========================-->
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>


</html>
