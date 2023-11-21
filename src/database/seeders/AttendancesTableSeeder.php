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
            'work_date'=>'2023-10-20',
            'start_work'=>'2023-10-20 18:00:00',
            'finish_work'=>'2023-10-20 23:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 2,
            'work_date'=>'2023-10-20',
            'start_work'=>'2023-10-20 13:00:00',
            'finish_work'=>'2023-10-20 19:30:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 3,
            'work_date'=>'2023-10-20',
            'start_work'=>'2023-10-20 15:00:00',
            'finish_work'=>'2023-10-20 21:00:00',
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id' => 4,
            'work_date'=>'2023-10-20',
            'start_work'=>'2023-10-20 10:00:00',
            'finish_work'=>'2023-10-20 18:00:00',
        ];
        DB::table('attendances')->insert($param);
    }
}
