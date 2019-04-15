<?php
    print "<table>";
    // ファイル内の全てを一度に読み込み配列とする
    foreach(file('resources/resources.txt') as $line){
        $line = trim($line);
        $info = explode(".", $line);
        print "<tr><td>$info[0]</td><td>$info[1]</td></tr>";    
    }
    
    $fh = fopen('resources/resources2.txt', 'rb');
    while(!feof($fh) && ($line = fgets($fh))){
        $line = trim($line);
        $info = explode(".", $line);
        print "<tr><td>$info[0]</td><td>$info[1]</td></tr>";    
    }
    print "</table>";

?>
