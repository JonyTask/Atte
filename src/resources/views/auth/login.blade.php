@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection

@section('main')
    <div class="login_title_block">
        <h1 class="login_title">ログイン</h1>
    </div>
    <form class="login_form" action="/login" method="post">
        @csrf
        <div class="input_area">
            <input type="email" class="form_input_item" name="email" placeholder="メールアドレス" value="{{old('email')}}">
            <p class="error_message">
                @error('email')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="input_area">
            <input type="password" class="form_input_item" name="password" placeholder="パスワード" value="{{old('password')}}">
            <p class="error_message">
                @error('password')
                    {{$message}}
                @enderror
            </p>
        </div>
        <input type="submit" class="login_submit" value="ログイン">
    </form>
    <div class="attention_toRegister">
        <p class="register_for_user">
            アカウントをお持ちでない方こちらから<br>
            <a class="register_link" href="/register">会員登録</a>
        </p>
    </div>
@endsection