<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dangKyRequest extends FormRequest
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
            'email'         => 'required|email',
            'password'      => 'required|min:6|max:30',
            're-password'   => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required'      => ':attribute không được để trống',
            'email'         => ':attribute không đúng định dạng',
            'min'           => ':attribute yêu cầu từ 6 đến 30 ký tự',
            'max'           => ':attribute yêu cầu từ 6 đến 30 ký tự',
            'same'          => ':attribute mật khẩu không khớp',
        ];
    }

    public function attributes()
    {
        return [
            'email'         => 'email',
            'password'      => 'mật khẩu',
            're-password'   => 'xác nhận mật khẩu',
        ];
    }
}
