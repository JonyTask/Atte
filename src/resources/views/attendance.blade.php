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
            @foreach($attendances as $attendance)
            <tr class="employee_line">
                <td class="name_cell">{{ $attendance->user->name }}</td>
                <td class="working_start">{{ $attendance->start_work }}</td>
                <td class="working_finish">{{ $attendance->finish_work }}</td>
                <td class="rest_aggregation"></td>
                <td class="working_aggregation"></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection