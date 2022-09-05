<?php
require_once __DIR__.'/_x.php';
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
  
  <form>
    <div>
      <label for="">
        Name (min 2 max <?= NAME_MAX_LEN ?> characters)
      </label>
      <input type="text" maxlength="<?= NAME_MAX_LEN ?>">
    </div>
  </form>

</body>
</html>