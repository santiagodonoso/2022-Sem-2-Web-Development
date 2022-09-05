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
  
  <form onsubmit="validate(test); return false">
    <input type="text" placeholder="name"
      data-validate="str"
      data-min = "2"
      data-max= "20"
    >
    <button>Signup</button>
  </form>

  <script src="validator.js"></script>

  <script>
    function test(){
      console.log("yessssss....")
    }
  </script>

</body>
</html>