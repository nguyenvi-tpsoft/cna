<!DOCTYPE html>
<<<<<<< HEAD
<html lang="vn">
=======
<html lang="zxx">
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png"><!-- Goggle Fonts-->
<<<<<<< HEAD
=======
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"><!-- Libs CSS -->
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
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
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}">
=======
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/sweetalert.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/toastr.min.css')}}">


    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.min.css')}}" media="screen">
=======
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
    <link rel="icon" href="{{asset('public/frontend/img/logo.jpg')}}" type="image/gif" />
    <title> Hội công chứng viên Cần Thơ</title>


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
                                        <img src="{{asset('public/frontend/img/logo.png')}}" alt="">

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
                                        <ul class="megamenu">
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
<<<<<<< HEAD

=======
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </header>
    <main>
        @yield('content')
<<<<<<< HEAD
=======

>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
    </main>
    <footer>
        <div class="footer">

            <div class="newsletter" style="background-color: #1e551e">

                <div class="container">
                    <div class="row">
<<<<<<< HEAD
                        <div class="col-12">
                            <div class="title clearfix">
                                <div class=" page-title color">
                                    <div class="title-icon text-left footer">
                                        <h2>Hội công chứng viên Cần Thơ</h2>
=======
                        <div class="col-lg-5 col-md-12">
                            <div class="title clearfix">
                                <div class=" page-title color">
                                    <div class="title-icon text-left">
                                        <h2 class="title-h2" style="width: 35rem;
                                                font-family: auto;
                                                color: white;">Hội công chứng viên Cần Thơ</h2>
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
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
                                        <li class="d-flex bg-icon"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span> Số 1A Trần Khánh Dư, Xuân Khánh, Ninh Kiều, Cần Thơ .</span>
                                        </li>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-phone" aria-hidden="true"></i></span><span>02923.832.213</span>
                                        </li>
                                        <li class="d-flex bg-icon"><span><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span><span>hoicongchungct@gmail.com</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30">
=======
                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30" style="margin-left: 4rem">
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
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
                        </div>`

<<<<<<< HEAD
                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30">
=======
                        <div class="col-lg-3 col-md-6 col-sm-6 mg-bottom-30" style="margin-left: 4rem">
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
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

        </div>
    </footer>
    </div><!-- Back-To-Top Button -->
    <div class="back-to-top"><a href="#"><i class="fa fa-long-arrow-up"></i></a></div><!-- Page Loader -->
<<<<<<< HEAD
    <div id="page-preloader">
=======
    <!-- <div id="page-preloader">
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
<<<<<<< HEAD
    </div>
=======
    </div> -->
>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
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
<<<<<<< HEAD
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
=======


>>>>>>> 778f79fe7660f28b919e59743f96418e366383dc
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