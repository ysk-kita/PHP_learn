<?php 
class Item {
    public $name;
    protected $ingredient = array();

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
# クラスの継承 
class Item2nd extends Item {
    # Override
    public function printData(){
        print nl2br("\r\n");
        print "2nd";
        print $this->name."\r\n";
        print implode(',',$this->ingredient);
    }
}

?>