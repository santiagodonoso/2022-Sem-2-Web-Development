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
  
  <form onsubmit="validate(); return false">
    <div>
      <label for="">
        Name (min 2 max <?= NAME_MAX_LEN ?> characters)
      </label>
      <input id="txt_name" type="text" maxlength="<?= NAME_MAX_LEN ?>">
    </div>
    <button>Signup</button>
  </form>

  <script>
    const name_min_len = 2
    const name_max_len = 20
  </script>

  <script src="validator.js"></script>

</body>
</html>