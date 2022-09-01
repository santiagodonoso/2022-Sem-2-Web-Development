<?php
$_title = 'Login';
require_once __DIR__.'/comp_header.php';
?>

<main>
  <form action="bridge-login.php" method="POST">
    <input name="email" type="text" placeholder="email">
    <button>Login</button>
  </form>
</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>