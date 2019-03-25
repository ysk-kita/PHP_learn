<?php 
class Item {
    public $name;
    private $ingredient = array();

    public function setIngredient($arrays){
        $this->ingredient = $arrays;
    }

    public function getIngredient(){
        return $this->ingredient;
    }
    
    public function printData(){
        print $this->name."\r\n";
        print implode(',',$this->ingredient);
    }   
}
?>