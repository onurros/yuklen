<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Aranacak Kelimeyi Giriniz..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/genu.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">{{$admin->adi}} {{$admin->soyadi}}</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <form action="{{route('admin_islem')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="menuu">
                            <button name="ortak" value="Anasayfa" type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_paneli"
                                aria-expanded="false" required>
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Anasayfa</span>
                            </button>
                        </li>
                        <li class="menuu">
                            
                            <button name="ortak" value="Profil" type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_ekle"
                                aria-expanded="false" required>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profil </span>
                            </button>
                        </li>

                        <li class="menuu">
                            <button name="ortak" value="Admin Ekle" type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_ekle"
                                aria-expanded="false">
                                <i class="fas fa-plus" aria-hidden="true"></i>
                                <span class="hide-menu">Admin Ekle</span>
                             </button>   
                        </li>

                        <li class="menuu">
                            <button name="ortak" value="Ürün Ekle" type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="urun_ekle"
                                aria-expanded="false">
                                <i class="fas fa-plus" aria-hidden="true"></i>
                                <span class="hide-menu">Ürün Ekle</span>
                            </button>
                        </li>

                        <li class="menuu">
                            <button name="ortak" value="Tablolar" type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="tablo"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Tablolar</span>
                            </button>
                        </li>
                        
                        <li class="menuu">
                            <button type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">İkonlar</span>
                        </button>
                        </li>
                        <li class="menuu">
                            <button type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Google Map</span>
                            </button>
                        </li>
                        <li class="menuu">
                            <button type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Blank Page</span>
                            </button>
                        </li>
                        <li class="menuu">
                            <button type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </button>
                        </li>
                        <li class="menuu">
                            <button name="ortak" value="cikis" type="submit" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fas fa-power-off" aria-hidden="true"></i>
                                <span class="hide-menu">Çıkış Yap</span>
                            </button>
                        </li>
                     
                    </ul>
                    <input type="hidden" name="admin" value="{{$admin->id}}">
                </form>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Ürün Ekleme Sayfası
                        </h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Ürün Ekleme Sayfası</a></li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <form method="post" action="urunkayitpost" class="login-form" enctype="multipart/form-data">
                    @csrf
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- Row -->

                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Ürün Adı</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="urun_adi" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Isıtma Kapasitesi</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="ikapasite" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Soğutma Kapasitesi</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="skapasite" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enerji Sınıfı</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="esinifi" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Ürün Tipi</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none p-0 border-0 form-control-line" name="utip" required>
                                            @foreach($tip as $t)    
                                            <option>{{$t->tur_adi}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Ses Seviyesi</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="ses_seviyesi" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Renk</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="renk" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Markalar</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none p-0 border-0 form-control-line" name="marka" required>
                                            @foreach($marka as $m)    
                                            <option>{{$m->marka_adi}}</option>
                                            @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">stok</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="stok" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Fiyat</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="fiyat" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Resim1</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="r1" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Resim2</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="r2" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Resim3</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="r3" class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                                <input type="hidden" name="admin" value="{{$admin->id}}">
                                            <button type="submit" class="btn btn-success">Ürün EKle</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Column -->

                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>