<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Models\classes as ModelsClasses;
use App\Models\Courses;
use App\Models\lecturers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Classes extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function listClass(Request $request, $params = []){
        $modelClass = new ModelsClasses();
        $modelLecture = new lecturers();
        $modelCourse = new Courses();
        $this->v["_title_class"] = "Danh sách lớp học";
        $this->v["dataQuery"] = $request->all();
        $this->v["dataRender"] = $modelClass->listClass($this->v["dataQuery"]);
        $this->v["dataCourse"] = $modelCourse->loadCourses();
        $this->v["dataLect"] = $modelLecture->loadLectureOnPage();
        return view("classes.class", $this->v);
    }
    public function addClass(Request $request){
        $method_back = "route_BackEnd_class_add";
        $this->v["_title_add_class"] = "Thêm lớp học";
        $modelClass = new ModelsClasses();
        $modelLecture = new lecturers();
        $modelCourse = new Courses();
        $this->v["dataCourse"] = $modelCourse->loadCourses();
        $this->v["dataLect"] = $modelLecture->loadLectureOnPage();
        if($request->isMethod("post")){
            $data = [];
            $data["class"] = $request->post();
            unset($data["class"]["_token"]);
            $res = $modelClass->saveAddClass($data['class']);
            if($res == null){
                return redirect($method_back);
            }elseif($res>0){
                Session::flash("success", "Thêm lớp học thành công");
            }else{
                Session::flash("error", "Không thể thêm lớp học");
            }
        }
        return view("classes.addClass", $this->v);
    }

    public function detail($id, makerules $request){
        $this->v["title"] = "Chi tiết lớp học";
        $modelLecture = new lecturers();
        $modelCoure = new Courses();
        $modelClass = new ModelsClasses();
        $data = $modelClass->loadDetail($id);
        $this->v["dataLect"] = $modelLecture->loadLectureOnPage();
        $this->v["dataCourse"] = $modelCoure->loadCourses();
        $this->v["dataDetail"] = $data;
        return view("classes.detailClass", $this->v);
    }

    public function updateClass($id, Request $request){
        $routeBack = "route_BackEnd_class_detail";
        $params["cols"] = $request->post();
        unset($params["cols"]["_token"]);
        $modelUpdate = new ModelsClasses();
        $params["cols"]["id"] = $id;
        $res = $modelUpdate->saveUpdateClass($params);
        if($res == null){
            return redirect()->route($routeBack, ["id"=>$id]);
        }elseif($res == 1){
            Session::flash("success", "Cập nhật lớp học Thành công");
            return redirect()->route($routeBack, ["id"=>$id]);
        }else{
            Session::flash("error", "Lỗi cập nhật lớp học");
            return redirect()->route($routeBack, ["id" => $id]);
        }
    }
    public function deleteClass($id){
        $method_back = "route_BackEnd_class_list";
        $modelClass = new ModelsClasses();
        $modelClass->deleteClass($id);
        return redirect()->route($method_back);
    }
}
