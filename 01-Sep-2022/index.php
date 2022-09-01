<?php
$languages_allowed = ['en', 'dk', 'sp'];
$language = $_GET['language'] ?? 'en';
if( ! in_array($language, $languages_allowed) ){
  $language = 'en';
}
$dictionary=[
  'en_houses'=>'houses',
  'dk_houses'=>'huser',
  'en_cars'=>'cars',
  'dk_cars'=>'biler',
  'sp_houses'=>'casas',
  'sp_cars'=>'carros'  
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="houses.php">
      <?= $dictionary[$language.'_houses'] ?>
    </a>
    <a href="cars.php">
      <?= $dictionary[$language.'_cars'] ?>
    </a>
  </nav>
</body>
</html>