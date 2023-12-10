<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'work_date'=>'2023-12-10',
            'start_work'=>'2023-12-10 12:00:00',
            'finish_work'=>'2023-12-10 18:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 2,
            'work_date'=>'2023-12-10',
            'start_work'=>'2023-12-10 18:00:00',
            'finish_work'=>'2023-12-10 23:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 3,
            'work_date'=>'2023-12-10',
            'start_work'=>'2023-12-10 13:00:00',
            'finish_work'=>'2023-12-10 19:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 4,
            'work_date'=>'2023-12-10',
            'start_work'=>'2023-12-10 15:00:00',
            'finish_work'=>'2023-12-10 21:00:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 5,
            'work_date'=>'2023-12-10',
            'start_work'=>'2023-12-10 10:00:00',
            'finish_work'=>'2023-12-10 18:00:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 6,
            'work_date'=>'2023-12-10',
            'start_work'=>'2023-12-10 19:00:00',
            'finish_work'=>'2023-12-10 23:20:00',
        ];
        DB::table('attendances')->insert($param);
    }
}
