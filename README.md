# Atte 勤怠管理アプリ

<p font-size="35px">本番環境  ついに私もデプロイ経験ありと言えるわけです。</p>
http://3.27.7.7

##環境構築方法
1. git clone git@github.com:JonyTask/Atte.git
2. docker-compose up -d --build コンテナのビルド
3. phpコンテナ内で、composer update
4. .envファイルを適宜書き換え
5. phpコンテナ内で、php artisan key:generate  アプリケーションキーの作成
6. php artisan migrate:fresh
7. php artisan db:seed ※11/24の勤怠のダミーデータが6件

##バージョン情報
1. Docker 24.0.6
2. PHP 8.2.0
3. nginx 1.21.1
4. Laravel 8.83.27

<p font-size="25px">※フォームリクエストはvendor内のfortify設定ファイルに記述してあります。</p>

##打刻画面</br>
<img width="800" alt="スクリーンショット 2023-11-25 190415" src="https://github.com/JonyTask/Atte/assets/136244515/53745e31-7171-4ee2-a119-31334508047c">



##管理画面</br>
<img width="800" alt="スクリーンショット 2023-11-25 190248" src="https://github.com/JonyTask/Atte/assets/136244515/146a7038-d826-4c77-a71f-a3f3733f1fd9">


##ER図</br>
![ER drawio](https://github.com/JonyTask/Atte/assets/136244515/f3a10a20-3271-4447-8343-f73a03f7fda9)

