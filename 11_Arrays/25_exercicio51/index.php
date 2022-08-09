<?php

$pontuacao = [
    'Yuri' => 9.7,
    'Pedro' => 2.3,
    'Alyne' => 6.5,
    'Andrea' => 10,
    'Lucas' => 5.2,
];


arsort($pontuacao);
?>
<table border="1">
<tr>
    <th>Nome</th>
    <th>Pontos</th>
</tr>
<?php foreach($pontuacao as $nome => $pontos):?>
    <tr>
        <td><?=$nome?></td>
        <td><?=$pontos?></td>
    </tr>
<?php endforeach;?>
</table>