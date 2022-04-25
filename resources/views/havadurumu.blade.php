
<!-- https://themewagon.com/themes/free-ecommerce-bootstrap-template-essence/# -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ODDK KLİMA A.Ş</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/havadurumu.css" class="rel">
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{route('index')}}"><img src="img/core-img/logo.jpg" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Ürünler</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Klima Çeşitleri</li>
                                        <li><a href="{{route('salontipi')}}">Salon Tipi Klima</a></li>
                                        <li><a href="{{route('tavantipi')}}">Tavan Tipi</a></li>
                                        <li><a href="{{route('panotipi')}}">Pano Klima</a></li>
                                        <li><a href="{{route('kasettipi')}}">Kaset Klima</a></li>
                                        <li><a href="{{route('splittipi')}}">Split Klima</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Markalar</li>
                                        <li><a href="samsung">Samsung</a></li>
                                        <li><a href="toshiba">Toshiba</a></li>
                                        <li><a href="vestel">Vestel</a></li>
                                        <li><a href="baymak">Baymak</a></li>
                                        <li><a href="daikin">Daikin</a></li>
                                        
                                    </ul>
                                    
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                           
                            <li><a href="kurumsal">Kurumsal</a></li>
                            <li><a href="iletisim">İletişim</a></li>
                            <li><a href="havadurumu">Hava Durumu</a></li>

                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
    
            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Arama için yazın">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <!-- @auth() -->
                   
                    <!-- @else -->
                     <a href="{{route('mgiris')}}"><img src="img/core-img/user.svg" alt=""></a>
                    <!-- @endauth -->
                   
                    
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>{{$sepet->count();}}</span></a>
                </div>
                
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    

    

    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

<!-- Cart Button -->
<div class="cart-button">
    <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>{{$sepet->count();}}</span></a>
</div>

<div class="cart-content d-flex">

    <!-- Cart List Area -->
    <div class="cart-list">
      
        <!-- Single Cart Item -->
         @foreach($sepet as $s)
         
         <div class="single-cart-item">
        
     
            <a href="#" class="product-image">
               
                <img src="{{$s->resim}}" class="cart-thumb" alt="">
                <!-- Cart Item Desc -->
                <div class="cart-item-desc">
                    <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                    <form method="post" action="{{route('sepet_kaldir')}}"  enctype="multipart/form-data">
                      @csrf
                    <h6>{{$s->urun_adi}}</h6>
                    <p class="color">Renk:{{$s->renk}}</p>
                    <p class="color">Adet:{{$s->adet}}</p>
                    <p class="color"> <button type="submit" class="form__button">Kayıt Ol</button></p>
                    <p class="price">{{$s->fiyat}} TL</p>
                    </form>
                </div> 
               
            </a>
          
        </div> @endforeach
    </div>

    <!-- Cart Summary -->
    <div class="cart-amount-summary">

        <h2>Özet</h2>
        <ul class="summary-table">
            
            <li><span>Kargo:</span> <span>30 TL</span></li>
            <li><span>Toplam:</span> <span>{{$sepet->sum('fiyat')+30;}} TL</span></li>
        </ul>
        <div class="checkout-btn mt-100">
            <a href="checkout.html" class="btn essence-btn">Siparişi Tamamla</a>
        </div>
    </div>
</div>
</div>

            <!-- Cart Summary -->
           
        </div>
    </div>

    <div class="app">
        <div class="header">
            <h1>Hava Durumu</h1>
            <input type="text" id="searchBar" placeholder="Sehir giriniz..">
        </div>
        <div class="content">
            <div class="city">Istanbul, TR</div>
            <div class="temp">15°C</div>
            <div class="desc">Gunesli</div>
            <div class="minmax">14°C / 19°C</div>
        </div>
    </div>
 <!-- ##### Footer Area Start ##### -->

 <footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="#"><img src="img/core-img/logo.jpg" alt=""></a>
                    </div>
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{route('salontipi')}}">Ürünler</a></li>
                            <li><a href="kurumsal">Kurumsal</a></li>
                            <li><a href="iletisim">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area mb-30">
                    <ul class="footer_widget_menu">
                        <li><a href="#">Sipariş durumu</a></li>
                        <li><a href="#">Nakliye ve teslimat</a></li>
                        <li><a href="#">Gizlilik Politikası</a></li>
                        <li><a href="#">Ödeme Seçenekleri</a></li>
                        <li><a href="#">Kılavuzlar</a></li>
                        <li><a href="#">Kullanım Şartı</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-end">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_heading mb-30">
                        <h6>Abone</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="mail" placeholder="E-Post Giriniz">
                            <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

<div class="row mt-5">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm hakları saklıdır</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
<script src="js/havadurumu.js"></script>

</body>

</html>


