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
        Schema::create('ghes', function (Blueprint $table) {
            $table->id();
            $table->string('ten_ghe');
            $table->integer('tinh_trang');
            $table->unsignedBigInteger('id_phong'); // Khóa ngoại
            $table->timestamps();

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
        Schema::dropIfExists('ghes');
    }
};
