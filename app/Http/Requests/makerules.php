<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class makerules extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        $current_action = $this->route()->getActionMethod();
        switch($this->method()):
            case "post":
                switch($current_action){
                    case "add":
                        $rules = [
                            "name" => "required",
                            "email" => "required|email",
                            "password" => "required"
                        ];
                    break;
                    case "addCategory":
                        $rules = [
                            "ten_danh_muc" => "required"
                        ];
                    default:
                        break;
                }
            break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            "ten_danh_muc.required" => "Bạn phải điền tên danh mục",
            "email.required" => "Yêu cầu nhập email",
            "email.email" => "Email không đúng định dạng",
            "password.required"=> "Yêu cầu nhập password",
            "name.required" => "Yêu cầu nhập mật khẩu"
        ];
    }
}
