<?php
// Loop While

$numero = 0;

while ($numero <= 10) {
    echo "N: " . $numero . '<br>';
    $numero++;
}
?>

<hr><br>

<?php
// Loop For

for($numero = 0; $numero <= 10; $numero++){
    echo "N: " . $numero . '<br>';
}

// $i=0;$i<=10;$i++
?>

<hr><br>

<?php
// Loop Foreach

$ingredientes = [
    'açucar',
    'farinha',
    'ovo',
    'leite',
    'fermento'
];

echo '<h2>Ingredientes</h2>';

echo '<ul>';

foreach ($ingredientes as $ingrediente) {
    echo "<li>" . $ingrediente."<br>";
}
?>
