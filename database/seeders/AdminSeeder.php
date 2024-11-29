<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            [
                'ho_va_ten'     => "Phạm Duy Truyền",
                'email'         => "truyenmap420@gmail.com@gmail.com",
                'password'      => bcrypt("123123"),
                'trang_thai'    => 1,
                'avatar'        => "/image/truyen.jpg",
                'so_dien_thoai' => "0794694769"
            ],
            [
                'ho_va_ten'     => "Phạm Duy Truyền 1",
                'email'         => "truyenmap420@gmail.com",
                'password'      => bcrypt("123123"),
                'trang_thai'    => 1,
                'avatar'        => "/image/truyen.jpg",
                'so_dien_thoai' => "0913797810"
            ],
        ]);
    }
}
