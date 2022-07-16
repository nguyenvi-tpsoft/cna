<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
use Toastr;

// session_start();

use Mail;


class HomeController extends Controller
{

  // trang chu
  public function index()
  {
    $active_home = 'menu_active';
    $diemtin1 = DB::table('diemtin')->orderby('ID_DT', 'desc')->limit(1)->get();
    $diemtin = DB::table('diemtin')->orderby('ID_DT', 'desc')->offset(1)->limit(3)->get();
    $chuyendoicongchung = DB::table('chuyendoicongchung')->orderby('ID_DT', 'desc')->get();

    $vanban = DB::table('vanban')->orderby('ID_VB', 'desc')->limit(4)->get();
    $vanban_all = DB::table('vanban')->get();
    $vanbanhiephoi = DB::table('vanbanhiephoi')->orderby('ID_PL', 'desc')->limit(4)->get();
    $vanbanhiephoi_all = DB::table('vanbanhiephoi')->get();


    $phapluat = DB::table('phapluat')->orderby('NGAY_HIEULUC', 'desc')->limit(4)->get();
    $phapluat_all = DB::table('phapluat')->get();


    $vpcc = DB::table('vanphongcongchung')
      ->orderby('NGAYTHANHLAP_VPCC', 'asc')
      ->get();
    $vpcc_top9 = DB::table('vanphongcongchung')
      ->orderby('NGAYTHANHLAP_VPCC', 'asc')->limit(9)
      ->get();
    $hoivien = DB::table('hoivien')->get();
    $hoivien_top9 = DB::table('hoivien')
      ->orderby('ID_HV', 'asc')->limit(9)
      ->get();

    $lienket = DB::table('lienketwebsite')->get();


    return view('page.home')->with('diemtin', $diemtin)->with('diemtin1', $diemtin1)
      ->with('phapluat', $phapluat)->with('vanban', $vanban)
      ->with('vpcc', $vpcc)->with('vpcc_top9', $vpcc_top9)->with('hoivien_all', $hoivien)->with('hoivien_top9', $hoivien_top9)->with('lienket', $lienket)->with('active_home', $active_home)->with('chuyendoicongchung', $chuyendoicongchung)->with('vanbanhiephoi', $vanbanhiephoi)->with('phapluat_all', $phapluat_all)->with('vanban_all', $vanban_all)->with('vanbanhiephoi_all', $vanbanhiephoi_all);
  }

  public function gioithieuchung()
  {
    $active_gioithieu = 'menu_active';
    $active_gioithieuchung = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.GioiThieuChung')->with('lienket', $lienket)->with('active_gioithieu', $active_gioithieu)->with('active_gioithieuchung', $active_gioithieuchung);
  }

  public function sodo()
  {
    $active_gioithieu = 'menu_active';
    $active_sodo = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.SoDoToChuc')->with('lienket', $lienket)->with('active_gioithieu', $active_gioithieu)->with('active_sodo', $active_sodo);
  }

  public function quyetdinh()
  {
    $active_gioithieu = 'menu_active';
    $active_quyetdinh = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.QuyetDinhThanhLap')->with('lienket', $lienket)->with('active_gioithieu', $active_gioithieu)->with('active_quyetdinh', $active_quyetdinh);
  }

  public function dieule()
  {
    $active_gioithieu = 'menu_active';
    $active_dieule = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();

    return view('page.GioiThieu.DieuLe')->with('lienket', $lienket)->with('active_gioithieu', $active_gioithieu)->with('active_dieule', $active_dieule);
  }

  public function lienhe()
  {
    $active_lienhe = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.LienHe.LienHe')->with('lienket', $lienket)->with('active_lienhe', $active_lienhe);
  }

  public function diemtin()
  {
    $active_diemtin = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $chuyenmucdiemtin = DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT', 'desc')->get();

    $diemtin = DB::table('diemtin')->orderby('ID_DT', 'desc')->paginate(5);
    return view('page.DiemTin.DiemTin')->with('chuyenmucdiemtin', $chuyenmucdiemtin)
      ->with('diemtin', $diemtin)->with('lienket', $lienket)->with('active_diemtin', $active_diemtin);
  }


  public function vanban()
  {
    $active_vanban = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $vanban = DB::table('vanban')->orderby('ID_VB', 'desc')->paginate(5);
    return view('page.VanBan.VanBan')->with('chuyenmucvanban', $chuyenmucvanban)
      ->with('vanban', $vanban)->with('lienket', $lienket)->with('active_vanban', $active_vanban);
  }

  public function phapluat()
  {
    $lienket = DB::table('lienketwebsite')->get();
    $chuyenmucphapluat = DB::table('chuyenmucphapluat')->orderby('ID_CHUYENMUC_PL', 'desc')->get();

    $phapluat = DB::table('phapluat')->orderby('ID_PL', 'desc')->paginate(5);
    return view('page.PhapLuat.PhapLuat')->with('chuyenmucphapluat', $chuyenmucphapluat)->with('phapluat', $phapluat)->with('lienket', $lienket);
  }
  public function vanbanhiephoi()
  {
    $lienket = DB::table('lienketwebsite')->get();
    $phapluat = DB::table('vanbanhiephoi')->orderby('ID_PL', 'desc')->paginate(5);
    return view('page.VanBanHiepHoi.VanBanHiepHoi')->with('phapluat', $phapluat)->with('lienket', $lienket);
  }

