<?php
    try{
        // dbNameで指定したデータベース(スキーマ)にアクセスする。
        $mysqlPdo = new PDO("mysql:host=127.0.0.1; port=3306; dbname=Schema190407; charset=utf8", "root", "");
        
        // sql実行エラーが起きた場合の対応に「ERRMODE_EXCEPTION」(例外をスローする)を指定
        $mysqlPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // sqlファイル読み込み
        $sql1 = file_get_contents("sql/create_dishes.sql");

        // sql実行
        $mysqlPdo->exec($sql1);
        
    } catch (PDOException $e){
        print('Error:'.$e->getMessage());
        die();
    }
    echo "テスト<br>";

?>