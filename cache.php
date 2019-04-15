<?php 
    # session開始
    session_start();
    
    # issetでcookie配列内にuser_noが存在するかチェック
    if(!isset($_COOKIE['user_no'])){
        setcookie('user_no',rand()); 
    } else {   
        print 'Your Number :'.$_COOKIE['user_no'];
    }

    # sessionでアクセス頻度をカウント
    if(isset($_SESSION['count'])){
        $_SESSION['count'] += 1;
    } else {
        $_SESSION['count'] = 1; 
    }
    
    print "<br/>Your access count:{$_SESSION['count']}";
    
    print<<<_HTML_FORM_
        <form method="POST" action="index.php"> 
            <button type="submit">back</button>
        </form>
    _HTML_FORM_;

/*
    // 自画面遷移用
    print<<<_HTML_FORM_
        <form method="POST" action="$_SERVER[PHP_SELF]"> 
            key:<input type="text" name="key" /><br/>
            item:<input type="text" name="item" /><br/>
            <button type="submit">submit</button>
        </form>
    _HTML_FORM_;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $key = htmlentities($_POST['key']) ?? "" ;
        $item = htmlentities($_POST['item']) ?? "" ;
        
        # validateは省略       
        $_SESSION['items'] += array($key => $item);
    }

    if(isset($_SESSION['items'])){
        foreach($_SESSION['items'] as $obj){
            foreach($obj as $key => $val){
                print "<li>{$key}:{$val}</li>";
            }
        }
    }
    */
?>