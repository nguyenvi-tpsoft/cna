@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">CÔNG CHỨNG VIÊN CẦN THƠ</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><span style="font-family: 'FontAwesome'; color: white">Hội viên</span>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #ffff">Biểu mẫu CCV</span></a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="section product-default-item">
    <div class="container">

        <div class="title-default d-flex justify-content-between w-100 flex-wrap">

            <div class="content-right d-flex align-items-center justify-content-end">
                <div class="popup-content">
                    <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem-bieu-mau')}}" method="post">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                            <div class="input-group-btn">
                                <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e"><i class="fa fa-search"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="feature-products tab-content">

            <!-- List -->
            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        @foreach($bieumau as $key=>$bm)
                        <div class="content-right diemtin product" style="color: black">

                            <p><i class="fa fa-file"></i>&emsp; {{$bm->TEN_BMCCV}}
                            </p>

                            <div class="price font-600 color-default">
                                <span style="color: #9f6605">{{date('d/m/Y',strtotime($bm->NGAYDANG_BMCCV))}}</span>
                            </div>
                            <div class="button d-flex align-items-center">
                                <a class="btn view button-main diemtin" href="{{asset('public/upload'.$bm->FILE_BMCCV)}}">
                                    Tải xuống
                                    <i class="fa fa-chevron-double-left"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>

        <div style="margin-left: 30rem">

            {{ $bieumau->links("pagination::bootstrap-4") }}


        </div>
    </div>
</div>


@endsection