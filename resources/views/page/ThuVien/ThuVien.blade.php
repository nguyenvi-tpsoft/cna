@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">Hội công chứng viên Cần Thơ</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><span style="font-family: 'FontAwesome';color: #10550c">Thư viện</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="section about">
        <div class="container">

            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <div class="content-about text-center">
                    <div class="thuvien_div">
                        @foreach($chuyenmucthuvien as $key=>$chuyenmuc)
                        <div class="thuvien_item">
                            <a class="thuvien_button" href="{{URL::to('chuyen-muc-thu-vien/'.$chuyenmuc->ID_CHUYENMUC_TV)}}">{{$chuyenmuc->TEN_CHUYENMUC_TV}}</a>
                        </div>
                        @endforeach
                        <div class="thuvien_item">
                            <a class="thuvien_button" href="{{URL::to('/phap-luat')}}">Văn bản Pháp luật</a>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </div>
</section>


<div class="section blog-news">
    <div class="container">

        <div class="feature-products tab-content">


            <div class="block-content">
                <div class="row">
                    @foreach($thuvien as $key=>$tv)
                    <div class="col-sm-3 col-12">
                        <div class="thuvien_item2" href="#">
                            <img src="{{URL::to('public/upload/'.$tv->FILE_TV)}}">
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>

        </div>


        <div style="margin-left: 30rem">

            {{ $thuvien->links("pagination::bootstrap-4") }}


        </div>
    </div>
</div>


@endsection
