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
    >
  </form>

  <script>
    async function is_email_available(){
      console.log('x')
    }
  </script>

</body>
</html>