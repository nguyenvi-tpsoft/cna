@extends('welcome')
@section('content')



<div id="tiva-slideshow" class="nivoSlider">
    <a href="#"><img class="img-fluid" src="{{asset('public/frontend/img/bg1.jpeg')}}" title="#caption1" alt="Slideshow image">
    </a>

    <a href="#"><img class="img-fluid" src="{{asset('public/frontend/img/bg2.jpg')}}" title="#caption1" alt="Slideshow image">
    </a>

    <a href="#"><img class="img-fluid" src="{{asset('public/frontend/img/bg3.jpg')}}" title="#caption1" alt="Slideshow image">
    </a>

</div>

<section>
    <div class="section about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title diemtin">
                    <h2>ĐIỂM TIN </h2>
                </div>
            </div>


            <div class="container-full">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="item-img img-left">
                            @foreach($diemtin1 as $key=>$dt)
                            <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}" title="">
                                <img style="border-radius: 5px;width: 100%;" src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}" alt="img">
                            </a>
                            <div class="item-content">
                                <div class="sub-title">
                                    <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}">
                                        <h4 class="no-ater main">{{$dt->TIEUDE_DT}}</h4>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="title clearfix">

                            <div class="group-store">

                                <div class="index-core-group flex-center clearfix d-flex align-items-center">

                                    <div class="row" style=" display: block;">
                                        @foreach($diemtin as $key=>$dt)
                                        <div class="index-core-group flex-center clearfix  align-items-center">
                                            <div class="item-img float-left">
                                                <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}" title="">
                                                    <img style="border-radius: 5px;" class="img-fluid" src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="sub-title">
                                                    <a href="{{URL::to('chi-tiet-diem-tin/'.$dt->ID_DT)}}">
                                                        <h4 class="no-ater">{{$dt->TIEUDE_DT}}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="chuyendoicongchung_section">
            <div class="title text-center">
                <div class="page-title">
                    <h2>CHUYỂN ĐỔI CÔNG CHỨNG</h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="chuyendoicongchung_slider">
                <div class="chuyendoicongchung_item">
                    <div class="chuyendoicongchung_img">
                        <img src="{{asset('public/frontend/img/banner4.jpg')}}" alt="">
                    </div>
                    <h2>THÁI CÔNG SOFA</h2>
                    <p>11/01/2000</p>
                </div>
                <div class="chuyendoicongchung_item">
                    <div class="chuyendoicongchung_img">
                        <img src="{{asset('public/frontend/img/banner4.jpg')}}" alt="">
                    </div>
                    <h2>THÁI CÔNG SOFA</h2>
                    <p>11/01/2000</p>
                </div>
                <div class="chuyendoicongchung_item">
                    <div class="chuyendoicongchung_img">
                        <img src="{{asset('public/frontend/img/banner4.jpg')}}" alt="">
                    </div>
                    <h2>THÁI CÔNG SOFA</h2>
                    <p>11/01/2000</p>
                </div>
                <div class="chuyendoicongchung_item">
                    <div class="chuyendoicongchung_img">
                        <img src="{{asset('public/frontend/img/banner4.jpg')}}" alt="">
                    </div>
                    <h2>THÁI CÔNG SOFA</h2>
                    <p>11/01/2000</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section>

    <div class="oars-store sm-text-center pd-top-bottom" style="background-color: #ecf8f2">

        <div class="section about">
            <div class="container">
                <div class="section wrap-product-categories" style="margin-bottom: 1px">
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">

                            <div class="page-title color">
                                <div class="title-icon text-left">
                                    <h2 class="title-h2">VĂN BẢN CỦA HỘI</h2>
                                </div>
                            </div>

                            <div class="title clearfix">

                                <div class="group-store">

                                    <div class="index-core-group flex-center clearfix d-flex align-items-center">

                                        <div style=" display: block;">
                                            @foreach($vanban as $key=>$vb)

                                            <div class="index-core-group flex-center clearfix align-items-center">
                                                <div class="item-img float-left">
                                                    <a href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}" title=""><img style="border-radius: 5px" class="img-fluid" src="{{URL::to('public/upload/'.$vb->HINHANH_VB)}}"></a>
                                                </div>
                                                <div class="item-content" style="float: inherit">
                                                    <div class="sub-title">
                                                        <a href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}">
                                                            <h4 class="no-ater">{{$vb->TIEUDE_VB}}</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- </div> --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="title clearfix">

                                <div class="page-title color">
                                    <div class="title-icon text-left">
                                        <h2 class="title-h2">VĂN BẢN PHÁP LUẬT</h2>
                                    </div>
                                </div>

                                <div class="group-store">
                                    <div class="index-core-group flex-center clearfix d-flex align-items-center">
                                        <div style="display: block;">
                                            @php $i=0; @endphp @foreach($phapluat as $key=>$pl) @php $i++; @endphp
                                            <div class="index-core-group flex-center clearfix  align-items-center">

                                                <div class="item-content">
                                                    <div class="sub-title">
                                                        <a href="{{URL::to('chi-tiet-phap-luat/'.$pl->ID_PL)}}">

                                                            <h4 class="no-ater"> <label style="font-weight: 600;">{{$i}}</label>. {{$pl->TIEUDE_PL}}</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>



<section>
    <div style="border-bottom: 1px solid #ddd; padding-bottom: 10px;text-align: center;">
        <div class="title text-center">
            <div class="page-title color">
                <div class="title title-icon">
                    <h2 class="title-h2">HỘI VIÊN </h2>
                </div>
            </div>
        </div>
        <div class="content-about text-center container">
            <div class="row">
                @foreach($hoivien_top9 as $key=>$hv)
                <div class="col-sm-4 col-12">
                    <div class="item">
                        <div class="item-content">
                            <div class="sub-title">
                                <h3>{{$hv->TEN_HV}}</h3>
                                <h3>{{$hv->VANPHONG_HV}}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
        <a style="color:black" href="{{URL::to('/danh-sach-hoi-vien')}}">Xem tất cả ({{count($hoivien_all)}})</a>
    </div>
    <div class="section about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title color">
                    <h2>TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG </h2>
                </div>
            </div>


            <div class="section blog-news" style="text-align: center;">

                <div class="feature-products tab-content home">
                    <div class="block-content">
                        <div class="row">
                            @foreach($vpcc_top9 as $key=>$vp)
                            <div class="col-sm-4 col-12">
                                <div class="row ttchncc_item home" onclick='location.href="{{URL::to("chi-tiet-vpcc/".$vp->ID_VPCC)}}"'>
                                    <div class="product-image-container">
                                        <img src="{{asset('public/frontend/img/logo_item.png')}}" alt="img">
                                    </div>
                                    <div class="content-right">
                                        <a style="color:black" href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}">
                                            {{$vp->TEN_VPCC}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>


                    </div>
                </div>
                <a style="color:black" href="{{URL::to('/danh-sach-vpcc')}}">Xem tất cả ({{count($vpcc)}})</a>
            </div>


        </div>
    </div>



</section>





@endsection