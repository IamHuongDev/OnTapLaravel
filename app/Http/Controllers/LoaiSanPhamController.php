<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\themMoiLoaiSanPhamRequest;

class LoaiSanPhamController extends Controller
{
    public function create()
    {
        $data = DB::select("SELECT * FROM `loaisanphams`");

        // dd($data);

        return view("Pages.LoaiSanPham.ThemMoi",compact('data'));
    }

    public function store(themMoiLoaiSanPhamRequest $request)
    {
        $TenLoaiSanPham = $request->TenLoaiSanPham;
        $TinhTrang      = $request->TinhTrang;
        $slugLoaiSanPham = Str::slug($TenLoaiSanPham);
        $NgayTao         = Carbon::now();

        $sql = "INSERT INTO `loaisanphams` (`id`,`TenLoaiSanPham`, `SlugLoaiSanPham`, `TinhTrang`, `NgayTao`)
        VALUES (Null,'".$TenLoaiSanPham."', '".$slugLoaiSanPham."', '".$TinhTrang."', '".$NgayTao."')";

        DB::insert($sql);

        return redirect('/loai-san-pham/create');

        // if(count($loaiSanPham) > 0){
        //     $error = "Tên loại sản phẩm đã tồn tại";
        //     $data = DB::select("SELECT * FROM `loaisanphams`");
        //     return view("Pages.LoaiSanPham.ThemMoi", compact('data', 'error'));
        // } else {
        //     $sql = "INSERT INTO `loaisanphams` (`TenLoaiSanPham`, `SlugLoaiSanPham`, `TinhTrang`, `NgayTao`)
        //     VALUES ('".$TenLoaiSanPham."', '".$slugLoaiSanPham."', '".$TinhTrang."', '".$NgayTao."')";

        //     DB::insert($sql);

        //     return redirect('/loai-san-pham/create');
        // }
    }



        // return view("Pages.LoaiSanPham.ThemMoi");

        // return $this->create();

        // return redirect('/loai-san-pham/create');


}
