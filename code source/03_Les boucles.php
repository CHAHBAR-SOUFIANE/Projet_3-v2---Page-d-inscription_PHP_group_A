<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Excel is not a database.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}
?>


<!-- while -->
<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++;
}
?>


<!-- for -->
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>


<!-- do while -->
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>


<!-- foreach -->
<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?> 