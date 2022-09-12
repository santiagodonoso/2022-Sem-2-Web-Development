<?php
// Validate the flight id
// 1, 2, 3, 4
if( ! isset($_POST['flight_id']) ){
  http_response_code(400);
  echo 'flight_id missing';
  // echo json_encode(['info'=>'flight_id missing']);
  exit();
}

if( ! ctype_digit($_POST['flight_id']) ){
  http_response_code(400);
  echo 'flight_id must be a digit';
  // echo json_encode(['info'=>'flight_id must be a digit']);
  exit();  
}

// TODO: Delete the flight from the database


// Success
echo "flight_id {$_POST['flight_id']}";
// echo json_encode(['info'=>'flight delete', 'flight_id'=>$_POST['flight_id']]);











