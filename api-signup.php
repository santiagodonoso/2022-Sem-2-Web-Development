<?php

require_once __DIR__.'/_x.php';

// Validate the data
if( ! isset($_POST['user_name']) ){
  http_response_code(400);
  echo json_encode(['info'=>'user_name missing']);
  exit();
}
if( strlen($_POST['user_name']) < NAME_MIN_LEN ){
  http_response_code(400);
  echo json_encode(['info'=>'user_name min '.NAME_MIN_LEN.' characters']);
  exit(); 
}
if( strlen($_POST['user_name']) > NAME_MAX_LEN ){
  http_response_code(400);
  echo json_encode(['info'=>'user_name max '.NAME_MAX_LEN.' characters']);
  exit(); 
}

// Success
echo json_encode(['info'=>'ok']);




