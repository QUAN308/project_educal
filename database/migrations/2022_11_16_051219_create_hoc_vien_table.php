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
        Schema::create('hoc_vien', function (Blueprint $table) {
            $table->id();
            $table->string("ten_hoc_vien");
            $table->integer("gioi_tinh")->default(0);
            $table->string("dia_chi");
            $table->string("so_dien_thoai");
            $table->string("email");
            $table->date("ngay_nhap_hoc");
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
        Schema::dropIfExists('hoc_vien');
    }
};
