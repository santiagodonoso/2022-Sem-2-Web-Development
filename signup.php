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
      name = "user_name"
      data-validate="str"
      data-min = "2"
      data-max= "20"
    >
    <!-- <input type="text" placeholder="last name"
      data-validate="str"
      data-min = "2"
      data-max = "20"
    >
    <input type="text" placeholder="email"
      data-validate = "email"
    >
    <input type="password" placeholder="password"
      name = "password"
      data-validate = "str"
      data-min = "5"
      data-max = "20"
    >
    <input type="password" placeholder="confirm password"
      data-validate="match"
      data-match-name = "password"
    > -->
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