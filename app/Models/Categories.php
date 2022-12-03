<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'danh_muc';
    protected $fillable = ['id' , 'ten_danh_muc'];
    public function loadCateOnePage($params=[]){
        $query = DB::table($this->table)->select($this->fillable);
        $res = $query->get();
        return $res;
    }
    public function addCategory($data){
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function loadDetail($id, $params = []){
        $res = DB::table($this->table)->where('id', '=', $id);
        $data_res = $res->first();
        return $data_res;
    }
    public function saveUpdateCate($params){
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
    public function modelDelete($id){
        $res = DB::table($this->table)->where('id', '=', $id)->delete();
        return $res;
    }
}
