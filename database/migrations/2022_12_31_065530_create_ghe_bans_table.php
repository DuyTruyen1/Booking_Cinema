<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ghe_bans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_ghe');
            $table->unsignedBigInteger('id_lich'); // Khóa ngoại đến bảng 'lich_chieus'
            $table->integer('co_the_ban');
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('id_lich')->references('id')->on('lich_chieus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ghe_bans');
    }
};
