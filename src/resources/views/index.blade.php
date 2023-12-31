@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
@endsection

@section('main')
    <div class="container">
        <h1 class="message_to_user">{{$userName}}さんお疲れ様です！</h1>
        <div class="conditions">
                <div class="working_condition">
                    <form class="stamping_form" action='/start-work' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="勤務開始" {{ $attendance ? 'disabled' : '' }}>
                    </form>
                </div>
                <div class="working_condition">
                    <form class="stamping_form" action='/finish-work' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="勤務終了" {{ is_null($attendance) || is_null($start_work_bool) || !is_null($finish_work_bool) || $nowOnRest ? 'disabled' : '' }}>
                    </form>
                </div>
                <div class="working_condition">
                    <form class="stamping_form" action='/start-rest' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="休憩開始" {{ is_null($attendance) || is_null($start_work_bool) || !is_null($finish_work_bool) || $nowOnRest ? 'disabled' : '' }}>
                    </form>
                </div>
                <div class="working_condition">
                    <form class="stamping_form" action='finish-rest' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="休憩終了" {{ $nowOnRest ? '' : 'disabled' }}>
                    </form>
                </div>
        </div>
    </div>
@endsection