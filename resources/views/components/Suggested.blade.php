@props(['laptops'])
<div class="col-md-10">
<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner" style="padding: 1em;">
        <div class="carousel-item active">
            <div class="card" style="margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;">

                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;">
                    <img style=" max-height: 100%;max-width: 100%; padding: 12px;" src="{{asset('img/'.$laptops[0]->image1)}}" class="d-block w-100" alt="..."></div>
                <div class="card-body">
                        <h5 class="card-title">{{$laptops[0]->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go to details</a>
                </div>
            </div>
        </div>
        @foreach($laptops as $lap)
        <div class="carousel-item">
            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">
                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;">
                    <img style=" max-height: 100%" src="{{asset('img/'.$lap->image1)}}" class="d-block w-100" alt="..."></div>
                <div class="card-body">
                    <h5 class="card-title">{{$lap->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 3</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 4</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 5</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 6</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 7</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 8</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="card" style="margin: 0 0.5em; box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);border: none;">--}}
{{--                <div class="img-wrapper" style=" max-width: 100%; height: 13em; display: flex; justify-content: center;align-items: center;"><img src="..." class="d-block w-100" alt="..."></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title 9</h5>--}}
{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                        card's content.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <button class="carousel-control-prev" style=" background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
    top: 75%;

  transform: translateY(-50%);" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" style=" background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 75%;
  transform: translateY(-50%);" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<script>
    var multipleCardCarousel = document.querySelector(
        "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
        });
        var carouselWidth = $(".carousel-inner")[0].scrollWidth;
        var cardWidth = $(".carousel-item").width();
        var scrollPosition = 0;
        $("#carouselExampleControls .carousel-control-next").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 4) {
                scrollPosition += cardWidth;
                $("#carouselExampleControls .carousel-inner").animate(
                    { scrollLeft: scrollPosition },
                    600
                );
            }
        });
        $("#carouselExampleControls .carousel-control-prev").on("click", function () {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                $("#carouselExampleControls .carousel-inner").animate(
                    { scrollLeft: scrollPosition },
                    600
                );
            }
        });
    } else {
        $(multipleCardCarousel).addClass("slide");
    }
</script>
