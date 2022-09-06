<?php
define('_ITEM_NAME_MIN_LEN', 2);
define('_ITEM_NAME_MAX_LEN', 10);
define('_ITEM_PRICE_REGEX', '/[1-9][0-9]*\.[0-9]{2}/');

define('_USER_NAME_MIN_LEN', 2);
define('_USER_NAME_MAX_LEN', 20);
define('_USER_LAST_NAME_MIN_LEN', 2);
define('_USER_LAST_NAME_MAX_LEN', 20);

define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

// ##############################
function _validate_item_price(){
  $error_message = 'item_price must be a whole number or have two decimals';
  if(!isset($_POST['item_price'])){ _respond($error_message, 400); }
  
}


// ##############################
function _validate_email(){
  $error_message = 'email missing or invalid';
  if( ! isset($_POST['email']) ){ _respond($error_message, 400); }
  $_POST['email'] = trim($_POST['email']);
  if( ! preg_match(_REGEX_EMAIL, $_POST['email']) ){ _respond($error_message, 400); }
  return $_POST['email'];
}


// ##############################
function _validate_item_name(){
  $error_message = 'item_name min '._ITEM_NAME_MIN_LEN.' max '._ITEM_NAME_MAX_LEN.' characters';
  if( ! isset($_POST['item_name']) ){ _respond($error_message, 400); }
  $_POST['item_name'] = trim($_POST['item_name']);
  if( strlen($_POST['item_name']) < _ITEM_NAME_MIN_LEN ){ _respond($error_message, 400); }   
  if( strlen($_POST['item_name']) > _ITEM_NAME_MAX_LEN ){ _respond($error_message, 400); }   
  return $_POST['item_name'];
}

// ##############################
function _validate_user_name(){
  $error_message = 'user_name min '._USER_NAME_MIN_LEN.' max '._USER_NAME_MAX_LEN.' characters';
  if( ! isset($_POST['user_name']) ){ _respond($error_message, 400); }
  $_POST['user_name'] = trim($_POST['user_name']);
  if( strlen($_POST['user_name']) < _USER_NAME_MIN_LEN ){ _respond($error_message, 400); }   
  if( strlen($_POST['user_name']) > _USER_NAME_MAX_LEN ){ _respond($error_message, 400); }   
  return $_POST['user_name'];
}

// ##############################
function _validate_user_last_name(){
  $error_message = 'user_last_name min '._USER_LAST_NAME_MIN_LEN.' max '._USER_LAST_NAME_MAX_LEN.' characters';
  if( ! isset($_POST['user_last_name']) ){ _respond($error_message, 400); }
  $_POST['user_last_name'] = trim($_POST['user_last_name']);
  if( strlen($_POST['user_last_name']) < _USER_LAST_NAME_MIN_LEN ){ _respond($error_message, 400); }   
  if( strlen($_POST['user_last_name']) > _USER_LAST_NAME_MAX_LEN ){ _respond($error_message, 400); }   
  return $_POST['user_last_name'];
}

// ##############################
function _respond( $message = '',  $http_response_code = 200 ){
  header('Content-Type: application/json');
  http_response_code($http_response_code);
  $response = is_array($message) ? $message : ['info'=>$message];
  echo json_encode($response);
  exit();
}







