<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'attendance_id' => 3,
            'start_rest' => '2023-11-24 21:00:00',
            'finish_rest' => '2023-11-24 21:15:00'
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id' => 4,
            'start_rest' => '2023-11-24 17:30:00',
            'finish_rest' => '2023-11-24 17:50:00'
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id' => 5,
            'start_rest' => '2023-11-24 18:00:00',
            'finish_rest' => '2023-11-24 18:10:00'
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id' => 6,
            'start_rest' => '2023-11-24 16:00:00',
            'finish_rest' => '2023-11-24 16:20:00'
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id' => 4,
            'start_rest' => '2023-11-24 18:30:00',
            'finish_rest' => '2023-11-24 18:40:00'
        ];
        DB::table('rests')->insert($param);
    }
}
