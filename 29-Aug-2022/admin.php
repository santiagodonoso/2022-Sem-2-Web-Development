<?php
session_start();
<<<<<<< HEAD
if( ! $_SESSION ){
  header('Location: login.php');
  exit();
}

=======
>>>>>>> dea613cfcac84006f710b7fb43c09e3692510817
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