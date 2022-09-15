<?php

$data = file_get_contents('https://kea.dk');
$data = str_replace('KEA', 'Kun idag, en MACBook for 1.000Kr.', $data);
echo $data;




















