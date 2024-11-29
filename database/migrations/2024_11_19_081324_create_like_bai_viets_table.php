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
        Schema::create('like_bai_viets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bai_viet'); // Khóa ngoại đến bảng 'bai_viets'
            $table->unsignedBigInteger('id_khach_hang'); // Khóa ngoại đến bảng 'customers'
            $table->integer('tinh_trang');
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('id_bai_viet')->references('id')->on('bai_viets')->onDelete('cascade');
            $table->foreign('id_user_like')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_bai_viets');
    }
};
