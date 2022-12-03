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
        Schema::create('khoa_hoc', function (Blueprint $table) {
            $table->id();
            $table->string("ten_khoa_hoc");
            $table->string("hinh_anh");
            $table->string("mo_ta");
            $table->double("gia");
            $table->integer("khuyen_mai")->default(1);
            $table->integer("categories_id");
            $table->string("so_luong_bai_tap");
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
        Schema::dropIfExists('khoa_hoc');
    }
};
