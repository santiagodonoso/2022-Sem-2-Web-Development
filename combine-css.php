<?php

$mobile = file_get_contents('app.css');
$Media600 = file_get_contents('600.css');
$Media900 = file_get_contents('900.css');

$final_css = $mobile.$Media600.$Media900;

file_put_contents('final_css.css', $final_css);