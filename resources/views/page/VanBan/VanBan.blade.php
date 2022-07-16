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
                        <a href="#">
                            <span style="font-family: 'FontAwesome'; color: #ffff">Văn bản</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section product-default-item">
    <div class="container">

        <div class="feature-products tab-content">

            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        @foreach($vanban as $key=>$vb)
                        <div class="row" style="margin-bottom: 50px">

                            <div class="col-md-5 col-sm-12">
                                <div class="product-thumb">
                                    <div class="product-container item-img">
                                        <div class="product-image-container">
                                            <a class="product-img-link" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}" title=""><img class="w-100" src="{{URL::to('public/upload/'.$vb->HINHANH_VB)}}" alt="img" style="height: 20rem; border-radius: 0.5rem">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="content-right diemtin" style="color: black">
                                    <a class="title" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}">
                                        {{$vb->TIEUDE_VB}}</a>

                                    <div class="price font-600 color-default" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}">
                                        <span style="color: #9f6605">{{date('d/m/Y',strtotime($vb->NGAYDANG_VB))}}</span>
                                    </div>
                                    <div class="button d-flex align-items-center">
                                        <a class="btn view button-main" href="{{URL::to('chi-tiet-van-ban/'.$vb->ID_VB)}}">
                                            Xem thêm
                                            <i class="fa fa-chevron-double-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>


                </div>
            </div>
        </div>

        <div class="phantrang">
            {{ $vanban->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>




@endsection