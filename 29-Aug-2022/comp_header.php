<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $_title ?? 'Upppsss....' ?>
  </title>
</head>
<body>
  
  <nav>
    <a href="/">Home</a>


    <?php
    ini_set('display_errors', 0);
    session_start();
    // If the user is logged show the admin link
    if( $_SESSION ){
      echo '<a href="admin.php">Admin</a>';
    }
 
    
    if( ! $_SESSION ){
      echo '<a href="login.php">Login</a>';
    }
    


=======
    ?>
    



    <a href="login.php">Login</a>



    <?php
>>>>>>> dea613cfcac84006f710b7fb43c09e3692510817
    if( $_SESSION ){
      echo '<a href="logout.php">Signout</a>';
    }
    ?>
    






  </nav>