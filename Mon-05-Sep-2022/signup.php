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
  
  <form id="signup_form" onsubmit="validate(signup); return false">
    <label for="">
      Name (min <?= NAME_MIN_LEN ?> max <?= NAME_MAX_LEN ?> characters)
    </label>
    <input type="text" placeholder="name"
      maxlength="<?= NAME_MAX_LEN ?>"
      name = "user_name"
      data-validate="str"
      data-min = "<?= NAME_MIN_LEN ?>"
      data-max= "<?= NAME_MAX_LEN ?>"
    >


    <label for="">
      Last name (min <?= LAST_NAME_MIN_LEN ?> max <?= LAST_NAME_MAX_LEN ?> characters)
    </label>
    <input type="text" placeholder="name"
      maxlength="<?= NAME_MAX_LEN ?>"
      name = "user_last_name"
      data-validate="str"
      data-min = "<?= NAME_MIN_LEN ?>"
      data-max= "<?= NAME_MAX_LEN ?>"
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
    async function signup(){
      const the_form = document.querySelector("#signup_form")
      console.log(the_form)
      const conn = await fetch('api-signup.php', {
        method : "POST",
        body : new FormData(the_form)
      })
      if( ! conn.ok ){
        console.log("uppssss....")
        return
      }
      const data = await conn.json() // Convert text to JSON
      // Success
      console.log(data.message)
      Swal.fire(
        'Good job '+data.message,
        'You clicked the button!',
        'success'
      )
    }
  </script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>