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
                    <li><a href="{{URL::to('/danh-sach-hoi-vien')}}"><span style="font-family: 'FontAwesome'; color: #ffff">Hội viên</span></a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section about">
    <div class="section_hoivien">
        <div class="title text-center">
            <div class="page-title color">
                <div class="title title-icon">
                    <h2 class="title-h2">HỘI VIÊN ({{count($hoivien)}})</h2>

                </div>
            </div>
        </div>
        <div class="content-about text-center container">
            <div class="row">
                @foreach($hoivien as $key=>$hv)
                <div class="col-sm-4 col-12">
                    <div class="item">
                        <!-- <div class="item-img">
                    <a href="#s" title=""><img class="img-fluid" src="{{URL::to('public/upload'.$hv->ANH_HV)}}" alt="img">
                    </a>
                </div> -->
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
    </div>
</div>




@endsection