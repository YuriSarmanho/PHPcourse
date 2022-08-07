<?php


function teste($var)
{
    if (is_int($var) > 10) {
        echo $var * 3;
        echo "<br>";
    } else if ($var < 5) {
        echo $var ** 2;
        echo "<br>";
    }else{
        echo "$var <br>";
    }
}

