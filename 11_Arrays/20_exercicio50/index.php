<?php

$pessoas = [
    'Yuri' => 21,
    'Alyne' => 29,
    'Renata' => 46
];

?>


<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome =>$idade):?>
        <tr>
            <td><?=$nome?></td>
            <td><?=$idade?></td>
        </tr>
    <?php endforeach;?>    
</table>
