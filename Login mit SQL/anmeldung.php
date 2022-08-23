<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Login Seite</title>
  <link rel="stylesheet" href="css/style.css">



</head>
<body>

<div id="bg"></div>

<form action="index.php" method="POST">
  <div class="form-field">
    <input type="text" name="user" maxlength="255" minlength="3" placeholder="Benutzername" pattern="[A-Z]{0, }[a-z]{0, }[0-9]{0, }" autofocus require>
  </div>
  
  <div class="form-field">
    <input type="passwort" name="pw" maxlength="255" minlength="8" placeholder="Passwort" pattern="[A-Z]{1}[a-z]{1, }[0-9]{1, }" title="Erst ein Großbuchstabe dann kleinbuchstaben und dann zahlen" require>                         
  </div>

  <div class="form-field">
    <input type="password" name="pwr" placeholder="Passwort wiederholen">                         
  </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Jetzt registrieren</button>
  </div>


</form>
  
</body>
</html>