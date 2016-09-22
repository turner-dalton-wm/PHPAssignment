<?php
spl_autoload_register(function($name) {
    include $name . '.php';
});

$bull = new Bull('Bob', 99, 100);
$cow = new Cow('Bessy', 34, 100);

print_r($bull);
echo '<br>';
print_r($cow);
echo '<br><br>';

$bull->setName('Billy');
$bull->eat();
$bull->sleep();

print_r($bull);
echo '<br>';
print_r($cow);
echo '<br><br>';

$bull->iterate();