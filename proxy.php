<?php

$data = file_get_contents('https://kea.dk');
$data = str_replace('KEA', 'PROXY DATA', $data);
echo $data;




















