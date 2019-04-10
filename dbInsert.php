<?php
    // 自画面遷移用
    print<<<_HTML_FORM_
        <form method="POST" action="$_SERVER[PHP_SELF]"> 
            dish name:<input type="text" name="dish_name" /><br/>
            price:<input type="text" name="price" /><br/>
            <button type="submit">submit</button>
        </form>
    _HTML_FORM_;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = array();
        
        // dishNameのvalidate
        $dish_name = htmlentities($_POST['dish_name']) ?? "" ;
        if(is_null($dish_name) || $dish_name == ""){
            $errors += array("<p style='color: #ff0000'>please input dishName</p>");
        }
        
        // priceのvalidate
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);   
        if(is_null($price)|| $price == false ){
            $errors += array("<p style='color: #ff0000'>please input price</p>");
        }
        # TODO error文が同時表示されない問題の解決
        
        // エラー配列が空なら、DB登録する
        if(!empty($errors)){
            foreach($errors as $error){
                print($error);
            }
        } else {            
            insertDishes($dish_name, $price);  
        }
    }


    # data表示
    selectDishes();

    function getPDO(){
        return new PDO("mysql:host=127.0.0.1; port=3306; dbname=Schema190417; charset=utf8", "root", "");
    }

    function selectDishes(){
        print "<table>";
        try{
            // select型で実行
            $pdo = getPDO();
            $query = $pdo->query('SELECT dish_name, price FROM dishes');
            // オブジェクト型でselect結果を扱う
            while($row = $query->fetch(PDO::FETCH_OBJ)){
                echo ("<tr><td>{$row->dish_name}</td><td>{$row->price}</td></tr>");
            }
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
        print "</table>";
        
    }

    function insertDishes($dish_name, $price){
        try{
            // dbNameで指定したデータベース(スキーマ)にアクセスする。
            // 実際に稼働させるときは環境変数で指定
            $mysqlPdo = getPDO();

            // sql実行エラーが起きた場合の対応に「ERRMODE_EXCEPTION」(例外をスローする)を指定
            $mysqlPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sqlファイル読み込み
            $sql1 = file_get_contents("sql/insert_dishes.sql");

            // プリペアドステートメント作成
            $stmt = $mysqlPdo->prepare($sql1);
            
            // sql実行
            $stmt->execute(array($dish_name, $price));

        } catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
    }
?>