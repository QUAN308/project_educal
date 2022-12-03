<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Courses extends Model
{
    use HasFactory;
    protected $table = "khoa_hoc";
    protected $fillable = ['khoa_hoc.id', "ten_khoa_hoc", "hinh_anh", "mo_ta", "gia", "khuyen_mai", "categories_id", "so_luong_bai_tap"];
    public $timestamps = true;

    public function loadCourses(){
        $query = DB::table($this->table)->join("danh_muc", "khoa_hoc.categories_id", "=", "danh_muc.id")->select($this->fillable);
        $res = $query->paginate(9);
        return $res;
    }
    public function saveAddCourses($data){
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function loadDetail($id, $params = []){
        $res = DB::table($this->table)->where('id', '=', $id);
        $data_res = $res->first();
        return $data_res;
    }
    public function saveUpdateCourse($params){
        if(empty($params['cols']['id'])){
            Session::push('error', "Không có dữ liệu nào để cập nhật");
        }
        $dataArray = [];
        foreach($params['cols'] as $index => $value):
            if($index == 'id'){
                continue;
            }
            $dataArray[$index] = (strlen($value) == 0)?null:$value;
        endforeach;
        $res = DB::table($this->table)
                ->where('id', $params['cols']['id'])
                ->update($dataArray);
        return $res;
    }
    public function courseDelete($id){
        $res = DB::table($this->table)->where('id', '=', $id)->delete();
        return $res;
    }
}
