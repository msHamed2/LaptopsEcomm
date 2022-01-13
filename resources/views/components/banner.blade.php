@props(['banners'])
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
            <img style="height:300px ; width: 100%"  src="{{(asset("storage/img/".$banners[0]->path_image))}}" height="100" alt="Los Angeles">
        </div>

        <div class="item">
            <img style="height:300px; width: 100%" src="{{(asset("storage/img/".$banners[1]->path_image))}}" height="100" alt="Chicago">
        </div>

        <div class="item">
            <img style="height:300px;width: 100%" src="{{(asset("storage/img/".$banners[2]->path_image))}}" height="100" alt="New York">
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
