<?php 
class Item {
    public $name;
    private $ingredient = array();

    public function setIngredient(array $arrays){
        $this->ingredient = $arrays;
    }

    public function getIngredient(){
        return $this->ingredient;
    }
    
    public function printData(){
        print $this->name."\r\n";
        print implode(',',$this->ingredient);
    }
    
    # 型宣言のコンストラクタ
    public function __construct(string $name,array $ingredient){
        $this->name = $name;
        $this->ingredient = $ingredient;
    }

}
?>