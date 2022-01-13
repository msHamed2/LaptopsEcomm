<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="utf-8">
    <title>main-page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset("/storage/app/public/img/favicon.png")}}" rel="icon">
    <link href="{{asset("/storage/app/public/img/apple-touch-icon.png")}}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="resources/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="resources/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="resources/css/animate/animate.min.css" rel="stylesheet">
    <link href="resources/css/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="resources/css/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="resources/css/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="resources/css/style1.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: BizPage
      Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto" style="font-family: 'Open Sans Hebrew', sans-serif;">AL-ATTAR</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">


                <li><a href="help.php" style="font-size: 25px;padding:0 20px 0 20px;color: red;">ساعدني </a></li>

                <li class="menu-has-children"><a href=""  style="font-size: 20px;padding:0 20px 0 20px;width:130px">تواصل معنا </a>
                    <ul>

                        <li><a href="https://www.facebook.com/alattar.company.797/" class="facebook" style="font-size:20px"><i class="fa fa-facebook" style="font-size:30px"></i> facebook </a></li>
                        <li><a href="https://wa.link/mt8pni" class="twitter" style="font-size:20px"><i class="fa fa-whatsapp"  style="font-size: 30px"></i> whatsapp</a></li>

                        <li><a href="https://t.me/ALATARLABTOB2020" class="linkedin" style="font-size:20px"><i class="fa fa-telegram" style="font-size: 30px"></i> telegram</a></li>


                        <li> <a href="#" class="instagram"  style="font-size:20px"><i class="fa fa-instagram"  style="font-size: 30px"></i> instagram</a></li>





                    </ul>
                </li>

                <li><a href="offer.php"  style="font-size: 20px;padding:0 20px 0 20px">عروضنا اليومية </a></li>



                <li><a href="main.php"  style="font-size: 20px;padding:0 20px 0 20px">الرئيسية </a></li>






            </ul>

        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background">

                        <img src="{{asset('/storage/img/background/'.$background[0])}}" alt="">
                    </div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 style="font-size: 50px;color:#0088cc">
                                hello
                 {{$title1[0]}}
                            </h2>
                            <p style="font-size: 25px;width: 400px;" >{{$title2[1]}} </p>
                            <h1 style="opacity:0.6;color: white ">{{$title3[1]}} </h1>


                        </div>
                    </div>
                </div>

<!-

                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{asset('/storage/img/background/'.$background[1])}}"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 style="font-size:35px;color:white;text-shadow:2px 2px #ff8080">  {{$title1[1]}} </h2>
                            <h2 style="font-size:35px;color:#ff8080;text-shadow:2px 5px black" >   {{$title1[1]}} </h2>
                            <h1 style="opacity:1;color: white ;text-shadow:3px 5px black">  {{$title1[1]}} </h1>


                        </div>
                    </div>
                </div>
{{--todo here--}}





            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->



