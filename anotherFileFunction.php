<?php
    function accounting($unit, $tax, $amount){
        $sum = $unit * (1+$tax) * $amount;
        return $sum;
    }

    function getHeader($pageTitle){
        print "<html><head><title>$pageTitle</title></head><body><p>header</p>";
    }

    function getFooter(){
        print "<p>footer</p></body></html>";
    }
?>