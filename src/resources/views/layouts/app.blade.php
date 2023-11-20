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
                <li class="header-links-lists-item">ホーム</li>
                <li class="header-links-lists-item">日付一覧</li>
                <li class="header-links-lists-item">ログアウト</li>
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