<main id="main">


    <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box">


                    <h5 style="text-align:center;color:#ccd9ff;"> لتصلك كل أسعار اللابتوبات بسهولة وجميع عروضنا اليومية اشترك بصفحتنا على التليغرام  </h5>

                    <h4 style="text-align:center" class="title"><a href="https://t.me/ALATARLABTOB2020" style="color:#4d79ff;font-size:23px"> اضغط هنا  </a></h4>
                    <h4 style="text-align: center;"><i class="fa fa-telegram" style="color: #4d79ff"></i> </h4>
                </div>

                <div class="col-lg-4 box box-bg">

                    <h5 style="text-align: right;color:#ccd9ff;"> اشترك بصفحتنا على الفيس و بوك احصل على حسومات تصل حتى  150,000 ل.س  </h5>
                    <h4 class="title" style="text-align: center;"><a href="https://www.facebook.com/alattar.company.797/" style="color:#4d79ff;font-size:23px"> اضغط هنا  </a></h4>

                    <h4 style="text-align: center;"> <i class="fa fa-facebook" style="color: #4d79ff"></i></h4>


                </div>

                <div class="col-lg-4 box">
                    <h5 style="text-align:right;color:#ccd9ff;">للمساعدة الفورية والاستفادة من خبرة الخبير التقني  تواصل على عالواتس اب  </h5>
                    <h4 class="title" style="text-align: center;"><a href="https://web.whatsapp.com/" style="color:#4d79ff;font-size:23px"> اضغط هنا  </a></h4>
                    <h4 style="text-align: center;"> <i class="fa fa-whatsapp" style="color: #4d79ff"></i></h4>
                </div>

            </div>
        </div>
    </section><!-- #featured-services -->

    <!--==========================
         Clients Section
       ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3> تصفح حسب الماركة  </h3>
            </header>

            <div class="owl-carousel clients-carousel">

                @foreach($Brands as $brand)

                        <a href="#">
                            <img src="{{asset("storage/img/".$brand->path_image)}}" style="width: 150px;height: 100px;border-style: solid;border-color:#ebebe0">
                        </a>
                    @endforeach
            </div>

        </div>
    </section><!-- #clients -->







    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title"> عروض هذا الأسبوع </h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">ALL</li>
                        <li data-filter=".filter-HP">HP </li>
                        <li data-filter=".filter-app">Dell</li>
                        <li data-filter=".filter-card">Asus</li>


                    </ul>
                </div>
            </div>

            <div class="row portfolio-container"  style="background-color: white">
                  @foreach($brands as $brand)
                      @foreach($brand->laptop as $lap)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-HP wow fadeInUp">
                        <div class="portfolio-wrap" style="box-shadow:0px 0px white">
                            <figure><img src="{{asset('./storage/img/laptop/'.$lap->image1)}}" class="img-fluid" alt="">
                                <a href="#" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="تكبير الصورة "><i class="ion ion-eye"></i></a>

                                <a href="#" class="link-details" title="التفاصيل "><i class="ion ion-android-open"></i></a> </figure>
                            <div class="portfolio-info">
                                <h4 style="color:black;">{{$lap->name}}</h4>

                                <p style="font-size: 28px;color:red"> {{$lap->price}}$</p>


                            </div>

                        </div>
                    </div>
                    @endforeach
                      @endforeach



