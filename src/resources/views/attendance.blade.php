@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/attendance.css')}}">
@endsection

@section('main')
    <div class="container">
        <div class="date_controll">
            <p class="date_controll_view">
                2021-11-01
            </p>
        </div>
        <table class="employee_worktime_table">
            <tr class="table_header">
                <th class="name_title">名前</th>
                <th class="working_start_title">勤務開始</th>
                <th class="working_finish_title">勤務終了</th>
                <th class="rest_aggregation_title">休憩時間</th>
                <th class="working_aggregation_title">勤務時間</th>
            </tr>
            <tr class="employee_line">
                <td class="name_cell">テスト太郎</td>
                <td class="working_start">10:00:00</td>
                <td class="working_finish">20:00:00</td>
                <td class="rest_aggregation">00:30:00</td>
                <td class="working_aggregation">09:30:00</td>
            </tr>
            <tr class="employee_line">
                <td class="name_cell">テスト次郎</td>
                <td class="working_start">10:00:00</td>
                <td class="working_finish">20:00:00</td>
                <td class="rest_aggregation">00:30:00</td>
                <td class="working_aggregation">09:30:00</td>
            </tr>
            <tr class="employee_line">
                <td class="name_cell">テスト三郎</td>
                <td class="working_start">10:00:00</td>
                <td class="working_finish">20:00:00</td>
                <td class="rest_aggregation">00:30:00</td>
                <td class="working_aggregation">09:30:00</td>
            </tr>
            <tr class="employee_line">
                <td class="name_cell">テスト四郎</td>
                <td class="working_start">10:00:00</td>
                <td class="working_finish">20:00:00</td>
                <td class="rest_aggregation">00:30:00</td>
                <td class="working_aggregation">09:30:00</td>
            </tr>
            <tr class="employee_line">
                <td class="name_cell">テスト五郎</td>
                <td class="working_start">10:00:00</td>
                <td class="working_finish">20:00:00</td>
                <td class="rest_aggregation">00:30:00</td>
                <td class="working_aggregation">09:30:00</td>
            </tr>
        </table>
    </div>
@endsection