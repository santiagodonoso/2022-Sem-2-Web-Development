<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div>
    <img src="" alt="the image">
    <span>Copenhagen</span>
    <span>Amsterdam</span>
    <form>
      <input name="flight_id" value="1" type="text">
      <button type="button" onclick="delete_flight('1')">
        🗑️
      </button>
    </form>
  </div>

  <script>
    async function delete_flight(flight_id){
      // console.log(flight_id)
      const conn = await fetch('api-delete-flight.php', {
        method : "POST",
        body : new FormData(document.querySelector("form"))
      })
      const data = await conn.text()
      if( ! conn.ok ){
        // Sweet alert: ups... fligth not found
        console.log(data)
      }
      // Success
      console.log(data)
    }
  </script>


</body>
</html>