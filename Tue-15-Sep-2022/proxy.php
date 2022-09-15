<?php

$data = file_get_contents('DOMAIN HERE');
$data = str_replace('SOME DATA', 'SOME NEW DATA', $data);
echo $data;




















