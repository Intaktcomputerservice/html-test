<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Login Seite</title>
  <link rel="stylesheet" href="css/style.css">



</head>
<body>
<!-- <div id="bg"></div> -->
<?php
  if(isset($_POST["user"])) 
    {
      $user = $_POST["user"];
      $pw = $_POST["pw"];
      $exist = false;
     /* Verbindung aufnehmen */
    $con = mysqli_connect("", "root");
    /* Datenbank auswählen */
    mysqli_select_db($con, "login");

    $sql = "SELECT * FROM anmeldedaten;";
    $res = mysqli_query($con, $sql);
    
    while ($dsatz = mysqli_fetch_assoc($res)){
        if ($dsatz["user"] == $user)
        {
          
          $exist = true;
        }

    }
    if (!$exist) {
      $sql = "INSERT INTO anmeldedaten (user, pw) VALUES";
      $sql .= "('" . $user . "', '" . $pw . "');";
      mysqli_query($con, $sql);
    }
    else {
      echo "User bereits vorhanden!!!!";
    }

    /* Verbindung schließen */
    mysqli_close($con);
    }

?>

<form action="konto.php" method="POST" autocomplete="off">
  <div class="form-field">
    <input type="text"  name="user" placeholder="Benutzername" autofocus required>
  </div>
  
  <div class="form-field">
    <input type="password" name="pw" placeholder="Passwort" required>                         
  </div>
  
  <div class="form-field">
    <button class="btn" type="submit">anmelden</button>
  </div>
  <div class="form-field">
   <a href="anmeldung.php"> registrieren </a>
  </div>

</form>


</body>
</html>