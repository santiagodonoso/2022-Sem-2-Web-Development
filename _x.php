<?php
define('_ITEM_NAME_MIN_LEN', 2);
define('_ITEM_NAME_MAX_LEN', 10);

// ##############################
function _validate_item_name(){
  $error_message = 'item_name min 2 max 10 characters';
  if( ! isset($_POST['item_name']) ){
    _respond(500);
  }
}

// ##############################
function _respond( $message = '',  $http_response_code = 200 ){
  header('Content-Type: application/json');
  http_response_code($http_response_code);
  $response = ['info'=>$message];
  echo json_encode($response);
  exit();
}







