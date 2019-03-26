<?php 
    require 'class/class1.php';
    require 'anotherFileFunction.php';
    getHeader("test-sample5");
/*
    $sushi = new Item;
    $sushi->name = 'TAMAGO';
    $sushi->setIngredient(array('egg','rice','seaweed'));
    $sushi->printData();
*/
    $ramen = new Item('ramen',array('noodle','soup'));
    $ramen->printData();

    /* # 型宣言している関数に別型を渡した場合の例外はtry-catchできない？
    try{
        $ramen2 = new Item('fuga','hoge');
        $ramen2->printData();
    } catch (Exception $e){
        print "Sample Error:".$e->getMessage();
    }
    */
    getFooter();

?>

    
