<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/common.css')}}">
    <title>Atte</title>
    @yield('css')
</head>
<body>
    <div class="header">
        <p class="header-title">Atte</p>
        @if(Auth::check())
        <div class="header-links">
            <ul class="header-links-lists">
                <li class="header-links-lists-item"><a class="header-links-lists-hyperLink" href="/index">ホーム</a></li>
                <li class="header-links-lists-item"><a class="header-links-lists-hyperLink" href="/attendance">日付一覧</a></li>
                <li class="header-links-lists-item">
                    <form action="/logout" method="post">
                        @csrf
                        <input class="logout-submit" type="submit" value="ログアウト">
                    </form>
                </li>
            </ul>
        </div>
        @endif
    </div>

    @yield('main')

    <div class="footer">
        <small>Att, inc.</small>
    </div>
</body>
</html>