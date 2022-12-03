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
        Schema::create('lop_hoc', function (Blueprint $table) {
            $table->id();
            $table->string("ten_Lop");
            $table->string("so_luong_hoc_vien");
            $table->integer("id_khoa_hoc");
            $table->string("so_gio_hoc");
            $table->date("ngay_bat_dau");
            $table->date("ngay_ket_thuc");
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
        Schema::dropIfExists('lop_hoc');
    }
};
