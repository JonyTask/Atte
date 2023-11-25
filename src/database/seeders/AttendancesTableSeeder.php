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
            'work_date'=>'2023-11-24',
            'start_work'=>'2023-11-24 12:00:00',
            'finish_work'=>'2023-11-24 18:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 2,
            'work_date'=>'2023-11-24',
            'start_work'=>'2023-11-24 18:00:00',
            'finish_work'=>'2023-11-24 23:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 3,
            'work_date'=>'2023-11-24',
            'start_work'=>'2023-11-24 13:00:00',
            'finish_work'=>'2023-11-24 19:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 4,
            'work_date'=>'2023-11-24',
            'start_work'=>'2023-11-24 15:00:00',
            'finish_work'=>'2023-11-24 21:00:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 5,
            'work_date'=>'2023-11-24',
            'start_work'=>'2023-11-24 10:00:00',
            'finish_work'=>'2023-11-24 18:00:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 6,
            'work_date'=>'2023-11-24',
            'start_work'=>'2023-11-24 19:00:00',
            'finish_work'=>'2023-11-24 23:20:00',
        ];
        DB::table('attendances')->insert($param);
    }
}
