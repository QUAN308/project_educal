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
        $this->v['title_lecture'] = "Danh sách giảng viên";
        $modelLecture = new ModelsLecturers();
        $modelCate = new Categories();
        $this->v['get_params'] = $request->all();
        $this->v['data_lecture'] = $modelLecture->loadLectureOnPage($this->v['get_params']);
        $this->v['data_cate'] = $modelCate->loadCateOnePage();
        return view("lecturers.lecturer", $this->v);
    }
    public function addLecturer(makerules $request, $params = []){
        $this->v['title_add_lecture'] = "Thêm giảng viên";
        $method_back = "route_BackEnd_lecturer_add";
        if($request->isMethod("post")){
            $dataLecture = [];
            $modelLecture = new ModelsLecturers();
            $dataLecture['data_res'] = $request->post();
            if ($request->hasFile('hinh_anh') && $request->file('hinh_anh')->isValid())
            {
                $dataLecture['data_res']['hinh_anh'] = $this->uploadFile($request->file('hinh_anh'));
            }
            unset($dataLecture['data_res']['_token']);
            $data = $modelLecture->saveAddLecture($dataLecture['data_res']);
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

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('cmnd',$fileName,'public');
    }
}
