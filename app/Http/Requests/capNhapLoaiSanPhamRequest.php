<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class capNhapLoaiSanPhamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'             => 'required|exists:loaisanphams,id',
            'TenLoaiSanPham' => 'required|min:6|max:30|unique:loaisanphams,TenLoaiSanPham',
            'TinhTrang'      => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'required'      => ':attribute không được để trống',
            'min'           => ':attribute phải từ 6 đến 30 ký tự',
            'max'           => ':attribute phải từ 6 đến 30 ký tự',
            'unique'        => ':attribute đã tồn tại',
            'boolean'       => ':attribute chỉ được Yes/No',
            'exists'        => ':attribute không tồn tại trong hệ thống',
        ];
    }

    public function attributes()
    {
        return [
            'id'                    => 'Loại sản phẩm',
            'TenLoaiSanPham'        => 'Tên loại sản phẩm',
            'TinhTrang'             => 'Tình trạng',
        ];
    }
}
