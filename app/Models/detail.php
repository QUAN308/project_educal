<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class detail extends Model
{
    use HasFactory;
    protected $table = "chi_tiet_khoa_hoc";
    protected $fillable = ['chi_tiet_khoa_hoc.id', 'id_khoa_hoc', 'id_giao_vien', 'so_luong_hoc_vien', 'noi_dung_khoa_hoc'];

    public function loadDetailCourses($params = []){
        $query = DB::table($this->table)->select($this->fillable)
        ->join('khoa_hoc', 'chi_tiet_khoa_hoc.id_khoa_hoc', '=', 'khoa_hoc.id')
        ->join('giao_vien', 'chi_tiet_khoa_hoc.id_giao_vien', '=', 'giao_vien.id');
        $res = $query->get();
        return $res;
    }
}
