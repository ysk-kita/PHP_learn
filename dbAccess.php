<?php
    try{
        // データベースへ接続
        $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=test;charset=utf8", "root", "");
    } catch (PDOException $e){
        print('Error:'.$e->getMessage());
        die();
    }
    echo "テスト<br>";

?>