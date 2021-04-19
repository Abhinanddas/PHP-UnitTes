<?php

class SampleClass{

    public function getNumber($a, $b){
        return $a+$b;
    }

    public function getString($a,$b){
        return $a.$b;
    }

    public function getBoolean($a,$b){
        $sum =$a+$b;
        if($sum > 0){
            return true;
        }
        return false;
    }
}
?>