<?php

function  recebeArr($arr){
    $newArr = [];

    for($a = 0;$a < count($arr);$a++){
        if($arr[$a]>7){
           array_push($newArr,$arr[$a]); 
        }   
    }
    for($a=0; $a<count($newArr); $a++){
        echo $newArr[$a]."<br>";
    }
}


recebeArr([1,2,3,4,5,6,7,8,9,10]);
recebeArr([12,21,34,45,5,6,7,8,9,10]);


