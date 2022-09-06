<?php
session_start();

if( ! $_SESSION ){
  header('Location: login.php');
  exit();
}

$_title = "Hi {$_SESSION['user_name']}";
// $_title = 'Hi '.$_SESSION['user_name'];
require_once __DIR__.'/comp_header.php';
?>

<main>
  Admin
</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>