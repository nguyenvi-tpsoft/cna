<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
// session_start();

use Auth;
use Toastr;

class ChuyenDoiCongChungController extends Controller
{

    // public function show_ChiTietDT($ID_DT)
    // {
    //     $lienket = DB::table('lienketwebsite')->get();

    //     $diemtin = DB::table('diemtin')
    //         ->join('chuyenmucdiemtin', 'chuyenmucdiemtin.ID_CHUYENMUC_DT', '=', 'diemtin.ID_CHUYENMUC_DT')
    //         ->where('diemtin.ID_DT', $ID_DT)
    //         ->get();
    //     $chuyenmuc_ten = DB::table('diemtin')
    //         ->join('chuyenmucdiemtin', 'chuyenmucdiemtin.ID_CHUYENMUC_DT', '=', 'diemtin.ID_CHUYENMUC_DT')
    //         ->where('diemtin.ID_DT', $ID_DT)
    //         ->limit(1)->get();
    //     // diem tin lien quan

    //     foreach ($diemtin as $key => $value) {
    //         $ID_CHUYENMUC_DT = $value->ID_CHUYENMUC_DT;
    //     }
    //     $DT_lienquan = DB::table('diemtin')
    //         ->join('chuyenmucdiemtin', 'chuyenmucdiemtin.ID_CHUYENMUC_DT', '=', 'diemtin.ID_CHUYENMUC_DT')
    //         ->where('chuyenmucdiemtin.ID_CHUYENMUC_DT', $ID_CHUYENMUC_DT)
    //         ->limit(5)->get();

    //     return view('page.DiemTin.chitiet_Diemtin')->with('diemtin', $diemtin)
    //         ->with('chuyenmuc_ten', $chuyenmuc_ten)->with('lienket', $lienket)
    //         ->with('DT_lienquan', $DT_lienquan);
    // }
}
