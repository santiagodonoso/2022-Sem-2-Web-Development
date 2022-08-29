<?php
session_start();
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