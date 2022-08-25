<?php
ini_set('display_errors', '1');
// API must validate
// API return data (JSON), not text, HTML
// API success (200) or error (400)
// Test the API with Postman or Thunderclient
// Never test the API with the browser
// PHP is not native to JSON, but there are options
//          key        value
// Multidimensional Assosiative array

$search_for = $_GET['city_name'];

if( ! isset($_GET['city_name']) ){
  http_response_code(400);
  echo json_encode(['info'=>'missing city_name variable']);
  exit();
}


// Defensive programming - Paranoid
if( strlen($search_for) < 1 ){
  http_response_code(400);
  echo json_encode(['info'=>'city name is too short']);
  exit();
}

if( strlen($search_for) > 5 ){
  http_response_code(400);
  echo json_encode(['info'=>'city name is too long']);
  exit();
}

echo $search_for;
exit();

$cities = [
  ['city_name'=>'a'],
  ['city_name'=>'b'],
  ['city_name'=>'c'],
  ['city_name'=>'Copenhagen'],
]; 
//header('Content-Type: application/json');
// json_encode converts an array into text
// http_response_code(200);
echo json_encode($cities);


