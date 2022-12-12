<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Models\Categories;
use App\Models\lecturers as ModelsLecturers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class lecturers extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function getLecturers(Request $request,$params = []){
        $this->v["title_lecture"] = "Danh sách giảng viên";
        $modelLecture = new ModelsLecturers();
        $modelCate = new Categories();
        $this->v["get_params"] = $request->all();
        $this->v["data_lecture"] = $modelLecture->loadLectureOnPage($this->v["get_params"]);
        $this->v["data_cate"] = $modelCate->loadCateOnePage();
        return view("lecturers.lecturer", $this->v);
    }
    public function addLecturer(makerules $request, $params = []){
        $this->v["title_add_lecture"] = "Thêm giảng viên";
        $method_back = "route_BackEnd_lecturer_add";
        if($request->isMethod("post")){
            $dataLecture = [];
            $modelLecture = new ModelsLecturers();
            $dataLecture["data_res"] = $request->post();
            if ($request->hasFile("hinh_anh") && $request->file("hinh_anh")->isValid())
            {
                $dataLecture["data_res"]["hinh_anh"] = $this->uploadFile($request->file("hinh_anh"));
            }
            unset($dataLecture["data_res"]["_token"]);
            $data = $modelLecture->saveAddLecture($dataLecture["data_res"]);
            if($data == null){
                return redirect()->route($method_back);
            }elseif($data > 0){
                Session::flash("success", "Thêm giảng viên thành công");
            }else{
                Session::flash("error", "Không thể thêm giảng viên");
            }
        }
        return view("lecturers.addLecture", $this->v);
    }
    public function detail($id, $params = []){
        $this->v["title_giao_vien"] = "Chi tiết giáo viên";
        $modelLecture = new ModelsLecturers();
        $modelCate = new Categories();
        $this->v["cateData"] = $modelCate->loadCateOnePage();
        $this->v["detail_lecture"] = $modelLecture->detailLecturer($id);
        return view("lecturers.detailLecture", $this->v);
    }
    public function updateLecturer($id, Request $request){
        $routeBack = "route_BackEnd_lecturer_detail";
        $params = [];
        $params["cols"] = $request->post();
        unset($params["cols"]["_token"]);
        $modelUpdate = new ModelsLecturers();
        $params["cols"]["id"] = $id;
        $res = $modelUpdate->saveUpdateLecture($params);
        if($res == null){
            return redirect()->route($routeBack, ["id"=>$id]);
        }elseif($res == 1){
            Session::flash("success", "Cập nhật giảng viên Thành công");
            return redirect()->route($routeBack, ["id"=>$id]);
        }else{
            Session::flash("error", "Lỗi cập nhật giảng viên " .$id);
            return redirect()->route($routeBack, ["id" => $id]);
        }
    }
    public function deleteLecturer($id){
        $route_back = "route_BackEnd_lecturer_list";
        $modelDelete = new ModelsLecturers();
        $modelDelete->letureDelete($id);
        Session::flash("success", "Đã xóa giảng viên ".$id);
        return redirect()->route($route_back);
    }
    public function uploadFile($file) {
        $fileName = time()."_".$file->getClientOriginalName();
        return $file->storeAs("cmnd",$fileName,"public");
    }
}
