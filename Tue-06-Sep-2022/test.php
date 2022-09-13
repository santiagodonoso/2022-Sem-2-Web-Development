<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form onsubmit="return false">
    <input 
      name="email" 
      type="text" 
      placeholder="email"
      onblur="is_email_available()"
      onfocus="clean_input()"
    >
    <p style="display: none">
      Email already in use
    </p>
  </form>

  <script>
    function clean_input(){
      event.target.value = ""
      console.log('x')
      document.querySelector("p").style.display = "none"
    }


    async function is_email_available(){
      const frm = document.querySelector("form")
      const conn = await fetch('api-is-email-available.php', {
        method : "POST",
        body : new FormData(frm)
      })
      if( ! conn.ok ){
        document.querySelector("p").style.display = "block"
      }
    }
  </script>

</body>
</html>