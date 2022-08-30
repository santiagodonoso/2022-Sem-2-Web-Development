<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body oncontextmenu="return false;">

  <header>  
    <div>
      <img src="logo.png" alt="momondo.png">
    </div>
    <div>
      <a href="trips">Trips</a>
      <a href="login">Login</a>
      <a href="danish">&#127988; Dansk</a>
    </div>
  </header>

  <div id="flights-search">
    <form>
      <div id="from-container">
        <input id="from-input" type="text" placeholder="from" 
          oninput="show_from_results()"
          onblur="hide_from_results()"
        >
        <div id="from-results">

        </div>
      </div>
    </form>
  </div>

  <div id="main">
    <div id="left">
      left
    </div>
    <div id="right">
      right
    </div>
  </div>

  <footer>
    footer
  </footer>

  <script src="app.js"></script>

</body>
</html>