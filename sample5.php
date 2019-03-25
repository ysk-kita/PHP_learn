<?php 
    require 'class/class1.php';
    require 'anotherFileFunction.php';
    getHeader("test-sample5");

    $sushi = new Item;
    $sushi->name = 'TAMAGO';
    $sushi->setIngredient(array('egg','rice','seaweed'));

    $sushi->printData();

    getFooter();

?>

    
