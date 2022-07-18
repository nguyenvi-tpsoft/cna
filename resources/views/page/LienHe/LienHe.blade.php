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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #ffff">Liên hệ</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// $message = Session::get('message');
// if ($message) {
//     echo '<span class="text-alert">' . $message . '</span>';
//     Session::put('message', null);
// }

?>

<div class="section about">
    <div class="container">

        <div class="section main-contact-us">
            <div class="section container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 m-b-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8940828131103!2d105.77233731474239!3d10.025598592833598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0882448a2ce97%3A0x8293e26834af4852!2zMWEgVHLhuqduIEtow6FuaCBExrAsIFh1w6JuIEtow6FuaCwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1655392201902!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="page-title color m-bottom-2">
                            <div class="title title-icon">
                                <h2>LIÊN HỆ </h2>
                            </div>
                        </div>

                        <div class="header-contact" style="color: black">

                            <div class="lienhe_div item-right">
                                <p>Địa chỉ: 286 Đường 30/4, Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                                <p>Số điện thoại: 02923.832.213</p>
                                <p>Email: hoicongchungct@gmail.com</p>
                            </div>
                            <div class="lienhe_div item-right">
                                <p>Nguyễn Thanh Đình - Chủ tịch </p>
                                <p>ĐT: 02923.832.213</p>
                                <p>Email: thanhdinhcantho@gmail.com</p>

                            </div>
                            <div class="lienhe_div item-right">
                                <p>Nguyễn Thu Hà - Thư ký</p>
                                <p>ĐT: 0907.981.060</p>
                                <p>Email: ha0902017686@gmail.com</p>
                            </div>

                        </div>
                        <br>




                    </div>
                    <div class="col-12">
                        <div class="page-title color m-bottom-2">
                            <div class="title title-icon">
                                <h2>Ý KIẾN ĐÓNG GÓP </h2>
                            </div>
                        </div>


                        <div id="review" class="lienhe_review">
                            <form method="post" action="{{URL::to('y-kien-dong-gop')}}" class="new-review-form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <fieldset class="spr-form-contact">
                                    <div class="spr-form-contact-name">
                                        <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Họ tên*" name="HOTEN_YKDG">
                                    </div>
                                    <div class="spr-form-contact-email">
                                        <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Email*" name="EMAIL_YKDG">
                                    </div>
                                    <div class="spr-form-contact-phone">
                                        <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Số điện thoại*" name="SDT_YKDG">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="spr-form-review-body">
                                        <div class="spr-form-input">
                                            <textarea class="spr-form-input-textarea" rows="5" placeholder="Ý kiến đóng góp*" name="NOIDUNG_YKDG"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="submit_lienhe">
                                    <button class="add-to-cart" type="submit">
                                        Gửi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>





    </div>
</div>




@endsection