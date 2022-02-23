@props(['laptops'])
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link type="text/css" href="../../css/suggested.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="col-md-10 border border-primary">

<div class="container">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators mb-0 pb-0">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner no-padding my-5">
            <div class="carousel-item active">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info"><img class="img-fluid card-img-top" src="{{asset('img/'.$laptops[0]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>maiores atque labore fugiat tenetur tempore veritatis temporibus!</p>

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top rounded-bottom" src="{{asset('img/'.$laptops[1]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>Lorem eritatis temporibus!</p>

                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top rounded-bottom" src="{{asset('img/'.$laptops[2]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>
                        Lorem ipsum
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top" src="{{asset('img/'.$laptops[3]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor </p>

                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top" src="{{asset('img/'.$laptops[4]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet
                    </p>

                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top" src="{{asset('img/'.$laptops[2]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur  </p>

                </div>
            </div>
            <div class="carousel-item">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top" src="{{asset('img/'.$laptops[4]->image1)}}">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>

                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top" src="http://via.placeholder.com/300x300">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <a href="#" onclick=abc(this) class="slider_info">
                        <img class="img-fluid card-img-top" src="http://via.placeholder.com/300x300">
                        <div class="card-img-overlay t_img">
                            <span class="float-left text-uppercase">article</span>
                            <span class="float-right text-uppercase">2345 views</span>
                        </div>
                    </a>
                    <p>
                      Sequi nesciunt quam obcaecati maiores atque labore fugiat tenetur tempore veritatis temporibus!
                    </p>

                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon sp"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon sp"></span>
        </a>
    </div>
</div>
</div>
