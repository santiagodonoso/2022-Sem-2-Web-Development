<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $_page ?? 'uppss...' ?>
  </title>
  <link rel="stylesheet" href="app.css">
</head>
<body>

  <?= $_page ?? 'uppsss...' ?>

  <nav>
    <a href="one.php" <?= $_page == 'one' ? 'class="active"' : '' ?>>One</a>
    <a href="two.php" <?= $_page == 'two' ? 'class="active"' : '' ?>>Two</a>
    <a href="three.php" <?= $_page == 'three' ? 'class="active"' : '' ?>>Three</a>
  </nav>
  
