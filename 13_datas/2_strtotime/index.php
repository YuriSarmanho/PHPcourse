<?php

    $cincoDias = strtotime("5 days");

    echo "$cincoDias <br>";


    $dataAtualMaisCinco = date("d/m/y", $cincoDias);

    echo "$dataAtualMaisCinco <br>";


    $doisAnos = strtotime("2 years");

    $dataAtualMaisDoisAnos = date("d/m/y",$doisAnos);

    echo "$dataAtualMaisDoisAnos <br>";

    echo date('d/m/y',"24 years");