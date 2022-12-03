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
        Schema::create('chi_tiet_khoa_hoc', function (Blueprint $table) {
            $table->id();
            $table->integer("id_khoa_hoc");
            $table->integer("id_giao_vien");
            $table->string("so_luong_hoc_vien");
            $table->string("noi_dung_khoa_hoc");
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
        Schema::dropIfExists('chi_tiet_khoa_hoc');
    }
};
