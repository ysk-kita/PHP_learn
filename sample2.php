<?php 
    $title = "test1";
    $item1 = "hoge";
    $item2 = "fuga";
    $here_document = <<<MENU
    <html>
        <head><title>$title</title></head>
        <body>
            <ul>
                <li>text:$item1</li>
                <li>text:$item2</li>
                <li>text:べた書き</li>
            </ul>
        </body>
    </html>    
    MENU;
    print $here_document
?>

    
