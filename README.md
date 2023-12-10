# Atte 勤怠管理アプリ

**本番環境**<br>
**http://3.27.7.7**

##環境構築方法
1. git clone git@github.com:JonyTask/Atte.git
2. mysqlディレクトリ内でdataディレクトリを作成してください
3. docker-compose up -d --build コンテナのビルド
4. phpコンテナ内で、composer update
5. .envファイルを適宜書き換え
6. phpコンテナ内で、php artisan key:generate  アプリケーションキーの作成
7. php artisan migrate:fresh
8. php artisan db:seed ※12/10の勤怠のダミーデータが6件

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

