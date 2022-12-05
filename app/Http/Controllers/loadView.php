<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Models\Categories;
use App\Models\Courses;
use App\Models\detail;
use App\Models\lecturers;
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
        $modelLecture = new lecturers();
        $modelCourse = new Courses();
        $modelDetail = new detail();
        $data = $modelDetail->loadDetailCourses($id);
        $this->v['lectureData'] = $modelLecture->loadLectureOnPage();
        $this->v['cateData'] = $modelCate->loadCateOnePage();
        $this->v['courseData'] = $modelCourse->loadDetail($id);
        $this->v['data_detail'] = $data; // dữ liệu chi tiết
        // dd($this->v['data_detail']);
        return view("detail", $this->v);
    }
    public function cateCourse($id, Request $request){
        $modelCourses = new Courses();
        $modelCate = new Categories();
        $this->v['cateData'] = $modelCate->loadCateOnePage();
        $this->v['title'] = "Danh sách khóa học";
        $this->v['data'] = $request->all();
        $this->v['dataRender'] = $modelCourses->loadCourseOnCate($id);
        return view("listCouresCate", $this->v);
    }
}
