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

     /* Verbindung aufnehmen */
    $con = mysqli_connect("", "root");
    /* Datenbank auswählen */
    mysqli_select_db($con, "login");
    $sql = "SELECT * FROM anmeldedaten;";
    $res = mysqli_query($con, $sql);
    $num = mysqli_num_rows($res);
    if ($num > 0)
    {
        echo "Ergebnis:<br>";
    }
    else {
        echo "Keine Ergebnise<br>";
    }
    /* User, Passwort und Datum */
    while ($dsatz = mysqli_fetch_assoc($res)){
        echo $dsatz["user"] . " mit dem Passwort " . $dsatz["pw"] . " hat sich am " . $dsatz["datum"] ." angemeldet<br>";
    }
    /* Verbindung schließen */
    mysqli_close($con);
    }

?>



</body>
</html>