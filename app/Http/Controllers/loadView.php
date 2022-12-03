<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Models\Categories;
use App\Models\Courses;
use App\Models\detail;
use Illuminate\Http\Request;

class loadView extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function courses(Request $request){
        $modelCourses = new Courses();
        $modelCate = new Categories();
        $this->v['cateData'] = $modelCate->loadCateOnePage();
        $this->v['title'] = "Danh sách khóa học";
        $this->v['data'] = $request->all();
        $this->v['dataRender'] = $modelCourses->loadCourses($this->v['data']);
        return view("listCoures", $this->v);
    }
    public function listCoursesView(Request $request){
        $modelCourses = new Courses();
        $modelCate = new Categories();
        $this->v['cateData'] = $modelCate->loadCateOnePage();
        $this->v['title'] = "Danh sách khóa học";
        $this->v['data'] = $request->all();
        $this->v['dataRender'] = $modelCourses->loadCourses($this->v['data']);
        return view("index", $this->v);
    }
    public function detailCourse($id, makerules $request){
        $this->v['title'] = "Chi tiết khóa học";
        $modelCate = new Categories();
        $modelDetail = new detail();
        $data = $modelDetail->loadDetailCourses($id);
        $this->v['cateData'] = $modelCate->loadCateOnePage();
        $this->v['data_detail'] = $data; // dữ liệu chi tiết
        dd($this->v['data_detail']);
        return view("detail", $this->v);
    }
}
