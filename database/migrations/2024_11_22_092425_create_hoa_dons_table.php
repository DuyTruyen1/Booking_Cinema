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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->date('ngay_hoa_don');
            $table->string('ten_hoa_don');
            $table->unsignedBigInteger('id_khach_hang'); // Khóa ngoại đến bảng 'customers'
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('id_khach_hang')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
};
