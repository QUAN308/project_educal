<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class lecturers extends Model
{
    use HasFactory;
    protected $table = "giao_vien";
    protected $fillable = ["id", "ten_giao_vien", "so_dien_thoai", "hinh_anh", "ngay_sinh", "dia_chi", "email", "gioi_tinh", "chuyen_nganh"];
    public function loadLectureOnPage(){
        $query = DB::table($this->table)->select($this->fillable);
        $res = $query->paginate(20);
        return $res;
    }
    public function saveAddLecture($params){
        $res = DB::table($this->table)->insertGetId($params);
        return $res;
    }
    public function detailLecturer($id){
        $query = DB::table($this->table)->where("id", "=", $id);
        $res = $query->first();
        return $res;
    }
    public function saveUpdateLecture($params){
        if(empty($params["cols"]["id"])){
            Session::push("error", "Không có dữ liệu nào để cập nhật");
        }
        $dataArray = [];
        foreach($params["cols"] as $index => $value):
            if($index == "id"){
                continue;
            }
            $dataArray[$index] = (strlen($value) == 0)?null:$value;
        endforeach;
        $res = DB::table($this->table)
                ->where("id", $params["cols"]["id"])
                ->update($dataArray);
        return $res;
    }
    public function letureDelete($id){
        $res = DB::table($this->table)->where("id", "=", $id)->delete();
        return $res;
    }
}
