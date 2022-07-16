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
                    <li><span style="font-family: 'FontAwesome'; color: white">Hội viên</span>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><a href="{{URL::to('/danh-sach-vpcc')}}"><span style="font-family: 'FontAwesome'; color: #ffff">Tổ chức hành nghề công chứng</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div class="section blog-news">
    <div class="container">

        <div class="title text-center">
            <div class="page-title color">
                <div class="title title-icon">
                    <h2>TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG ({{count($vpcc_count)}})</h2>
                </div>
            </div>
        </div>

        <div class="feature-products tab-content">

            <!-- List -->
            {{--
            <div id="list" class="tab-pane active"> --}}
            <div class="block-content">
                <div style="display: flex; flex-wrap: wrap;">
                    @foreach($vpcc as $key=>$vp)

                    <div class="row ttchncc_item" onclick='location.href="{{URL::to("chi-tiet-vpcc/".$vp->ID_VPCC)}}"'>
                        <div class="product-image-container">
                            <img src="{{asset('public/frontend/img/logo_item.png')}}" alt="img">
                        </div>
                        <div class="content-right">
                            <a style="color:black" href="{{URL::to('chi-tiet-vpcc/'.$vp->ID_VPCC)}}">
                                {{$vp->TEN_VPCC}}</a>
                        </div>
                    </div>


                    @endforeach

                </div>


            </div>

        </div>

        <div class="phantrang">
            {{ $vpcc->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>







@endsection