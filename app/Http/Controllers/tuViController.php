<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tuViController extends Controller
{
    public function xemTuVi($namSinh)
    {
        $soDu = $namSinh % 12;

        if($soDu == 0) {
            echo 'bạn là tuổi thân';
            echo '<br>';
            echo '<img src="/12ConGiap/0.jpg" style="width:500px; height:500px;">';
        } else if($soDu == 1) {
            echo 'bạn là tuổi dậu';
            echo '<br>';
            echo '<img src="/public/12ConGiap/1.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 3) {
            echo 'bạn là tuổi tuất';
            echo '<br>';
            echo '<img src="/12ConGiap/2.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 2) {
            echo 'bạn là tuổi hợi';
            echo '<br>';
            echo '<img src="/12ConGiap/3.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 4) {
            echo 'bạn là tuổi tý';
            echo '<br>';
            echo '<img src="/12ConGiap/4.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 5) {
            echo 'bạn là tuổi sửu';
            echo '<br>';
            echo '<img src="/public/12ConGiap/5.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 6) {
            echo 'bạn là tuổi dần';
            echo '<br>';
            echo '<img src="/public/12ConGiap/6.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 7) {
            echo 'bạn là tuổi mão';
            echo '<br>';
            echo '<img src="/12ConGiap/7.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 8) {
            echo 'bạn là tuổi thìn';
            echo '<br>';
            echo '<img src="/12ConGiap/8.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 9) {
            echo 'bạn là tuổi tị';
            echo '<br>';
            echo '<img src="/12ConGiap/9.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 10) {
            echo 'bạn là tuổi ngọ';
            echo '<br>';
            echo '<img src="/12ConGiap/10.jpg" style="width:500px; height:500px;">';
        }else if($soDu == 11) {
            echo 'bạn là tuổi mùi';
            echo '<br>';
            echo '<img src="/12ConGiap/11.jpg" style="width:500px; height:500px;">';
        }
    }

    public function viewTuVi()
    {
        return view('tu-vi');
    }

    public function tinhToanTuVi(Request $request )
    {
        // dd($request->toArray());
        $year       = $request->namsinh;
        $fullname   = $request->hovaten;

        $tuoi = ['Thân', 'Dậu', 'Tuất', 'Hợi', 'Tý', 'Sửu', 'Dần', 'Mão', 'Thìn', 'Tỵ', 'Ngọ', 'Mùi'];
        $can  = ['Canh', 'Tân', 'Nhâm', 'Quý', 'Giáp', 'Ất', 'Bính', 'Đinh', 'Mậu', 'Kỷ'];

        $hinh = $year % 12;

        $canChi = $can[$year % 10] . ' ' . $tuoi[$year % 12];

        return view('tu-vi',compact('fullname', 'canChi','hinh'));

    }

    public function tongSo($n)
    {
        $tong = 0;
         while( $n > 1){
            $tong = $tong + $n % 10;
            $n = $n / 10;
         }
         return $tong;
    }

    public function tinhThanSoHoc(Request $request)
    {
        $data = \Carbon\Carbon::parse($request->ngaysinh);

        $ngay = $data->format('d');
        $thang = $data->format('m');
        $nam = $data->format('Y');

        $tong = $this->tongSo($ngay) + $this->tongSo($thang) + $this->tongSo($nam);

        while($tong > 11){
            $tong = $this->tongSo($tong);
        }
    }
}
