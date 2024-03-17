<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\dangKyRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewDanngKy()
    {
        return view('Pages.Auth.register');
    }

    public function dangKy(dangKyRequest $request){

        $email = $request->email;
        $matKhau = $request->password;

        $sql = "INSERT INTO `taikhoan`( `email`, `password`) VALUES ('".$email."','".$matKhau."')";

        DB::insert($sql);
    }

    public function viewDanngNhap(){
        return view('Pages.Auth.login');
    }

    public function dangNhap(Request $request)
    {
        $email = $request->email;
        $matKhau = $request->password;

        $sql = "SELECT * FROM `taikhoan` WHERE `email` = '".$email."' AND `password` = '".$matKhau."'";

        $data = DB::select($sql);

        if(count($data) > 0){
            echo 'Bạn đã đăng nhập thành công';
        } else {
            echo 'Email hoặc mật khẩu không chính xác';
        }
    }
}

