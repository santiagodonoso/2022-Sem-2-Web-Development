<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="final_css.css">

</head>
<body>
  
  <form>
    <input type="text" id="from_city">
  </form>

  <div id="from_results">
    <div class="from_result" onclick="select_city()">
      <img src="" alt="">
      <div>
        <p class="city_name">City A</p>
        <p>City Airport A</p>
      </div>
    </div>
    <div class="from_result" onclick="select_city()">
      <img src="" alt="">
      <div>
        <p class="city_name">City B</p>
        <p>City Airport B</p>
      </div>
    </div>
    <div class="from_result" onclick="select_city()">
      <img src="" alt="">
      <div>
        <p class="city_name">City C</p>
        <p>City Airport C</p>
      </div>
    </div>        
  </div>

  <script src="app.js"></script>

</body>
</html>