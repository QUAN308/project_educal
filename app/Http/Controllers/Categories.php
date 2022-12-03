<?php

namespace App\Http\Controllers;

use App\Http\Requests\makerules;
use App\Http\Requests\request_rule;
use App\Models\Categories as ModelsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Categories extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function loadCategory(Request $request){
        $category = new ModelsCategories();
        $this->v['title_cate'] = "Danh mục khóa học";
        $this->v['data_res'] = $request->all();
        $this->v['data_cate'] = $category->loadCateOnePage($this->v['data_res']);
        return view("categories.category", $this->v);
    }
    public function addCategory(makerules $request){
        $method_route = "route_BackEnd_categories_addCategory";
        $this->v["title_cate"] = "Thêm danh mục";
        if($request->isMethod("post")){
            $data_cate = [];
            $addModel = new ModelsCategories();
            $data_cate['cate'] = $request->post();
            unset($data_cate['cate']['_token']);
            $data = $addModel->addCategory($data_cate['cate']);
            if($data == null){
                return redirect($method_route);
            }elseif($data > 0){
                Session::flash('success', "Thêm danh mục thành công");
            }else{
                Session::flash('error', "Không thể thêm danh mục");
            }
        }
        return view("categories.addCate", $this->v);
    }
    public function detail($id, makerules $request){
        $this->v['title'] = "Chi tiết sản phẩm";
        $modelCate = new ModelsCategories();
        $data = $modelCate->loadDetail($id);
        $this->v['data_detail'] = $data;
        return view("categories.detailCate", $this->v);
    }
    public function updateCate($id, Request $request, $params = []){
        $routeBack = "route_BackEnd_categories_detail";
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        $modelUpdate = new ModelsCategories();
        $params['cols']['id'] = $id;
        $res = $modelUpdate->saveUpdateCate($params);
        if($res == null){
            return redirect()->route($routeBack, ['id'=>$id]);
        }elseif($res == 1){
            Session::flash('success', "Cập nhật danh mục Thành công");
            return redirect()->route($routeBack, ['id'=>$id]);
        }else{
            Session::flash('error', 'Lỗi cập nhật danh mục' .$id);
            return redirect()->route($routeBack, ['id' => $id]);
        }
    }
    public function deleteCate($id){
        $route_back = "route_BackEnd_categories_loadCategory";
       $modelDelete = new ModelsCategories();
       $modelDelete->modelDelete($id);
       Session::flash("success", "Đã xóa danh mục ".$id);
       return redirect()->route($route_back);
    }
}
