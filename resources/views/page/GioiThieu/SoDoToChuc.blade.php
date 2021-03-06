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
                    <li><a href="{{URL::to('/trang-chu')}}"><span style="font-family: 'FontAwesome';color: white">Giới thiệu</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><span style="font-family: 'FontAwesome';color: #ffff">Sơ đồ tổ chức</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="section about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title diemtin">
                    <h2>GIỚI THIỆU CHUNG </h2>
                </div>
            </div>
            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <img src="{{asset('public/frontend/img/sodotochuc.png')}}" style="width: 100%;">
            </div>
        </div>
    </div>
</section>

@endsection