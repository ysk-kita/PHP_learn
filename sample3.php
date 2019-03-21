<?php 
    print "<select name='people'>";
    $i=0;
    while($i<10){
        print "<option class='{$i}hoge'>huga</option>";
        $i++;
    }
    print "</select>";

    $array = array('key' => 'value', 'usr00' => 'Super User', 'usr01' => 'General User');
/*
    print "<table> \n";
    // 配列のkeyをループで取り出し、そのKeyに対応するvalueも取り出す
    $i = 0;
    foreach ($array as $key => $value){
        if($i == 0){
            print "<thead><tr><th>$key</th><th>$value</th></tr></thead> \n";
            print "<tbody> \n";
        } else {
            print "<tr><td>$key</td><td>$value</td></tr> \n";
        }
        
        $i++;
    }
    print "</tbody> \n";
    print "</table>";
    print implode(',' , $array);
    */

    # dictのような使い方をする場合
    print "<table> \n";
    print "<thead><tr><th>key</th><th>value</th></tr></thead> \n";
    print "<tbody> \n";    
    $i = 0;
    foreach ($array as $key => $value){
        print "<tr><td>$key</td><td>$value</td></tr> \n";
        $i++;
    }
    print "</tbody> \n";
    print "</table>";

    # 他言語のArrayのように使う場合
    $array2 = array('hoge','huga','piyo');
    print "<table> \n";
    print "<thead><tr><th>value</th></tr></thead> \n";
    print "<tbody> \n";    
    for ($j = 0; $j < count($array2); $j++){
        print "<tr><td>$array2[$j]</td></tr> \n";
    }
    print "</tbody> \n";
    print "</table>";


?>


