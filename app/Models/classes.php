<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class classes extends Model
{
    use HasFactory;
    protected $table = "lop_hoc";
    protected $fillable = ["lop_hoc.id", "ten_lop", "so_luong_hoc_vien", "lop_hoc.id_khoa_hoc", "lop_hoc.id_giao_vien", "so_gio_hoc"];

    public function listClass(){
        $query = DB::table($this->table)
        ->join("giao_vien", "lop_hoc.id_giao_vien", "=", "giao_vien.id")
        ->join("khoa_hoc", "lop_hoc.id_khoa_hoc", "=", "khoa_hoc.id")
        ->select($this->fillable);
        $res = $query->get();
        return $res;
    }
    public function saveAddClass($data){
        $query = DB::table($this->table)->insertGetId($data);
        return $query;
    }
    public function loadDetail($id, $params = []){
        $res = DB::table($this->table)->where("id", "=", $id);
        $data = $res->first();
        return $data;
    }
    public function saveUpdateClass($params){
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
    public function deleteClass($id){
        $query = DB::table($this->table)
        ->where("id", "=", $id)
        ->delete();
        return $query;
    }
}
