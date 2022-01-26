<x-x-layout>

<!-- ========================= SECTION left nav MAIN ========================= -->
    <x-left-nav :banners="$back"/>
<!-- ========================= SECTION MAIN END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-end">See all</a>
            <h3 class="section-title">Popular Brands :</h3>
        </header><!-- sect-heading -->


        <div class="row">
            @foreach($brands as $brand)
            <div class="container col-5 ">
                <div class="card p-2 card-product-grid">
                    <a href="#" class="  img-wrap p-6 m-2 d-block"> <img src="{{asset("img/".$brand->path_image)}}"alt="brand img" /> </a>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">{{$brand->name}}</a>
                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div> <!-- col.// -->
            @endforeach

        </div> <!-- row.// -->

    </div><!-- container // -->
</section>

<!-- ========================= SECTION  END// ========================= -->
    <section class="section-name padding-y-sm">
        <div class="container">

            <header class="section-heading">
                <a href="#" class="btn btn-outline-primary float-end">See all</a>
                <h3 class="section-title">Popular products</h3>
            </header><!-- sect-heading -->
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
    </div>
</section>
<!-- ========================= SECTION  END// ======================= -->


</section>
<!-- ========================= FOOTER ========================= -->
</x-x-layout>
