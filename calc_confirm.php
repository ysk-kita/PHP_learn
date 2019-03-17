<html>
    <head><title>calc_confirm</title></head>
    <body>
        <?php 
            session_start();
            $quan1 = $_POST["quantity0"];
            $price1 = $_SESSION["array"][0][1];
            print nl2br($_SESSION["array"][0][0]."の会計は\n");
            print nl2br("・値段：".$price1."\n");
            print nl2br("・数量：".$quan1."\n");
            print nl2br("より".strval(intval($quan1)*intval($price1))."円です。");
        ?>
    </body>
</html>    