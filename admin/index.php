<?php 
  require_once("header.php");
  require_once "../includes/oldfasion/login.php";
?>
<section class="reservation-display">
  <?php foreach($errors as $error) : ?>
    <span class="error">
        <p><?=$error; ?></p>
      </span>
  <?php endforeach;?>
  <form action="index.php" method="post">
    <label for="gebruikersnaam">Gebruikersnaam:</label>
    <input type="text" name="username" />
    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="password" />
    <input type="submit" value="Inloggen" />
  </form>
</section>
<?php
  require_once("footer.php");
?>
