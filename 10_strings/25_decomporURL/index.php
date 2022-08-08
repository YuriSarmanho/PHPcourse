<?php

$url = "https://www.google.com";

$arrayURL = parse_url($url);

print_r($arrayURL);

echo $arrayURL["host"];
echo "<br>";