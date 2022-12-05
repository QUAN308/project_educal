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
            case "POST":
                switch($current_action){
                    case "add":
                        $rules = [
                            "name" => "required",
                            "email" => "required|email",
                            "password" => "required",
                            "ten_danh_muc" => "requires "
                        ];
                    break;
                    case "addCategory":
                        $rules = [
                            "ten_danh_muc" => "required"
                        ];
                    break;
                    case "addCourses":
                        $rules = [
                            "ten_khoa_hoc" => "required",
                            "gia" => "required",
                            "categories_id" => "required",
                        ];
                    break;
                    case "addLecturer":
                        $rules = [
                            "ten_giao_vien" => "required",
                            "email" => "required",
                        ];
                    break;
                }
            break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            "ten_giao_vien.required" => "Chưa nhập tên giáo viên",
            "email.required" => "Chưa nhập email giáo viên",
            "ten_khoa_hoc.required" => "Chưa đền tên khóa học",
            "gia.required" => "Chưa nhập giá khóa học",
            "categories_id.required" => "Chưa chọn danh mục cho khóa học",
            "ten_danh_muc.required" => "Bạn phải điền tên danh mục",
            "email.required" => "Yêu cầu nhập email",
            "email.email" => "Email không đúng định dạng",
            "password.required"=> "Yêu cầu nhập password",
            "name.required" => "Yêu cầu nhập mật khẩu"
        ];
    }
}
