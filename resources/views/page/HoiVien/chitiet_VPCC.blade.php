@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><a href="{{URL::to('/danh-sach-vpcc')}}"><span style="font-family: 'FontAwesome'; color: white">Tổ chức hành công chứng</span></a>
                    </li>

                    <li class="breadcrumb-sep">/</li>
                    @foreach($ten as $key=>$ten)
                    <li><span style="font-family: 'FontAwesome'; color: #ffff">{{$ten->TEN_VPCC}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section about">
    <div class="container">
        <div class="section main-contact-us">
            <div class="section">
                <div class="row">
                    @foreach($vpcc as $key=>$vp)
                    <div class="col-md-7 col-sm-12 m-b-30">
                        <div class="chitiet_vpcc_img">
                            <img style="border-radius: 5px" src="{{URL::to('public/upload/'.$vp->ANH_VPCC)}}">
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="page-title color">
                            <div class="title title-icon">
                                <h2 style="margin: 0;">{{$vp->TEN_VPCC}} </h2>
                            </div>
                        </div>

                        <div class="header-contact" style="color: black">
                            <div class="col padding-0">
                                <div class="item d-flex">
                                    <div class="contact-content">
                                        <p style=" font-size: 20px; font-family: 'Flaticon';"> {!!$vp->THONGTIN_VPCC!!}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    @endforeach
                </div>
            </div>

        </div>

    </div>


    <div class="title text-center">
        <div class="page-title chitietcpvc">
            <h2>TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG KHÁC</h2>
        </div>
    </div>

    <div class="section blog-news">
        <div class="container">

            <div class="feature-products tab-content">

                <div class="block-content">
                    <div style="display: flex; flex-wrap: wrap;">
                        @foreach($vpcc1 as $key=>$vp)

                        <div class="row ttchncc_item" onclick='location.href="{{URL::to("chi-tiet-vpcc/".$vp->ID_VPCC)}}"'>
                            <div class="product-image-container">
                                <img src="{{asset('public/frontend/img/logo_item.png')}}" alt="img">
                            </div>
                            <div class="content-right" style="color: black">
                                <a style="color:black" href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}" style="font-family: emoji; color: black; font-size: 18px">
                                    {{$vp->TEN_VPCC}}</a>
                            </div>
                        </div>


                        @endforeach

                    </div>


                </div>

            </div>


        </div>
    </div>

</div>





@endsection