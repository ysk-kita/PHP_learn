<html>
    <head><title>$title</title></head>
    <body>
        <?php 
            session_start();
            $quan1 = $_POST['quantity1'];
            print $quan1;
            print $_SESSION['array'][0][0];
        ?>
    </body>
</html>    