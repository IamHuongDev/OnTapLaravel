<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\themMoiLoaiSanPhamRequest;
use App\Http\Requests\capNhapLoaiSanPhamRequest;

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
        //

    }



        // return view("Pages.LoaiSanPham.ThemMoi");

        // return $this->create();

        // return redirect('/loai-san-pham/create');


    public function destroy($id)
    {
        // dd($id);
        $sql = "SELECT * FROM `loaisanphams` WHERE `id` = " .$id;

        $delete = DB::select($sql);

        if(count($delete) == 0){
            $data = DB::select("SELECT * FROM `loaisanphams`");
            $errorDelete = "Mã sản phẩm không tồn tại";
            // dd($data);

            return view("Pages.LoaiSanPham.ThemMoi",compact('data', 'errorDelete'));
        }else {
            $sql = "DELETE FROM `loaisanphams` WHERE id = ". $id;
            $delete = DB::delete($sql);

            $errorDelete = "Đã xoá sản phẩm thành công";
            $data = DB::select("SELECT * FROM `loaisanphams`");
            return view("Pages.LoaiSanPham.ThemMoi",compact('data', 'errorDelete'));

        }

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM `loaisanphams` WHERE `id` = " .$id;

        $update = DB::select($sql);

        if(count($update) == 0){
            $data = DB::select("SELECT * FROM `loaisanphams`");
            $errorDelete = "Mã sản phẩm không tồn tại, không thể cập nhật";

            return view("Pages.LoaiSanPham.ThemMoi",compact('data', 'errorDelete'));
        }else {

            $data = DB::select("SELECT * FROM `loaisanphams`");

            return view("Pages.LoaiSanPham.CapNhat",compact('data','update'));

        }
    }

    public function update(capNhapLoaiSanPhamRequest $request){

        $TenLoaiSanPham = $request->TenLoaiSanPham;
        $TinhTrang      = $request->TinhTrang;
        $slugLoaiSanPham = Str::slug($TenLoaiSanPham);

        $sql = "UPDATE `loaisanphams` SET `TenLoaiSanPham`='".$TenLoaiSanPham."', `SlugLoaiSanPham`='".$slugLoaiSanPham."', `TinhTrang`='".$TinhTrang."' WHERE id=" . $request->id;

        DB::update($sql);
        return redirect('/loai-san-pham/create');

    }

}
