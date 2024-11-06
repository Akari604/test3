#基礎学習ターム 確認テスト_ピグリー

##環境構築  
Dockerビルド  
1.git clone リンク  
2.docker-compose up -d --build

##laravel環境構築  
1.docker-compose exec php bash  
2.composer install  
3..env.exampleファイルから.envを作成し、環境変数を変更  
4.php artisan key:generate  
5.php artisan migrate  

##使用技術  
Laravel Framework 8.83.8

##ER図

![スクリーンショット 2024-11-06 222014](https://github.com/user-attachments/assets/d803f6e8-7558-4148-a7b6-62cc88b6a217)


##URL  
開発環境　http://localhost/  
phpMyAdmin http://localhost:8080/