  public function vpcc()
  {
    $active_hoivien_main = 'menu_active';
    $active_vpcc = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $vpcc_count = DB::table('vanphongcongchung')->get();
    $vpcc = DB::table('vanphongcongchung')->orderby('NGAYTHANHLAP_VPCC', 'asc')->paginate(12);
    return view('page.HoiVien.VPCC')->with('vpcc', $vpcc)->with('lienket', $lienket)->with('vpcc_count', $vpcc_count)->with('active_vpcc', $active_vpcc)->with('active_hoivien_main', $active_hoivien_main);
  }

  public function hoivien()
  {
    $active_hoivien_main = 'menu_active';
    $active_hoivien = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();


    $hoivien = DB::table('hoivien')->orderby('ID_HV', 'asc')->get();
    return view('page.HoiVien.HoiVien')->with('hoivien', $hoivien)->with('lienket', $lienket)->with('active_hoivien_main', $active_hoivien_main)->with('active_hoivien', $active_hoivien);
  }

  public function donggop(Request $request)
  {


    $data = array();
    $data['HOTEN_YKDG'] = $request->HOTEN_YKDG;
    $data['EMAIL_YKDG'] = $request->EMAIL_YKDG;
    $data['SDT_YKDG'] = $request->SDT_YKDG;
    $data['NOIDUNG_YKDG'] = $request->NOIDUNG_YKDG;


    $donggop = DB::table('ykiendonggop')->InsertGetId($data);
    Toastr::success('Bạn đã gửi ý kiến đóng góp thành công', 'Success',);
    return Redirect::to('lien-he');
  }

  public function dkNhanTin(Request $request)
  {

    $data = array();
    $data['EMAIL_KHACH'] = $request->EMAIL_KHACH;


    $donggop = DB::table('khach')->InsertGetId($data);
    Toastr::success('Bạn đã đăng ký nhận tin thành công', 'Success',);
    return Redirect::to('trang-chu');
  }



  // tim kiem
  public function timkiem(Request $request)
  {
    $lienket = DB::table('lienketwebsite')->get();

    $tu_timkiem = $request->tu_timkiem;

    $timkiem_DT = DB::table('diemtin')->where('TIEUDE_DT', 'like', '%' . $tu_timkiem . '%')->get();


    return view('page.TimKiem')->with('timkiem_DT', $timkiem_DT)
      ->with('tu_timkiem', $tu_timkiem)->with('lienket', $lienket);
  }


  // thu vien
  public function thuvien()
  {
    $active_thuvien = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();

    $chuyenmucthuvien = DB::table('chuyenmucthuvien')->orderby('ID_CHUYENMUC_TV', 'asc')->get();
    $thuvien = DB::table('thuvien')
      ->join('chuyenmucthuvien', 'chuyenmucthuvien.ID_CHUYENMUC_TV', '=', 'thuvien.ID_CHUYENMUC_TV')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', 1)
      ->orderby('ID_TV', 'desc')->paginate(12);
    return view('page.ThuVien.ThuVien')->with('chuyenmucthuvien', $chuyenmucthuvien)
      ->with('thuvien', $thuvien)->with('lienket', $lienket)->with('active_thuvien', $active_thuvien);
  }

  public function video($ID_CHUYENMUC_TV)
  {
    $lienket = DB::table('lienketwebsite')->get();

    $chuyenmucthuvien = DB::table('chuyenmucthuvien')->orderby('ID_CHUYENMUC_TV', 'asc')->get();
    $thuvien = DB::table('thuvien')
      ->join('chuyenmucthuvien', 'chuyenmucthuvien.ID_CHUYENMUC_TV', '=', 'thuvien.ID_CHUYENMUC_TV')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
      ->orderby('ID_TV', 'desc')->paginate(12);
    $chuyenmuc_ten = DB::table('chuyenmucthuvien')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
      ->limit(1)->get();
    $chuyenmuc_ten = DB::table('chuyenmucthuvien')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
      ->limit(1)->get();

    return view('page.ThuVien.Video')->with('chuyenmucthuvien', $chuyenmucthuvien)
      ->with('thuvien', $thuvien)->with('lienket', $lienket)
      ->with('chuyenmuc_ten', $chuyenmuc_ten);
  }


  public function bieumau()
  {
    $active_hoivien_main = 'menu_active';
    $active_bieumau = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $bieumau = DB::table('bieumauccv')->orderby('ID_BMCCV', 'desc')->paginate(5);

    return view('page.HoiVien.BieuMau')->with('lienket', $lienket)->with('bieumau', $bieumau)->with('active_hoivien_main', $active_hoivien_main)->with('active_bieumau', $active_bieumau);
  }
}
