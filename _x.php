<?php
define('_ITEM_NAME_MIN_LEN', 2);
define('_ITEM_NAME_MAX_LEN', 10);

// ##############################
function _validate_item_name(){
  $error_message = 'item_name min 2 max 10 characters';
  if( ! isset($_POST['item_name']) ){
    _respond();
  }
}

// ##############################
function _respond(){
  http_response_code(400);
  $response = ['info'=>'upsss...'];
  echo json_encode($response);
  exit();
}







