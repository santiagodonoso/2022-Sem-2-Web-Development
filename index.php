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
  
  <form>
    <input type="text" id="from_city">
  </form>

  <div id="from_results">
    <div class="from_result" onclick="select_city()">
      A
    </div>
    <div class="from_result" onclick="select_city()">
      B
    </div>    
    <div class="from_result" onclick="select_city()">
      C
    </div>    
  </div>

  <script src="app.js"></script>

</body>
</html>