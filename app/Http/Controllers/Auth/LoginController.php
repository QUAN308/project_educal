<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function formLogin(){
        return view("auth.login");
    }
    public function postLogin(Request $request){
    // $request->all(): lấy ra thông tin đăng nhập, email và password
    // $request->input('email'): Lấy ra value của key email từ input
    // Auth::attempt(['email'=>$email,'password'=>$password]): so sánh input và dữ liệu trên db có trùng nhau hay không
        $rules = [
            "email" => "required|email",
            "password" => "required"
        ];
        $message = [
            "email.email" => "Yêu cầu nhập đúng định dang email",
            "email.required" => "Yêu cầu nhập email",
            "password.required" => "Bạn đã nhập sai mật khẩu"
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()){
            return redirect('/login')->withErrors($validator);
        }else{
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email, 'password'=>$password])){
                return redirect('/list_user');
            }else{
                Session::flash('error', "sai email va mat khau");
                return redirect('/login');
            }
        }
    }
    public function logOut(){
        Auth::logout();
        return redirect('/login');
    }
}
