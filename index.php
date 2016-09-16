<?php
include ('class.php');

$bull = new Bull('Bob', 34, 100);
$cow = new Cow('Bessy', 34, 100);

print_r($bull);
echo '<br>';
print_r($cow);
echo '<br><br>';

$bull->setName('Billy');
$bull->eat();
$cow->sleep();

print_r($bull);
echo '<br>';
print_r($cow);
echo '<br>';