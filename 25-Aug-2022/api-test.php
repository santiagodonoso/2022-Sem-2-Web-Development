<?php

// Check if the variables exist
if( ! isset( $_GET['first_name'] ) ){
  http_response_code(400);
  echo json_encode(['info'=>'missing first_name']);
  exit();
}

if( ! isset( $_GET['last_name'] ) ){
  http_response_code(400);
  echo json_encode(['info'=>'missing last_name']);
  exit();
}

if( strlen($_GET['first_name']) < 2 ){
  http_response_code(400);
  echo json_encode(['info'=>'first_name at least 2 chars']);
  exit();
}

if( strlen($_GET['first_name']) > 50 ){
  http_response_code(400);
  echo json_encode(['info'=>'first_name max 5 chars']);
  exit();
}

if( strlen($_GET['last_name']) < 2 ){
  http_response_code(400);
  echo json_encode(['info'=>'last_name at least 2 chars']);
  exit();
}

if( strlen($_GET['last_name']) > 50 ){
  http_response_code(400);
  echo json_encode(['info'=>'last_name max 5 chars']);
  exit();
}

// Success
// $response = ['info'=>'Hi '.$_GET['first_name'].' '.$_GET['last_name']];
$response = ['info'=>"Hi {$_GET['first_name']} {$_GET['last_name']}"];
echo json_encode($response);





