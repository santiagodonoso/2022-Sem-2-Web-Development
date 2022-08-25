<?php
// API does not return text or html. JSON is ok
// API must validate
// API doesn't close the PHP tag
// API success 200 or error 400
// API should echo only once

// Pagination getting 2 fligts per page

// number -1 + 2 the page number
// Page number is 1
// 

$flights = [
  ['name'=>'1'],
  ['name'=>'2'],
  ['name'=>'3'],
  ['name'=>'4'],
  ['name'=>'5'],
  ['name'=>'6'],
  ['name'=>'7'],
  ['name'=>'8'],
  ['name'=>'9'],
  ['name'=>'10']
];

// Validate
if(  ! ctype_digit($_GET['page'])  ){
  http_response_code(400);
  echo json_encode(['info'=>'pagination only allows numbers']);
  exit();
}

if(  $_GET['page'] < 0  ){
  http_response_code(400);
  echo json_encode(['info'=>'pagination must be at least 1']);
  exit();
}

if(  $_GET['page'] > 5  ){
  http_response_code(400);
  echo json_encode(['info'=>'pagination cannot be more than 5']);
  exit();
}

$page_number = $_GET['page'];
$search_to = $page_number + 2;
$results = [];
for( $i = $page_number; $i < $search_to; $i++ ){
  array_push($results, $flights[$i]);
}


echo json_encode($results );








