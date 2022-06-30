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
                                <img style="width: 100%" src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}" alt="img">
                            </a>
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
                                                    <img class="img-fluid" src="{{URL::to('public/upload/'.$dt->HINHANH_DT)}}">
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

                                        <div class="row" style=" display: block;">
                                            @foreach($vanban as $key=>$vb)

                                            <div class="index-core-group flex-center clearfix align-items-center">
                                                <div class="item-img float-left">
                                                    <a href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}" title=""><img class="img-fluid" src="{{URL::to('public/upload/'.$vb->HINHANH_VB)}}"></a>
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
                                        <div class="row" style=" display: block;">
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
    <div class="section about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title color">
                    <h2>TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG</h2>
                </div>
            </div>


            <div class="section blog-news">
                <div class="container">

                    <div class="feature-products tab-content">

                        <div class="block-content">
                            <div style="display: flex; flex-wrap: wrap;">
                                @foreach($vpcc as $key=>$vp)

                                <div class="row ttchncc_item" onclick='location.href="{{URL::to("chi-tiet-vpcc/".$vp->ID_VPCC)}}"'>
                                    <div class="product-image-container">
                                        <img src="{{asset('public/frontend/img/logo_item.png')}}" alt="img">
                                    </div>
                                    <div class="content-right">
                                        <a href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}">Văn phòng công chứng
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
    </div>


</section>




@endsection