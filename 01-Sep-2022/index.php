<?php
require_once __DIR__.'/dictionary.php';
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
    <a href=<?= "houses.php?language=".$language ?>>
      <?= $dictionary[$language.'_houses'] ?>
    </a>
    <a href=<?= "cars.php?language=".$language ?>>
      <?= $dictionary[$language.'_cars'] ?>
    </a>
  </nav>
</body>
</html>