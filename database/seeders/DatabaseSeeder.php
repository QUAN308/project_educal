<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Guesser\Name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $pushData = [];
        for($i=0;$i<10;$i++){
            array_push($pushData, [
                "name" => "Nguyen Tien Quan " . ($i+1),
                "email" => "quan@gmail.com" . ($i+3),
                "password" => Hash::make('123456')
            ]);  
        }
        DB::table("users")->insert(
            $pushData
        );
        DB::table("quyen_truy_cap")->insert(
            [
                [
                    "id" => 1,
                    "quyen_truy_cap" => "Quản trị viên",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "id" => 2,
                    "quyen_truy_cap" => "Sinh viên",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "id" => 3,
                    "quyen_truy_cap" => "Giảng viên",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
            ]
            );
        // DB::table("danh_muc")->insert(
        //     [
        //         ["ten_danh_muc" => "Tiếng anh"],
        //         ["ten_danh_muc" => "Tin học văn phòng"],
        //         ["ten_danh_muc" => "Marketing"],
        //         ["ten_danh_muc" => "Thiết kế"],
        //         ["ten_danh_muc" => "Kỹ năng mềm"],
        //     ]
        // );
        // $arrayCourses = [];
        // for($i=0;$i<10;$i++){
        //     array_push($arrayCourses, [
        //         "ten_khoa_hoc" => "Khóa Học ".($i+1),
        //         "hinh_anh" => "hình ".($i+1),
        //         "mo_ta" => "Mô tả ".($i+1),
        //         "gia" => 120000,
        //         "khuyen_mai" => 0,
        //         "categories_id" => 1,
        //         "so_luong_bai_tap" => 120
        //     ]);
        // }
        // DB::table("khoa_hoc")->insert(
        //     $arrayCourses
        // );
    }
}
