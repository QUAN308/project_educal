<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giao_vien', function (Blueprint $table) {
            $table->id();
            $table->string("ten_giao_vien");
            $table->string("so_dien_thoai");
            $table->string("hinh_anh");
            $table->date("ngay_sinh");
            $table->string("dia_chi");
            $table->string("email");
            $table->integer("gioi_tinh")->default(0);
            $table->integer("chuyen_nganh");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giao_vien');
    }
};
