@props(['product'])
        <div class="col-md-3 p-2">
            <div href="#" class="card p-2 card-product-grid">
                <a href="#" class="img-responsive img-wrap card-img d-block p-6 m-2"> <img src="{{asset("storage/img/".$product->image1)}}"/> </a>
                <figcaption class="info-wrap">
                    <p href="#" class="title">{{$product->name}}</p>
                    <strong>Details:</strong>
                    <p>{{$product->specification->ram}} </p>
                    <p>{{$product->specification->processor}} </p>
                    <p>{{$product->specification->hard}} </p>


                    <div class="price mt-1">{{$product->price}}</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->

