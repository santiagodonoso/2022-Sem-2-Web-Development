<?php
try{
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('SELECT * FROM flights');
  $q->execute();
  $flights = $q->fetchAll(PDO::FETCH_ASSOC);
  // echo json_encode($flights);
}catch(Exception $ex){
  echo "Sorry went terribly wrong";
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <main>
    <?php
    foreach($flights as $flight){
    ?>

    <form>
      <div>
        <img src="" alt="the image">
        <span>
          <?= $flight['from_city'] ?>
        </span>
        <span>
          <?= $flight['to_city'] ?>
        </span>
          <input style="display:none" 
          name="flight_id" 
          value="<?= $flight['id'] ?>" 
          type="text">
          <input name="lastname" type="text" placeholder="lastname">
          <button type="button" onclick="delete_flight()">
            🗑️ Delete
          </button>
        </div>
      </form>

    <?php
    }
    ?>
  </main>


  <script>
    async function delete_flight(){
      const frm = event.target.form
      console.log(frm)
      const conn = await fetch('api-delete-flight.php', {
        method : "POST",
        body : new FormData(frm)
      })
      const data = await conn.json()
      if( ! conn.ok ){
        // Sweet alert: ups... fligth not found
        console.log(data)
        return
      }
      // Success
      console.log(data)
      frm.remove()
    }
  </script>


</body>
</html>