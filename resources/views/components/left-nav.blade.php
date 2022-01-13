@props(['banners'])
<section class="section-main bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <nav class="card">
                    <ul class="menu-category">
                        <li><a href="#">Best sales</a></li>
                        <li><a href="#">accsosires</a></li>
                        <li><a href="#">laptops</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Technologies</a></li>
                        <li><a href="#">Digital goods</a></li>
                        <li class="has-submenu"><a href="#">More items</a>
                            <ul class="submenu">
                                <li><a href="#">Submenu name</a></li>
                                <li><a href="#">Great submenu</a></li>
                                <li><a href="#">Another menu</a></li>
                                <li><a href="#">Some others</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside> <!-- col.// -->
            <div class="col-md-9">
                <x-banner :banners="$banners"/>
{{--                <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--                    <!-- Indicators -->--}}
{{--                    <ol class="carousel-indicators">--}}
{{--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                    </ol>--}}

{{--                    <!-- Wrapper for slides -->--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <div class="item active">--}}
{{--                            <img src="{{asset("storage/img/".$banners[0]->path_image)}}" alt="Los Angeles" style="width:100%;">--}}
{{--                        </div>--}}
{{--                        @foreach($banners->skip(1) as $ban)--}}

{{--                        <div class="item">--}}
{{--                            <img src="{{asset("storage/img/".$ban->path_image)}}" alt="Chicago" style="width:100%;">--}}
{{--                        </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}

{{--                    <!-- Left and right controls -->--}}
{{--                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
{{--                        <span class="glyphicon glyphicon-chevron-left"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                    <a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
{{--                        <span class="glyphicon glyphicon-chevron-right"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                ////done--}}
{{--                <article class="banner-wrap container row-cols-2">--}}
{{--                    @foreach($banners as $ban)--}}
{{--                    <img src="{{asset("storage/img/".$ban->path_image)}}" class="w-100 row-cols-2  rounded">--}}
{{--                    @endforeach--}}
{{--                </article>--}}
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container //  -->
</section>


