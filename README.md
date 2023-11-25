# Atte 勤怠管理アプリ

##環境構築方法
1. docker-compose up -d --build コンテナのビルド
2. phpコンテナ内で、composer update
3. .envファイルを適宜書き換え
4. phpコンテナ内で、php artisan key:generate  アプリケーションキーの作成
5. php artisan migrate:fresh

##バージョン情報
1. Docker 24.0.6
2. PHP 8.2.0
3. nginx 1.21.1
4. Laravel 8.83.27

##打刻画面
<img width="500" alt="スクリーンショット 2023-11-25 190415" src="https://github.com/JonyTask/Atte/assets/136244515/53745e31-7171-4ee2-a119-31334508047c">

