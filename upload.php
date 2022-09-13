<?php

$target_dir = 'images/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); // images/circle.png
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // png | jpg | zip
$random_image_name = bin2hex(random_bytes(5)); // 2506f07e58
$random_image_name = $random_image_name.'.'.$imageFileType; // 2506f07e58.png
$tmp_name = $_FILES['fileToUpload']['tmp_name']; // C:\xampp\tmp\php5B1.tmp
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "images/$random_image_name");




