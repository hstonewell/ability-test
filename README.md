# アプリケーション名

## 環境構築

### Dockerビルド
1. [git clone](https://github.com/coachtech-material/laravel-docker-template.git)
2. docker-compose up -d --build

### Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan make:factory ContactFactory
7. php artisan db:seed

## 使用技術(実行環境)
- Laravel 8.83.27

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/
