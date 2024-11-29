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
        Schema::create('lich_chieus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_phim'); // Khóa ngoại đến bảng 'phims'
            $table->unsignedBigInteger('id_phong'); // Khóa ngoại đến bảng 'phongs'
            $table->integer('thoi_gian_chieu_chinh');
            $table->integer('thoi_gian_quang_cao');
            $table->dateTime('thoi_gian_bat_dau');
            $table->dateTime('thoi_gian_ket_thuc');
            $table->timestamps();

            // Định nghĩa các khóa ngoại
            $table->foreign('id_phim')->references('id')->on('phims')->onDelete('cascade');
            $table->foreign('id_phong')->references('id')->on('phongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_chieus');
    }
};
