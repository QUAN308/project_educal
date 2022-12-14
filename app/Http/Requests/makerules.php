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
                    case "addClass":
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
            "ten_giao_vien.required" => "Ch??a nh???p t??n gi??o vi??n",
            "email.required" => "Ch??a nh???p email gi??o vi??n",
            "ten_khoa_hoc.required" => "Ch??a ?????n t??n kh??a h???c",
            "gia.required" => "Ch??a nh???p gi?? kh??a h???c",
            "categories_id.required" => "Ch??a ch???n danh m???c cho kh??a h???c",
            "ten_danh_muc.required" => "B???n ph???i ??i???n t??n danh m???c",
            "email.required" => "Y??u c???u nh???p email",
            "email.email" => "Email kh??ng ????ng ?????nh d???ng",
            "password.required"=> "Y??u c???u nh???p password",
            "name.required" => "Y??u c???u nh???p m???t kh???u"
        ];
    }
}
