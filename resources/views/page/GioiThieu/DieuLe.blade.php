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
                    <li><a href="{{URL::to('/trang-chu')}}"><span style="font-family: 'FontAwesome'; color: white">Giới thiệu</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><span style="font-family: 'FontAwesome'; color: #ffff">Điều lệ</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="about">
        <div class="container">
            <div class="title text-center">
                <div class="page-title color">
                    <h2>ĐIỀU LỆ HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ</h2>
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px">

                <img src="{{asset('public/frontend/img/dieule/dieule1.PNG')}}">
                <img src="{{asset('public/frontend/img/dieule/dieule2.PNG')}}">

                <img src="{{asset('public/frontend/img/dieule/dieule3.PNG')}}">

                <img src="{{asset('public/frontend/img/dieule/dieule4.PNG')}}">
                <img src="{{asset('public/frontend/img/dieule/dieule5.PNG')}}">
                <img src="{{asset('public/frontend/img/dieule/dieule6.PNG')}}">
                <img src="{{asset('public/frontend/img/dieule/dieule7.PNG')}}">
                <img src="{{asset('public/frontend/img/dieule/dieule8.PNG')}}">

            </div>



        </div>
    </div>
</section>





@endsection