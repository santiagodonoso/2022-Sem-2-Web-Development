<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="app.css">
</head>
<body>
  <form onsubmit="get_flights(); return false">
    <button>
      Search
    </button>
  </form>

  <div id="flights">

    <div class="flight">

      <div class="from_container">
        <p>#from_city#</p>
        <p>Departure: #departure_time#</p>
      </div>

      <div class="to_container">
        <p>#to_city#</p>
        <p>Arrival: #arrival_time#</p>
      </div>

    </div>

  </div>

  <script src="app.js"></script>

</body>
</html>










