<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Models\ListUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoadUsers extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function listUsers(Request $request){
        $listUser = new ListUser();
        $this->v["title"] = "Danh sách user";
        $this->v["loadUser"] = $request->all();
        $this->v["list"] = $listUser->loadUserOnPage($this->v["loadUser"]);
        return view("users.listUser", $this->v);
    }
    public function add(makerules $request){
        $method_route = "route_BackEnd_list_user_add";
        $this->v["title"] = "Thêm người dùng";
        if($request->isMethod("post")){
            $params = [];
            $params["cols"] = $request->post();
            unset($params["cols"]["_token"]);
            $modelSave = new ListUser();
            $res = $modelSave->addUsers($params["cols"]);
            if($res == null){
                return redirect($method_route);
            }elseif($res > 0){
                Session::flash("success", "Thêm người dùng thành công");
            }else{
                Session::flash("error", "Không thể thêm người dùng");
            }
        }
        return view("users.add", $this->v);
    }
    public function detail($id, Request $request){
        $this->v["_title"] = "Chi tiết user";
        $modelNguoiDung = new ListUser();
        $objItem = $modelNguoiDung->loadDetailUser($id);
        $this->v["objItem"] = $objItem;
        return view("users.detail", $this->v);
    }
    public function update($id, Request $request, $params = []){
        $method_route = "route_BackEnd_list_user_detail";
        $params["cols"] = $request->post();
        unset($params["cols"]["_token"]);
        if(is_null($params["cols"]["password"])){
            $params["cols"]["password"] = Hash::make($params["cols"]["id"] = $id);
        }
        $modelUser = new ListUser();
        $res = $modelUser->saveUpdate($params);
        if($res == null){
            return redirect($method_route, ["id"=>$id]);
        }elseif($res>0){
            Session::flash("success","Nhập nhật user - ".$params["cols"]["name"]." - thành công");
            return redirect()->route($method_route, ["id"=>$id]);
        }else{
            Session::flash("error", "Lỗi cập nhật user ".$params["cols"]["name"]);
            return redirect()->route($method_route, ["id"=>$id]);
        }
    }
    public function delete($id){
        $method_back = "route_BackEnd_list_user_Users";
        $modelDelete = new ListUser();
        $modelDelete->deleteUser($id);
        Session::flash("success", "Đã xóa user ".$id);
        return redirect()->route($method_back);
    }
}