{{--                ///////////////////////done--}}
{{--                <?php--}}

{{--                $sqlquary1= "SELECT * FROM brand WHERE name='hp'";--}}
{{--                $Brands1= mysqli_query($conection,$sqlquary1);--}}
{{--                while($row1=mysqli_fetch_array($Brands1))--}}
{{--                {--}}

{{--                    $a1=$row1['id_brand'];--}}

{{--                }--}}

{{--                $sqlquary2= "SELECT * FROM lap,specifications WHERE id_brand=$a1 AND lap.id_lap=specifications.id_lap AND type=1";--}}
{{--                $Brands2 = mysqli_query($conection,$sqlquary2);--}}

{{--                while($row2=mysqli_fetch_array($Brands2))--}}
{{--                {--}}

{{--                    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-HP wow fadeInUp">--}}
{{--              <div class="portfolio-wrap" style="box-shadow:0px 0px white">--}}
{{--              <figure><img src="http://'.$_SERVER['SERVER_NAME'].':8000/storage/'.$row2['image1'].'" class="img-fluid" alt="">--}}
{{--              <a href="http://'.$_SERVER['SERVER_NAME'].':8000/storage/'.$row2['image1'].'" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="تكبير الصورة "><i class="ion ion-eye"></i></a>--}}

{{--              <a href="details.php?product='.$row2['id_lap'].'" class="link-details" title="التفاصيل "><i class="ion ion-android-open"></i></a> </figure>--}}
{{--              <div class="portfolio-info">--}}
{{--              <h4 style="color:black;">'.$row2['name'].'</h4>--}}

{{--              <p style="font-size: 28px;color:red"> '.$row2['price'].'</p>--}}


{{--              </div>--}}

{{--                 </div>--}}
{{--                      </div>';--}}

//                }
//
//                $sqlquary3= "SELECT * FROM brand WHERE name='dell'";
//                $Brands3= mysqli_query($conection,$sqlquary3);
//                while($row3=mysqli_fetch_array($Brands3))
//                {
//                    $a2=$row3['id_brand'];
//
//                }
//                $sqlquary4=  "SELECT * FROM lap,specifications WHERE id_brand=$a2 AND lap.id_lap=specifications.id_lap And type=1";
//                $Brands4= mysqli_query($conection,$sqlquary4);
//
//                while($row4=mysqli_fetch_array($Brands4))
//                {
//
//                    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
//              <div class="portfolio-wrap"  style="box-shadow:0px 0px white">
//              <figure><img src="http://'.$_SERVER['SERVER_NAME'].':8000/storage/'.$row4['image1'].'" class="img-fluid" alt="">
//              <a href="http://'.$_SERVER['SERVER_NAME'].':8000/storage/'.$row4['image1'].'" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="تكبير الصورة "><i class="ion ion-eye"></i></a>
//
//              <a href="details.php?product='.$row4['id_lap'].'" class="link-details" title="التفاصيل "><i class="ion ion-android-open"></i></a> </figure>
//              <div class="portfolio-info">
//              <h4 style="color: black">'.$row4['name'].'</h4>
//
//              <p style="font-size: 28px;color:red"> '.$row4['price'].'</p>
//
//
//              </div>
//
//                 </div>
//                      </div>';
//
//                }
//
//                $sqlquary5= "SELECT * FROM brand WHERE name='asus'";
//                $Brands5= mysqli_query($conection,$sqlquary5);
//                while($row5=mysqli_fetch_array($Brands5))
//                {
//                    $a3=$row5['id_brand'];
//
//                }
//                $sqlquary6= "SELECT * FROM lap,specifications WHERE id_brand=$a3 AND lap.id_lap=specifications.id_lap AND type=1";
//                $Brands6= mysqli_query($conection,$sqlquary6);
//
//                while($row6=mysqli_fetch_array($Brands6))
//                {
//
{{--//                    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">--}}
{{--//              <div class="portfolio-wrap"  style="box-shadow:0px 0px white">--}}
{{--//              <figure><img src="http://'.$_SERVER['SERVER_NAME'].':8000/storage/'.$row6['image1'].'" class="img-fluid" alt="">--}}
{{--//              <a href="http://'.$_SERVER['SERVER_NAME'].':8000/storage/'.$row6['image1'].'" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="تكبير الصورة "><i class="ion ion-eye"></i></a>--}}
{{--//--}}
{{--//              <a href="details.php?product='.$row6['id_lap'].'" class="link-details" title="التفاصيل "><i class="ion ion-android-open"></i></a> </figure>--}}
{{--//              <div class="portfolio-info">--}}
{{--//              <h4 style="color: black">'.$row6['name'].'</h4>--}}
{{--//--}}
{{--//              <p style="font-size: 28px;color:red"> '.$row6['price'].'</p>--}}
{{--//--}}
{{--//--}}
{{--//              </div>--}}
{{--//--}}
{{--//                 </div>--}}
{{--//                      </div>';--}}
//
//
//
//                }
//
//
//                $sqlquary7= "SELECT * FROM brand WHERE name='lenovo'";
//                $Brands7= mysqli_query($conection,$sqlquary7);
//                while($row7=mysqli_fetch_array($Brands7))
//                {
//                    $a4=$row7['id_brand'];
//
//                }
//                $sqlquary8=  "SELECT * FROM lap,specifications WHERE id_brand=$a4 AND lap.id_lap=specifications.id_lap AND type=1";
//                mysqli_set_charset($conection,"utf8");
//                $Brands8= mysqli_query($conection,$sqlquary8);
//
//                while($row8=mysqli_fetch_array($Brands8))
//                {
{{--//--}}
{{--//                    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">--}}
{{--//              <div class="portfolio-wrap" style="box-shadow:0px 0px white">--}}
{{--//              <figure><img src="http://alattar.laptop-sy.com/storage/'.$row8['image1'].'" class="img-fluid" alt="">--}}
{{--//              <a href="http://alattar.laptop-sy.com/storage/'.$row8['image1'].'" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="تكبير الصورة "><i class="ion ion-eye"></i></a>--}}
{{--//--}}
{{--//              <a href="details.php?product='.$row8['id_lap'].'" class="link-details" title="التفاصيل "><i class="ion ion-android-open"></i></a> </figure>--}}
{{--//              <div class="portfolio-info">--}}
{{--//              <h4 style="color: black">'.$row8['name'].'</h4>--}}
{{--//--}}
{{--//              <p style="font-size: 28px;color:red"> '.$row8['price'].'</p>--}}
{{--//--}}
{{--//--}}
{{--//              </div>--}}
{{--//--}}
{{--//                 </div>--}}
{{--//                      </div>';--}}
{{--//                }--}}
{{--//--}}
{{--//--}}
{{--//                ?>--}}

            </div>

        </div>
    </section><!-- #portfolio -->





    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">

                <h3 style="font-size: 20px;font-weight:10px;color:black;"> تواصل معنا من خلال أي من قنوات الدعم التالية  </h3>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>العنوان  </h3>
                        <address> دمشق : البحصة  -مقابل  مركز خدمة المواطن للمحافظة  -أول محل من دخلة ساروجة  </address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>رقم الهاتف </h3>
                        <p><a href=""> 2311022 -- 2311021 (هاتف ) </a></p>
                        <p><a href=""> 0945681902 -- 0944554999  (واتس أب)</a></p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>البريد الالكتروني </h3>
                        <p><a href="https://alaa19jalal95@gmail.com">AL-Attar@laptop-sy.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">

                <form action="form.php" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="الاسم " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني " data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="اسم المنتج " data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="المشكلة التي واجهتك "></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" name="submit">ارسال </button></div>
                    <div style="display: none;" id="FormMessage">
                        تم إالاضافة بنجاح
                    </div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    </br></br>


    <!--==========================
     Team Section
   ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3 style="font-size: 28px">Accessories</h3>

            </div>
            <div class="row">

@foreach($accessories as $acc)
                <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset("./storage/img/Accessory/".$acc->path_img)}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4 style="font-size: 20px">{{$acc->name}}</h4>
                  <span  style="color:#00aaff;font-size: 30px">{{$acc->price}}</span>

                </div>
              </div>
            </div>
          </div>';

            </div>   </div>
    </section><!-- #team -->



    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
        <div class="container">


            <div class="facts-img">
                <img src="img/ima.png" alt="" class="img-fluid" style="width: 800px;height:500px">
            </div>

        </div>
    </section><!-- #facts -->
    <br><br><br><br>



    <!--==========================
      Clients Section
    ============================-->





{{--    <section id="testimonials" class="section-bg wow fadeInUp">--}}
{{--        <div class="container">--}}

{{--            <div class="owl-carousel testimonials-carousel">--}}

{{--                <?php--}}

{{--                $sqlquary10 = "SELECT * FROM media WHERE type=1";--}}
{{--                $Brands10= mysqli_query($conection,$sqlquary10);--}}

{{--                while ($row10=mysqli_fetch_array($Brands10)) {--}}
{{--                    echo'<div class="testimonial-item">--}}
{{--            <img src="img/j.jfif" class="testimonial-img" alt="" style="width: 80px;height: 80px">--}}
{{--            <h3 style="color: #cc0000;">'.$row10['title'].'</h3>--}}
{{--             <p style="color:black;font-size:18px">'.$row10['content'].'</p>--}}
{{--          </div>';--}}
{{--                }--}}

{{--                ?>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}



</main>


<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>للبحث عن المنتجات  </h4>
                    <p> أدخل اسم المنتج </p>

                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="ابحث ">
                    </form>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>معلومات </h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="offer.php">عروضنا اليومية </a></li>

                        <li><i class="ion-ios-arrow-right"></i> <a href="#">مساعدة </a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">اتصل بنا </a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>تواصل معنا  </h4>
                    <p style="font-size: 17px">
                        دمشق , سوق ساروجة  <br>
                        ساحة المحافظة <br>

                        <strong style="font-size: 15px"> 011-2311021</strong> : هاتف <br>
                        <strong style="font-size: 15px">00963-945681902</strong> : موبايل <br>
                    </p>

                    <div class="social-links">
                        <a href="https://wa.link/mt8pni" class="twitter"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/alattar.company.797/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://t.me/ALATARLABTOB2020" class="linkedin"><i class="fa fa-telegram"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>AL-ATTAR</h3>
                    <p><img src="img/lo.png" width="190px" height="160px"></p>
                </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            <strong>2021@ جميع الحقوق محفوظة لصالح  العطار </strong>
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
            -->

        </div>
    </div>
</footer><!-- #footer -->




</body>
</html>
