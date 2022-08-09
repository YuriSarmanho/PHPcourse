<?php
$arr = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];

for($i = 0;$i<count($arr);$i++){
    for($f = 0;$f<count($arr[$i]);$f++){
        echo $arr[$i][$f]. " ";
    }
    echo "<br>";
}