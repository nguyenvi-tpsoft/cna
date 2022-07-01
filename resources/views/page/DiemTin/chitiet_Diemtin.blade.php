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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Điểm tin</span></a>
                    </li>

                    <li class="breadcrumb-sep">/</li>
                    @foreach($diemtin as $key=>$dt)
                    <li><span style="font-family: 'FontAwesome'; color: #ffff">{{$dt->TIEUDE_DT}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="section about">
        <div class="container">
            <div>
                <div class="page-title diemtin">

                    @foreach($diemtin as $key=>$dt)
                    <h2>{{$dt->TIEUDE_DT}}

                    </h2>
                    <h3>{{date('d/m/Y',strtotime($dt->NGAYDANG_DT))}}</h3>
                    @endforeach
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <div class="block-content m-top">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 m-b-50">
                            @foreach($diemtin as $key=>$dt)

                            <p>{!!$dt->NOIDUNG_DT!!}</p>

                            @endforeach
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="sidebar sidebar-collection">

                                <!-- Latest Posts -->
                                <div class="sidebar-block blogs-recent">
                                    <div class="sub-title">
                                        <h3>Tin liên quan</h4>
                                    </div>
                                    <div class="recent-article">
                                        <div class="ra-item-inner">
                                            @foreach($DT_lienquan as $key=>$lienquan)
                                            <div class="article-item clearfix ">
                                                <div class="article-image" style="width: 18rem">
                                                    <a href="{{URL::to('chi-tiet-diem-tin/'.$lienquan->ID_DT)}}"><img class="img-fluid" src="{{URL::to('public/upload/'.$lienquan->HINHANH_DT)}}" alt="" style="width: 18rem; height: 13rem">
                                                    </a>
                                                </div>
                                                <div class="articleinfo-group" style="width: 18rem">
                                                    <div class="article-title">
                                                        <h2 class="article-name"><a href="{{URL::to('chi-tiet-diem-tin/'.$lienquan->ID_DT)}}">{{$lienquan->TIEUDE_DT}}</a></h2>
                                                    </div>
                                                    <ul class="article-info list-inline">
                                                        <li class="article-date">{{date('d/m/Y',strtotime($lienquan->NGAYDANG_DT))}}</li>
                                                    </ul>
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





@endsection