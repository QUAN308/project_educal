<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ListUser extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ["id", "email", "name"];
    
    public function loadUserOnPage($params=[]){
        $query = DB::table("users")->select($this->fillable);
        $list = $query->paginate(50);
        return $list;
    }
    // Thêm user
    public function addUsers($params){
        $data = array_merge($params, ["password" => Hash::make($params["password"])]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    // Hiển thị chi tiết user
    public function loadDetailUser($id, $params = []){
        $query = DB::table($this->table)->where("id", "=", $id);
        $res = $query->first();
        return $res;
    }
    // Cập nhật thông tin mới của user
    public function saveUpdate($params){
        if(empty($params["cols"]["id"])){
            Session::push("error", "Không xác định bản ghi cập nhật");
        }
        $dataUpdate = [];
        foreach($params["cols"] as $colname => $val):
            if($colname == "id"){
                continue;
            }
            $dataUpdate[$colname] = (strlen($val) == 0 )?null:$val;
        endforeach;
        $res = DB::table($this->table)
                    ->where("id", $params["cols"]["id"])
                    ->update($dataUpdate);
        return $res;
    }
    public function deleteUser($id){
        $res = DB::table($this->table)->where("id", "=", $id)->delete();
        return $res;
    }
}
