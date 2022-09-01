<?php
$correct_email = 'a@a.com';
// VALIDATE
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){
  header('Location: login.php');
  exit();
}
// Check if the user's email matches the correct email
if( $_POST['email']  != $correct_email ){
  header('Location: login.php');
  exit();
}

// Success
session_start();
$_SESSION['user_name'] = 'Santiago';
header('Location: admin.php');






