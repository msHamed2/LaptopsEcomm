<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alattar company</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/ui.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/all.min.css")}}" rel="stylesheet">
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
</head>
<body>
<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4">
                    <img class="col-6 "  src="{{asset("img/lo.png")}}"/>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-end">
                        <div class="widget-header  me-3">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify">0</span>
                        </div>
                        <div class="widget-header icontext">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                            <div class="text">
                                @auth()
                                <span class="text-muted">Welcome! {{ Auth::user()->name}}</span>
                                    <div>
                                        <a href="/logout">logout</a>
                                    </div>
                                @endauth
                                @guest()
                                <div>
                                    <span class="text-muted">Welcome! </span>
                                    <a href="/login">Sign in</a> |
                                    <a href="/signup"> Register</a>
                                </div>
                                    @endguest
                            </div>
                        </div>

                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->



    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Partnership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Baby &amp Toys</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">example</a></li>
                            <li><a class="dropdown-item" href="#">Home interior</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Home interior 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>

</header> <!-- section-header.// -->
{{$slot}}
<footer class="section-footer border-top bg">
    <div class="container">
        <section class="footer-top  padding-y">
            <div class="row">
                <aside class="col-md col-6">
                    <h6 class="title">Brands</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#">Asus</a></li>
                        <li> <a href="#">Hp</a></li>
                        <li> <a href="#">Dell</a></li>
                        <li> <a href="#">Lenovo</a></li>
                    </ul>
                </aside>
                <aside class="col-md col-6">
                    <h6 class="title">Company</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#">About us</a></li>
                        <li> <a href="#">Career</a></li>
                        <li> <a href="#">Find a store</a></li>
                        <li> <a href="#">Rules and terms</a></li>
                        <li> <a href="#">Sitemap</a></li>
                    </ul>
                </aside>
                <aside class="col-md col-6">
                    <h6 class="title">Help</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#">Contact us</a></li>
                        <li> <a href="#">Money refund</a></li>
                        <li> <a href="#">Order status</a></li>
                        <li> <a href="#">Shipping info</a></li>
                        <li> <a href="#">Open dispute</a></li>
                    </ul>
                </aside>
                <aside class="col-md col-6">
                    <h6 class="title">Account</h6>
                    <ul class="list-unstyled">
                        <li> <a href="#"> User Login </a></li>
                        <li> <a href="#"> User register </a></li>
                        <li> <a href="#"> Account Setting </a></li>
                        <li> <a href="#"> My blabla </a></li>
                    </ul>
                </aside>
                <aside class="col-md">
                    <h6 class="title">Social</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                        <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                        <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                        <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                    </ul>
                </aside>
            </div> <!-- row.// -->
        </section>  <!-- footer-top.// -->

        <section class="footer-bottom row">
            <div class="col-md-2">
                <p class="text-muted">   2021 al-attar</p>
            </div>
            <div class="col-md-8 text-md-center">
                <span  class="px-2">info@com</span>
                <span  class="px-2">+968451924</span>
                <span  class="px-2">Street al-thoura 123, aaa</span>
            </div>
            <div class="col-md-2 text-md-end text-muted">
                <i class="fab fa-lg fa-cc-visa"></i>
                <i class="fab fa-lg fa-cc-paypal"></i>
                <i class="fab fa-lg fa-cc-mastercard"></i>
            </div>
        </section>
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
</body>
</html>
