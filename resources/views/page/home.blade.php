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
                    <h2 class="title_main_red">ĐIỂM TIN </h2>
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
        <div class="container">
            <div class="chuyendoicongchung_section">
                <div class="title text-center">
                    <div class="chuyendoiso_title_div chuyendoicongchung_h2">
                        <h2 class="title title_main_red">CHUYỂN ĐỔI SỐ CÔNG CHỨNG</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="chuyendoicongchung_slider">
                    @foreach($chuyendoicongchung as $key=>$cdcc)
                    <div class="chuyendoicongchung_item">
                        <div class="chuyendoicongchung_img">
                            <a href="{{URL::to('chuyen-doi-cong-chung/'.$cdcc->ID_DT)}}">
                                <img src="{{URL::to('public/upload/'.$cdcc->HINHANH_DT)}}" alt="">
                            </a>
                        </div>
                        <h2>{{$cdcc->TIEUDE_DT}}</h2>
                        <p>{{date('d/m/Y',strtotime($cdcc->NGAYDANG_DT))}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>


<section>

    <div class=" oars-store sm-text-center pd-top-bottom" style="background-color: #ecf8f2">

        <div class="section about">
            <div class="container">
                <div class="section wrap-product-categories" style="margin-bottom: 1px">
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title color">
                                <div class="chuyendoiso_title_div">
                                    <h2 class="title-h2 title_main_red">VĂN BẢN CỦA HỘI</h2>
                                    <a class="xemthem" href="{{URL::to('/van-ban')}}">Xem thêm ({{count($vanban_all)}})</a>
                                </div>
                            </div>
                            <div class="vanbancuahoi_div active">
                                @foreach($vanban as $key=>$vb)
                                <div class="item">
                                    <h2>{{$vb->TIEUDE_VB}}</h2>
                                    <a class="btn view button-main" href="{{asset('public/upload'.$vb->FILE_VB)}}">Tải về</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="page-title color">
                                <div class="chuyendoiso_title_div">
                                    <h2 class="title-h2 title_main_red">VĂN BẢN CỦA HIỆP HỘI</h2>
                                    <a class="xemthem" href="{{URL::to('/van-ban-hiep-hoi')}}">Xem thêm ({{count($vanbanhiephoi_all)}})</a>
                                </div>
                            </div>
                            <div class="vanbancuahoi_div">
                                @foreach($vanbanhiephoi as $key=>$vb)
                                <div class="item">
                                    <h2>{{$vb->TIEUDE_PL}}</h2>
                                    <a class="btn view button-main" href="{{asset('public/upload'.$vb->FILE_PL)}}">Tải về</a>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="page-title color">
                                <div class="chuyendoiso_title_div">
                                    <h2 class="title-h2 title_main_red">VĂN BẢN PHÁP LUẬT</h2>
                                    <a class="xemthem" href="{{URL::to('/phap-luat')}}">Xem thêm ({{count($phapluat_all)}})</a>
                                </div>
                            </div>
                            <div class="vanbancuahoi_div">
                                @php $i=0; @endphp @foreach($phapluat as $key=>$pl) @php $i++; @endphp
                                <div class="item">
                                    <h2>{{$pl->TIEUDE_PL}}</h2>
                                    <a class="btn view button-main" href="{{asset('public/upload'.$pl->FILE_PL)}}">Tải về</a>
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
</section>



<section>
    <div style="border-bottom: 1px solid #ddd; padding-bottom: 10px;text-align: center;">
        <div class="content-about text-center container">
            <div class="page-title color">
                <div class="title-icon text-left">
                    <h2 class="title-h2 title_main_red">HỘI VIÊN</h2>
                </div>
            </div>
            <div class="row">
                @foreach($hoivien_top9 as $key=>$hv)
                <div class="col-sm-4 col-12">
                    <div class="item hoivien_home_item">
                        <div class="hoivien_img_daidien">
                            <a href="#" title="">
                                <img class="img-fluid" src="{{($hv->ANH_HV!=''?URL::to('public/upload'.$hv->ANH_HV):URL::to('public/frontend/img/hoivien_item.png'))}}" alt="img">
                            </a>
                        </div>
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
            <div class="page-title color">
                <div class="title-icon text-left">
                    <h2 class="title-h2 title_main_red tochuchanhnghecongchung_h2">TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG </h2>
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