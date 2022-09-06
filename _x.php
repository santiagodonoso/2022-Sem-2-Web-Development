<?php
define('_ITEM_NAME_MIN_LEN', 2);
define('_ITEM_NAME_MAX_LEN', 10);

// ##############################
function _validate_item_name(){
  $error_message = 'item_name min 2 max 10 characters';
  if( ! isset($_POST['item_name']) ){ _respond($error_message, 400); }
  $_POST['item_name'] = trim($_POST['item_name']);
  if( strlen($_POST['item_name']) < _ITEM_NAME_MIN_LEN ){ _respond($error_message, 400); }   
  if( strlen($_POST['item_name']) > _ITEM_NAME_MAX_LEN ){ _respond($error_message, 400); }   
  return $_POST['item_name'];
}

// ##############################
function _respond( $message = '',  $http_response_code = 200 ){
  header('Content-Type: application/json');
  http_response_code($http_response_code);
  $response = is_array($message) ? $message : ['info'=>$message];
  echo json_encode($response);
  exit();
}







