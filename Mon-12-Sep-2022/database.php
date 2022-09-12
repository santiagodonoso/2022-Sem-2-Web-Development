<?php
try{
  $from_city = $_GET['from_city'] ?? 0;
  // Connect to the database
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('SELECT * FROM flights WHERE from_city_name LIKE :from_city');
  $q->bindValue(':from_city', '%'.$from_city.'%');
  $q->execute();
  $flights = $q->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($flights);
}catch(Exception $ex){
  // echo $ex;
  http_response_code(400);
  echo json_encode(['info'=>'upppsss...']);
}
