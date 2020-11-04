<?php
include ".../src/functions.php";

echo task1([3,5,7]);


echo date('d.m.Y H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');

$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string);
echo '<br>';
$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string);

file_put_contents('test.txt', 'Hello again!');
my_file_get_contents ('test.txt');

