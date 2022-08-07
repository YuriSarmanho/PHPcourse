<?php


function teste($var){
    if(is_int($var) > 10){
        echo $var * 3;
    }else if($var < 5){
        echo $var**2;
    }
}