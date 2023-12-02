@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/attendance.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/eachUser.css') }}">
@endsection

@section('main')
    <div class="container">
        <div class="title_username_area">
            <h1 class="title_username">{{ $user_name }}</h1>
        </div>
        <table class="employee_worktime_table">
            <tr class="table_header">
                <th class="date_title">日付</th>
                <th class="working_start_title">勤務開始</th>
                <th class="working_finish_title">勤務終了</th>
                <th class="rest_aggregation_title">休憩時間</th>
                <th class="working_aggregation_title">勤務時間</th>
            </tr>
            @foreach($attendances as $attendance)
            <tr class="employee_line">
                <td class="date_cell">{{ $attendance->work_date }}</td>
                <td class="working_start">{{ $attendance->start_work }}</td>
                <td class="working_finish">{{ $attendance->finish_work }}</td>
                <td class="rest_aggregation">{{ $attendance->total_rest }}</td>
                <td class="working_aggregation">{{ $attendance->total_work }}</td>
            </tr>
            @endforeach
        </table>
        <div class="pagination-link">
                {{$attendances->appends(request()->query())->links()}}
        </div>
    </div>
@endsection