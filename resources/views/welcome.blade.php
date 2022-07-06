<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png"><!-- Goggle Fonts-->
    <link rel="stylesheet" href="{{asset('public/frontend/libs/boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/flaticon/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/slider-range/css/jslider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/libs/font-cs/cs.css')}}"><!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.min.css')}}" media="screen">
    <link rel="icon" href="{{asset('public/frontend/img/logo_item.ico')}}" />
    <title>HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ</title>

    <meta name="description" content="CanTho Notary Association" />
    <meta name="keywords" content="công chứng, cần thơ, cna, hội công chứng, pháp luật, văn bản, điều lệ, điểm tin, tin tức" />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ" />
    <meta itemprop="description" content="CanTho Notary Association" />
    <meta itemprop="image" content="{{asset('public/frontend/img/bg_seo.jpg')}}" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content="cna.org.vn" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ" />
    <meta property="og:description" content="CanTho Notary Association" />
    <meta property="og:image" content="{{asset('public/frontend/img/bg_seo.jpg')}}" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ" />
    <meta name="twitter:description" content="CanTho Notary Association" />
    <meta name="twitter:image" content="{{asset('public/frontend/img/bg_seo.jpg')}}" />
</head>


<body class="home-1">
    <div class="all">
        <header class="header">
            <div id="top-header">
                <div class="main-header">
                    <div class="mg-left-right">
                        <div class="row">
                            <div class="col-lg-2 col-xl-3 col-md-12">
                                <div class="logo_vpct">
                                    <div id="menu_mb_control" class="menu_mb_control">
                                        <img src="{{asset('public/frontend/img/list.png')}}" alt="">

                                    </div>
                                    <a href="{{URL::to('/trang-chu')}}">
                                        <img class="logo" src="{{asset('public/frontend/img/logo.png')}}" alt="">

                                    </a>
                                    <div id="index_menu_mb" class="index_menu_mb">
                                        <ul>
                                            <li class="dropdown">
                                                <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                                            </li>
                                            <li class="dropdown ">
                                                <a onclick="Menulv2(this)" href="#">Giới thiệu
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="{{URL::to('/gioi-thieu-chung')}}">Giới thiệu chung</a></li>
                                                        <li><a href="{{URL::to('/so-do-to-chuc')}}">Tổ chức bộ máy</a></li>
                                                        <li><a href="{{URL::to('quyet-dinh-thanh-lap')}}">Quyết định thành lập</a></li>
                                                        <li><a href="{{URL::to('dieu-le')}}">Điều lệ</a></li>
                                                    </ul>
                                                </div>


                                            </li>
                                            <li class="dropdown blog-fullwidth">
                                                <a href="{{URL::to('diem-tin')}}">Điểm tin</a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{URL::to('van-ban')}}">Văn bản </a>
                                            </li>

                                            <li class="dropdown ">
                                                <a onclick="Menulv2(this)" href="#">Hội viên
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="{{URL::to('/danh-sach-hoi-vien')}}">Danh sách hội viên</a></li>
                                                        <li><a href="{{URL::to('/danh-sach-vpcc')}}">Danh sách TCHNCC</a></li>
                                                        <li><a href="{{URL::to('bieu-mau-ccv')}}">Biểu mẫu CCV</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{URL::to('/thu-vien')}}">Thư viện </a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{URL::to('lien-he')}}">Liên Hệ</a>
                                            </li>
                                            <li>
                                                <div class="header-block search-block popup-over pull-left">
                                                    <div data-toggle="dropdown" class="popup-title"><a href="#" title="Search">
                                                            <i class="flaticon-search" style="color: #1e551e"></i></a></div>
                                                    <div class="popup-content">
                                                        <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="input-group"><input class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                                                <div class="input-group-btn">
                                                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Search</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-xl-9 col-md-12">
                                <div class="index-menu">
                                    <nav class="main-nav">
                                        <ul class="header_lienhe">
                                            <li>
                                                <img src="{{asset('public/frontend/img/icon_map.png')}}" alt="">
                                                <p>296 Đường 30/4, Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                                            </li>
                                            <li>
                                                <img src="{{asset('public/frontend/img/icon_phone.png')}}" alt="">
                                                <p>02923.832.213</p>
                                            </li>
                                            <li>
                                                <img src="{{asset('public/frontend/img/icon_mail.png')}}" alt="">
                                                <p>hoicongchungct@gmail.com</p>
                                            </li>
                                        </ul>
                                        <ul class="megamenu menu_main">
                                            <li class="dropdown">
                                                <a href="{{URL::to('/trang-chu')}}">
                                                    Trang chủ
                                                </a>
                                            </li>
                                            <li class="dropdown ">
                                                <a href="#">Giới thiệu
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="{{URL::to('/gioi-thieu-chung')}}">Giới thiệu chung</a></li>
                                                        <li><a href="{{URL::to('/so-do-to-chuc')}}">Tổ chức bộ máy</a></li>
                                                        <li><a href="{{URL::to('quyet-dinh-thanh-lap')}}">Quyết định thành lập</a></li>
                                                        <li><a href="{{URL::to('dieu-le')}}">Điều lệ</a></li>
                                                    </ul>
                                                </div>


                                            </li>
                                            <li class="dropdown blog-fullwidth"><a href="{{URL::to('diem-tin')}}">Điểm tin</a>
                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('van-ban')}}">Văn bản </a>
                                            </li>


                                            <li class="dropdown ">
                                                <a href="#">Hội viên
                                                    <i class="fa fa-angle-down d-xs-none"></i></a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a href="{{URL::to('/danh-sach-hoi-vien')}}">Danh sách hội viên</a></li>
                                                        <li><a href="{{URL::to('/danh-sach-vpcc')}}">Danh sách TCHNCC</a></li>
                                                        <li><a href="{{URL::to('bieu-mau-ccv')}}">Biểu mẫu CCV</a></li>
                                                    </ul>
                                                </div>


                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('/thu-vien')}}">Thư viện </a>

                                            </li>

                                            <li class="dropdown"><a href="{{URL::to('lien-he')}}">Liên Hệ</a>

                                            </li>
                                            <li>
                                                <div class="header-block search-block popup-over pull-right">
                                                    <div data-toggle="dropdown" class="popup-title"><a href="#" title="Search">
                                                            <i class="flaticon-search" style="color: #1e551e"></i></a></div>
                                                    <div class="popup-content">
                                                        <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="input-group"><input class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                                                <div class="input-group-btn">
                                                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Search</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer">

            <div class="newsletter" style="background-color: #1e551e">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title clearfix">
                                <div class=" page-title color">
                                    <div class="title-icon text-left footer">
                                        <h2>HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom pd-top-bottom">
                <div class="container full-mobile">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 mg-bottom-30">
                            <div class="item contact-us">
                                <div class="item-content">
                                    <div class="sub-title">
                                        <h4 class="title-black">Liên hệ</h4>
                                    </div>
                                </div>
                                <div class="content">

                                    <ul>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span>296 Đường 30/4, Xuân Khánh, Ninh Kiều, Cần Thơ</span>
                                        </li>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-phone" aria-hidden="true"></i></span><span>Thư ký hội: Nguyễn Thu Hà: 0907 981 060
                                            </span>
                                        </li>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span><span>hoicongchungct@gmail.com</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30">
                            <div class="item contact-us">
                                <div class="item-content">
                                    <div class="sub-title">
                                        <h4 class="title-black">Đăng ký nhận tin</h4>

                                    </div>
                                    <form method="post" action="{{URL::to('/dang-ky-nhan-tin')}}" class="new-review-form" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="input-group">
                                            <input class="search-query form-control" type="text" name="EMAIL_KHACH" placeholder="Email" autocomplete="off">
                                            <div class="input-group-btn">
                                                <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e">Đăng ký</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30">
                            <div class="item contact-us">
                                <div class="item-content">
                                    <div class="sub-title">
                                        <h4 class="title-black">Liên kết hữu ích</h4>

                                    </div>
                                    <form method="post" action="{{URL::to('/dang-ky-nhan-tin')}}" class="new-review-form" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="input-group">
                                            <select class="form-control " id="lien-ket" style="color: #8b8b99">
                                                <option value="" style="color: #8b8b99">-- Liên kết hữu ích --</option>
                                                @foreach($lienket as $key=>$lk)

                                                <option value="{{$lk->LINK_LKWEB}}">

                                                    {{$lk->TEN_LKWEB}}

                                                </option>

                                                @endforeach


                                            </select>


                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright" style="text-align: center;">
                    <p>Copyright by Hội Công chứng viên TP. Cần Thơ © 2022</p>
                </div>
            </div>

        </div>
    </footer>
    </div><!-- Back-To-Top Button -->
    <div class="back-to-top"><a href="#"><i class="fa fa-long-arrow-up"></i></a></div><!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <script src="{{asset('public/frontend/libs/jquery/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/owl.carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('public/frontend/libs/boostrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/boostrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('public/frontend/libs/jquery.elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/tmpl.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/draggable-0.1.js')}}"></script>
    <script src="{{asset('public/frontend/libs/slider-range/js/jquery.slider.js')}}"></script>
    <script src="{{asset('public/frontend/libs/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/libs/jquery.countdown/jquery.countdown.js')}}"></script>
    <script src="{{asset('public/frontend/libs/imagesloaded/imagesloaded.pkgd.js')}}"></script><!-- Template JS -->
    <script src="{{asset('public/frontend/js/custom.js')}}"></script>

    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

    <script src="{{asset('public/frontend/js/toastr.min.js')}}"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $("#menu_mb_control").click(function() {
            $("#index_menu_mb").toggle();
        });
    </script>
    <script>
        function Menulv2(e) {
            $(e).parent().find('.dropdown-menu').toggle();
        }
    </script>
    <script>
        $(function() {
            // bind change event to select
            $('#lien-ket').on('change', function() {
                var url = $(this).val(); // get selected value
                if (url) { // require a URL
                    // window.location = url; // redirect
                    window.open(url); // redirect
                }
                return false;
            });
        });
    </script>



</body>

</html>