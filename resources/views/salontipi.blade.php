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
                    <a href="mgiris"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>{{$sepet->count();}}</span></a>
                </div>
            </div>

        </div>
    </header>

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
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="baslik">
                        <h2>SALON TİPİ KLİMA</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Ürün Tipleri</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="{{route('salontipi')}}">Salon Tipi Klima</a></li>
                                            <li><a href="{{route('tavantipi')}}">Tavan Tipi</a></li>
                                            <li><a href="{{route('panotipi')}}">Pano Klima</a></li>
                                            <li><a href="{{route('kasettipi')}}">Kaset Klima</a></li>
                                            <li><a href="{{route('splittipi')}}">Split Klima</a></li>

                                        </ul>
                                    </li>
                                    <!-- Single Item -->

                                </ul>
                            </div>
                        </div>

                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Markalar</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Toshiba</a></li>
                                            <li><a href="#">Vestel</a></li>
                                            <li><a href="#">Baymak</a></li>
                                            <li><a href="#">Daikin</a></li>

                                        </ul>
                                    </li>
                                    <!-- Single Item -->

                                </ul>
                            </div>
                        </div>
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Soğutma Kapasitesi</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="#">24000 ve Üzeri</a></li>
                                            <li><a href="#">24000</a></li>
                                            <li><a href="#">23000</a></li>
                                            <li><a href="#">22000</a></li>
                                            <li><a href="#">21000</a></li>
                                            <li><a href="#">21000 ve altı</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->

                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filtrele</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Fiyat</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="5000" data-max="50000" data-unit="TL" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="5000" data-value-max="50000" data-label-result="Aralık:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Aralık: 5.000 TL - 50.000 TL</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>{{$urunler->count();}}</span> bulunan ürünler</p>
                                        
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sırala:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">En Çok Satılan</option>
                                                <option value="value">Yeni Eklenenler</option>
                                                <option value="value">Fiyat: 0TL - 10.000TL</option>
                                                <option value="value">Fiyat: 10.000TL - 100.000TL</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                        
                        @foreach($urunler as $u)
                            <!-- Single Product -->
                            
                            <div class="col-12 col-sm-6 col-lg-4">
                                <form method="post" action="{{route('sepete_ekle')}}"  enctype="multipart/form-data">
                                    @csrf
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{$u->resim1_url}}" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="{{$u->resim2_url}}" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>{{$u->renk}}</span>
                                        <a href="single-product-details.html">
                                            <h6>{{$u->urun_adi}}</h6>
                                        </a>
                                        <p class="product-price">{{$u->fiyat}} TL</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                            <input type="hidden" name="id" value="{{$u->urun_id}}" required>
                                            <input type="hidden" name="adi" value="{{$u->urun_adi}}" required>
                                            <input type="hidden" name="fiyat" value="{{$u->fiyat}}" required>
                                            <input type="hidden" name="resim" value="{{$u->resim1_url}}" required>
                                            <input type="hidden" name="renk" value="{{$u->renk}}" required>
                                            <input type="hidden" name="ortak" value="salon" required>
                                                <button class="btn essence-btn">Sepete Ekle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></form>
                            </div>
                            @endforeach

                            <!-- Single Product -->


                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

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
                                <li><a href="salontipi">Ürünler</a></li>
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
                            <form method="post" action=""  enctype="multipart/form-data">
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
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Tüm hakları saklıdır</a>
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

</body>

</html>