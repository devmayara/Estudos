<?php

$array = [
    'nome' => 'Mayara',
    'idade' => '26',
    'empresa' => 'Code.education',
    'cor' => 'Azul',
    'profissao' => 'Desenvolvedora'
];

?>

<table border="1">
    <?php foreach ($array as $chave => $valor): ?>
        <tr>
            <th><?= $chave ?></th>
            <td><?= $valor ?></td>
        </tr>
    <?php endforeach; ?>
</table>
