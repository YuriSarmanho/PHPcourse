<?php

 $dataNascimento = mktime(02, 5, 25, 8, 12, 2023);

 echo $dataNascimento . "<br>";

 echo $dataNascimentoFormatado = date('d/m/y', $dataNascimento);