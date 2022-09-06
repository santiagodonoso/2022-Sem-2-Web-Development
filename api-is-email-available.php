<?php

$email_already_in_system = 'a@a.com';

if( $email_already_in_system == $_POST['email'] ){
  http_response_code(400);
  exit();
}

// Success

