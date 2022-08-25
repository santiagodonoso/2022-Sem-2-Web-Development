<?php
ini_set('display_errors', '1');
// API return data (JSON), not HTML
// API success (200) or error (400)
// Test the API with Postman or Thunderclient
// Never test the API with the browser
// PHP is not native to JSON, but there are options
//          key        value
$cities = ['city_name'=>'a', 'city_name'=>'b']; // Assosiative array
//header('Content-Type: application/json');
// json_encode converts an array into text
http_response_code(400);
echo json_encode($cities);
?>