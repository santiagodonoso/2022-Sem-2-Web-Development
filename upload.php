
<?php
$target_dir = 'images/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); // images/circle.png
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // png | jpg | zip
$tmp_name = $_FILES['fileToUpload']['tmp_name']; // C:\xampp\tmp\php5B1.tmp
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);

