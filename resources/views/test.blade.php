<x-x-layout>

<!-- ========================= SECTION left nav MAIN ========================= -->
    <x-left-nav/>
<!-- ========================= SECTION MAIN END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-end">See all</a>
            <h3 class="section-title">Popular products</h3>
        </header><!-- sect-heading -->


        <div class="row">
            @foreach($brands as $brand)
            <div class="col-md-3 p-2">
                <div href="#" class="card p-2 card-product-grid">
                    <a href="#" class="img-responsive img-wrap card-img d-block p-6 m-2"> <img src="{{asset("storage/img/".$brand->path_image)}}"/> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Just another product name</a>
                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div> <!-- col.// -->
            @endforeach
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg" alt="ez"/> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Some item name here</a>--}}
{{--                        <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Great product name here</a>--}}
{{--                        <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Just another product name</a>--}}
{{--                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/5.jpg"> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Just another product name</a>--}}
{{--                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/6.jpg"> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Some item name here</a>--}}
{{--                        <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/7.jpg"> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Great product name here</a>--}}
{{--                        <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
{{--            <div class="col-md-3">--}}
{{--                <div href="#" class="card card-product-grid">--}}
{{--                    <a href="#" class="img-wrap"> <img src="assets/images/items/9.jpg"> </a>--}}
{{--                    <figcaption class="info-wrap">--}}
{{--                        <a href="#" class="title">Just another product name</a>--}}
{{--                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->--}}
{{--                    </figcaption>--}}
{{--                </div>--}}
{{--            </div> <!-- col.// -->--}}
        </div> <!-- row.// -->

    </div><!-- container // -->
</section>

<!-- ========================= SECTION  END// ========================= -->
    <section class="section-name padding-y-sm">
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                    @foreach($brand->laptop as $lap)
<x-product :product="$lap"/>
{{--                    <div class="col-md-3">--}}
{{--                        <div href="#" class="card card-product-grid">--}}
{{--                            <a href="#" class="img-wrap  d-block p-6 m-2"> <img src="{{asset("storage/img/".$lap->image1)}}"/> </a>--}}
{{--                            <figcaption class="info-wrap">--}}
{{--                                <a href="/product/{{$lap->id_lap}}" class="title">{{$lap->name}}</a>--}}
{{--                                <p class="title">{{$lap->specification->processor}}</p>--}}

{{--                                <div class="price mt-1">{{$lap->price}}</div> <!-- price-wrap.// -->--}}
{{--                            </figcaption>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                        <!-- col.// -->
                @endforeach
                @endforeach
            </div>
        </div>

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
    <div class="container">

{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <h3>Download app demo text</h3>--}}
{{--                <p>Get an amazing app  to make Your life easy</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 text-md-end">--}}
{{--                <a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>--}}
{{--                <a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>--}}
{{--            </div>--}}
{{--        </div> <!-- row.// -->--}}
{{--    </div><!-- container // -->--}}
</section>
<!-- ========================= SECTION  END// ======================= -->



<!-- ========================= FOOTER ========================= -->
</x-x-layout>
