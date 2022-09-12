<?php

try{
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $q = $db->prepare('SELECT * FROM flights WHERE from_city_name LIKE :from_city');
  $q->bindValue(':from_city', '%'.$_GET['from_city'].'%');
  $q->execute();
  $users = $q->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($users);
}
catch(Exception $ex){
  echo 'error';
}

