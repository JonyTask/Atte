@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
@endsection

@section('main')
    <div class="container">
        <h1 class="message_to_user">福場凛太朗さんお疲れ様です！</h1>
        <div class="conditions">
                <div class="working_condition">
                    <form action='' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="勤務開始">
                    </form>
                </div>
                <div class="working_condition">
                    <form action='' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="勤務終了">
                    </form>
                </div>
                <div class="working_condition">
                    <form action='' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="休憩開始">
                    </form>
                </div>
                <div class="working_condition">
                    <form action='' method='post'>
                        @csrf
                        <input class="working_condition_detail" type='submit' value="休憩終了">
                    </form>
                </div>
        </div>
    </div>
@endsection