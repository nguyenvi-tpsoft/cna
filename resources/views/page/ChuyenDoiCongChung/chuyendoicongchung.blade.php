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
                    <li>
                        <a href="#"><span style="font-family: 'FontAwesome'; color: white">Chuyển đổi số công chứng</span></a>
                    </li>

                    <li class="breadcrumb-sep">/</li>
                    @foreach($chuyendoicongchung as $key=>$dt)
                    <li>
                        <span style="font-family: 'FontAwesome'; color: #ffff">{{$dt->TIEUDE_DT}}</span>
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

                    @foreach($chuyendoicongchung as $key=>$dt)
                    <h2>{{$dt->TIEUDE_DT}}
                    </h2>
                    <h3>{{date('d/m/Y',strtotime($dt->NGAYDANG_DT))}}</h3>
                    @endforeach
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <div class="block-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ckeditor_div" style="border-bottom: 1px solid #ddd; padding-bottom: 10px;margin-bottom: 10px;">
                                @foreach($chuyendoicongchung as $key=>$dt)

                                {!!$dt->NOIDUNG_DT!!}

                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="sidebar sidebar-collection">
                                <div class="sidebar-block blogs-recent">
                                    <div class="sub-title">
                                        <h3>Tin liên quan</h4>
                                    </div>
                                    <div class="row">
                                        @foreach($lienquan as $key=>$lienquan)
                                        <div class="col-md-4">
                                            <div class="tinlienquan_item chuyendoicongchung">
                                                <a href="{{URL::to('chuyen-doi-cong-chung/'.$lienquan->ID_DT)}}">
                                                    <img style="border-radius: 5px;" class="img-fluid" src="{{URL::to('public/upload/'.$lienquan->HINHANH_DT)}}" alt="">
                                                </a>
                                                <div class="article-title">
                                                    <a href="{{URL::to('chuyen-doi-cong-chung/'.$lienquan->ID_DT)}}">{{$lienquan->TIEUDE_DT}}</a>
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
</section>





@endsection