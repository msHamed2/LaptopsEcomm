@props(['product'])
        <div class="col-md-5 p-2">
            <div href="#" class="card p-2 card-product-grid">
{{--                <a href="#" class="img-responsive img-wrap card-img d-block p-6 m-2">--}}
                    <div id="myCarousel" class="carousel slide w-70" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner ">
                            <div class="item active h-100 ">
                                <img src="{{asset("img/".$product->image1)}}"/>                            </div>

                            <div class="item">
                                <img  src="{{asset("img/".$product->image1)}}" />
                            </div>

                            <div class="item">
                                <img  src="{{asset("img/".$product->image2)}}"/>
                            </div>
                            <div class="item">
                                <img  src="{{asset("img/".$product->image4)}}"/>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>



{{--                    <img src="{{asset("img/".$product->image1)}}"/>--}}
{{--                    <img src="{{asset("img/".$product->image2)}}"/>--}}
{{--                    <img src="{{asset("img/".$product->image3)}}"/>--}}
{{--                    <img src="{{asset("img/".$product->image4)}}"/>--}}
{{--                </a>--}}
                <figcaption class="info-wrap">
                    <a href="/product/{{$product->id_lap}}"  class="title">{{$product->name}}</a>
                    <strong class="text-body">Details:</strong>
                    <p>{{$product->specification->ram}} </p>
                    <p>{{$product->specification->processor}} </p>
                    <p>{{$product->specification->hard}} </p>


                    <div class="price mt-1 text-primary">{{$product->price}}</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->

