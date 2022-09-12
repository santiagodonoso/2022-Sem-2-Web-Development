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
      <button onclick="delete_flight('1')">
        🗑️
      </button>
    </form>
  </div>

  <script>
    function delete_flight(flight_id){
      console.log(flight_id)
    }
  </script>


</body>
</html>