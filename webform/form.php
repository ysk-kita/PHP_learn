<?php
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
    # 上はif-elseで表示を切り替えるけど、下はformを維持しつつ、post送信した値のみを表示
    print<<<_HTML_
        <form method="POST" action="$_SERVER[PHP_SELF]"> 
            Your name:<input type="text" name="my_name" />
            <button type="submit">submit</button>
        </form>
    _HTML_;
    $str = "";
    if ('POST' == $_SERVER['REQUEST_METHOD']){
        $str = $_POST['my_name'];
    }
    print "[".$str."]";


?>