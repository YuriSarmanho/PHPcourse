<?php

function compras($itens){
    return implode(" ,",$itens);
}

echo compras(["café","carne","refrigerante"]);