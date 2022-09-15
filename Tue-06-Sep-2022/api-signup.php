<?php
require_once __DIR__.'/_x.php';

_validate_user_name();
_validate_user_last_name();
_validate_email();

$user = [
  'user_id' => uniqid(),
  'user_name' => $_POST['user_name'],
  'user_last_name' => $_POST['user_last_name'],
  'user_email' => $_POST['email']
];

// Success
_respond($user);














