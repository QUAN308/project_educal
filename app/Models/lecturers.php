<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class lecturers extends Model
{
    use HasFactory;
    protected $table = "giao_vien";
    protected $fillable = ['id', 'ten_giao_vien', 'so_dien_thoai', 'hinh_anh', 'ngay_sinh', 'dia_chi', 'email', 'gioi_tinh', 'chuyen_nganh'];
    public function loadLectureOnPage(){
        $query = DB::table($this->table)->select($this->fillable);
        $res = $query->paginate(20);
        return $res;
    }
    public function saveAddLecture($params){
        $res = DB::table($this->table)->insertGetId($params);
        return $res;
    }
}
