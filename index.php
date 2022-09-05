<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
  // Text
  $data = file_get_contents('dictionary.txt');
  // Convert the "array text" into a real array
  // json_encode // object to text
  // json_decode // text to object
  // Convert $data into an object
  // $data = json_decode($data);

  // $_GET['name']
  // $_POST['name']
  // $_SESSION['name']

  // $data = json_decode($data);
  // $data->en_title

  // the true means assoc array
  $data = json_decode($data, true);
  // $data['en_title'] 
  ?>

  <h1>
    <?php // $data->en_title ?>
    <?= $data['en_title'] ?>
  </h1>

</body>
</html>