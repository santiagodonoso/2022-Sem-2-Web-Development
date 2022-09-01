<?php
// The user will never see this page
// This page takes the user back to the login if there is an error
// If the login is OK it takes the user to the admin page


// TODO: Validate
// TODO: Connect to the database

$correct_email = 'a@a.com';
$correct_password = 'pass';
$user_name = 'Santiago';

if(  $correct_email != $_POST['email']  ){
  header('Location: login.php');
  exit();
}

if(  $correct_password != $_POST['password']  ){
  header('Location: login.php');
  exit();
}

// Single vs double


// Success
header("Location: admin.php?first-name=$user_name");
// header('Location: admin.php?first-name='.$user_name);


?>