<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Models\Courses as ModelsCourses;
use App\Models\Categories as ModelCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Courses extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function listCourses(Request $request){
        $modelCourses = new ModelsCourses();
        $modelCate = new ModelCategories;
        $this->v["cateData"] = $modelCate->loadCateOnePage();
        $this->v["title"] = "Danh sách khóa học";
        $this->v["data"] = $request->all();
        $this->v["dataRender"] = $modelCourses->loadCourses($this->v["data"]);
        return view("courses.courses", $this->v);
    }
    public function addCourses(makerules $request){
        $method_route = "route_BackEnd_courses_add";
        $this->v["title_cate"] = "Thêm khóa học";
        $modelCate = new ModelCategories;
        $this->v["cateData"] = $modelCate->loadCateOnePage();
        if($request->isMethod("post")){
            $data_course = [];
            $addModel = new ModelsCourses();
            $data_course["course"] = $request->post();
            if ($request->hasFile("anh_khoa_hoc") && $request->file("anh_khoa_hoc")->isValid())
            {
                $data_course["course"]["hinh_anh"] = $this->uploadFile($request->file("anh_khoa_hoc"));
            }
            unset($data_course["course"]["_token"]);
            $data = $addModel->saveAddCourses($data_course["course"]);
            if($data == null){
                return redirect($method_route);
            }elseif($data > 0){
                Session::flash("success", "Thêm Khóa học thành công");
            }else{
                Session::flash("error", "Không thể thêm khóa học");
            }
        }
        return view("courses.addCourse", $this->v);
    }
    public function detail($id, makerules $request){
        $this->v["title"] = "Chi tiết khóa học";
        $modelCate = new ModelCategories;
        $modelCoure = new ModelsCourses();
        $data = $modelCoure->loadDetail($id);
        $this->v["cateData"] = $modelCate->loadCateOnePage();
        $this->v["data_detail"] = $data;
        return view("courses.detailCourse", $this->v);
    }
    public function updateCourse($id, Request $request, $params = []){
        $routeBack = "route_BackEnd_courses_detail";
        $params["cols"] = $request->post();
        unset($params["cols"]["_token"]);
        $modelUpdate = new ModelsCourses();
        $params["cols"]["id"] = $id;
        $res = $modelUpdate->saveUpdateCourse($params);
        if($res == null){
            return redirect()->route($routeBack, ["id"=>$id]);
        }elseif($res == 1){
            Session::flash("success", "Cập nhật khóa học Thành công");
            return redirect()->route($routeBack, ["id"=>$id]);
        }else{
            Session::flash("error", "Lỗi cập nhật khóa học " .$id);
            return redirect()->route($routeBack, ["id" => $id]);
        }
    }
    public function deleteCourse($id){
        $route_back = "route_BackEnd_courses_list";
       $modelDelete = new ModelsCourses();
       $modelDelete->courseDelete($id);
       Session::flash("success", "Đã xóa khóa học ".$id);
       return redirect()->route($route_back);
    }
    public function uploadFile($file) {
        $fileName = time()."_".$file->getClientOriginalName();
        return $file->storeAs("cmnd",$fileName,"public");
    }
}
