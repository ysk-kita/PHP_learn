<?php
     $errors="";
/*
    # postでページ遷移した場合に。helloを表示する
    if ('POST' == $_SERVER['REQUEST_METHOD']){
        print "Hello, ".$_POST['my_name'];
    } else {
        # Actionに指定した$_SERVER[PHP_SELF]は現在のリクエストURLを指す
        print<<<_HTML_
            <form method="POST" action="$_SERVER[PHP_SELF]"> 
                Your name:<input type="text" name="my_name" />
                <button type="submit">submit</button>
            </form>
        _HTML_;
    }
*/

    $array = array('hoge','piyo','fuga','poyo');
    

    # 上はif-elseで表示を切り替えるけど、下はformを維持しつつ、post送信した値のみを表示
    $arrayText = getSelectBox($array);
    print<<<_HTML_
        <form method="POST" action="$_SERVER[PHP_SELF]"> 
            Your name:<input type="text" name="my_name" /><br/>
            Your age:<input type="text" name="my_age" /><br/>
            <select name="category">
                $arrayText
            </select><br/>            
            <button type="submit">submit</button>
        </form>
    _HTML_;
    # strip_tagsを使うことで、htmlタグを削除できる
    // $str = strip_tags($_POST['my_name']) ?? "" ;
    # strip_tagsは<>等を消してしまうので、htmlentitiesで無効化するほうが良い
    $str = htmlentities($_POST['my_name']) ?? "" ;
    print nl2br("name:[".$str."]\r\n");
    
    $str2 = $_POST['category'] ?? "" ;
    print nl2br("category:[".$str2."]\r\n");

    # my_ageがpostで送信された場合、整数かどうか判断
    $age = filter_input(INPUT_POST, 'my_age', FILTER_VALIDATE_INT);
    if(is_null($age)|| $age == false ){
        $errors= "<p style='color: #ff0000'>please input age</p>";
    }
    
    print $errors;

    function getSelectBox($options){
        $text = '';
        foreach($options as $option){
            $text .="<option>$option</option>";
        }
        return $text;
    }

?>

