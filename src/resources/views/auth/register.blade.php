@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
@endsection

@section('main')
    <div class="register_title_block">
        <h1 class="register_title">会員登録</h1>
    </div>
    <form class="register_form" action="/register" method="post">
        @csrf
        <div class="input_area">
            <input type="text" class="form_input_item" name="name" placeholder="名前">
            <p class="error_message">
                @error('name')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="input_area">
            <input type="email" class="form_input_item" name="email" placeholder="メールアドレス">
            <p class="error_message">
                @error('email')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="input_area">
            <input type="password" class="form_input_item" name="password" placeholder="パスワード">
            <p class="error_message">
                @error('password')
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="input_area">
            <input type="password" class="form_input_item" name="password_confirmation" placeholder="確認用パスワード">
            <p class="error_message">
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </p>
        </div>
        <input type="submit" class="register_submit" value="会員登録">
    </form>
    <div class="attention_toLogin">
        <p class="login_for_user">
            アカウントをお持ちの方はこちらから<br>
            <a class="login_link" href="/login">ログイン</a>
        </p>
    </div>
@endsection