<?php 
    $text = "hello\nWorld\n";
    print nl2br($text);
    $year = 2019;
    $month = 3;
    $date = 1 ;
    printf("format text:%d/%02d/%d",$year,$month,$date);
    $str1 = "\nhoge";
    $str2 = "fuga";
    print nl2br($str1.$str2);
    $str3 = "\nhoge";
    $str3 .= $str2;
    print nl2br($str3);
?>
