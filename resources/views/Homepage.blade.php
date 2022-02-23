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
                    <div class="container col-3 ">
                        <div class="card p-2 card-product-grid">
                            <a href="#" class="  img-wrap p-6 m-2 d-block"> <img
                                    src="{{asset("img/".$brand->path_image)}}" alt="brand img"/> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">{{$brand->name}}</a>
                                {{--                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->--}}
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
                        {{--<x-product :product="$lap"/>--}}





                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid product_data">
                                <a href="#" class="img-wrap  d-block p-6 m-2"> <img
                                        src="{{asset("img/".$lap->image1)}}"/> </a>
                                <figcaption class="info-wrap">
                                    <a href="/product/{{$lap->id_lap}}" class="title">{{$lap->name}}</a>
                                    <strong class="text-body">Details:</strong>
                                    <p>{{$lap->specification->ram}} </p>
                                    <p>{{$lap->specification->processor}} </p>
                                    <p>{{$lap->specification->hard}} </p>
                                    <p>{{$lap->price}} </p>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <input type="hidden" class="id_lap" value="{{$lap->id_lap}}"> <!-- Your Product ID -->
                                    <strong class="text-body">Views: </strong>
                                    <p>{{$lap->views}} </p>
                                    <a class="m-2" href="add-to-favorite">
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="fas fa-magic"></i>
                                        </button>
                                        <button type="button" class="add-to-cart-btn btn btn-primary">Add to Favorite</button>
                                    </a>
                                </figcaption>
                            </div>
                        </div>
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
<script>
    $(document).ready(function () {
        $('.add-to-cart-btn').click(function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var lap_id = $(this).closest('.product_data').find('.id_lap').val();
            var quantity = $(this).closest('.product_data').find('.qty-input').val();

            $.ajax({
                url: "/add",
                method: "POST",
                data: {
                    'quantity': '2',
                    'lap_id': lap_id,
                },
                success: function (response) {
                    alertify.set('notifier','position','top-right');
                    alertify.success(response.status);
                },
            });
        });
    });
    // new
    // $(document).ready(function () {
    //     cartload();
    // });
    //
    // function cartload()
    // {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //
    //     $.ajax({
    //         url: '/load-cart-data',
    //         method: "GET",
    //         success: function (response) {
    //             $('.basket-item-count').html('');
    //             var parsed = jQuery.parseJSON(response)
    //             var value = parsed; //Single Data Viewing
    //             $('.basket-item-count').append($('<span class="badge badge-pill red">'+ value['totalcart'] +'</span>'));
    //         }
    //     });
    // }
</script>
