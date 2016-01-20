<?php
  //Login page
  require_once("includes/header.php");
  require_once "../includes/logic/login.php";
  if(isset($_SESSION['use_id']))
  {
    header('Location: admin.php');
  }
?>
<section class="reservation-display full">
  <?php foreach($errors as $error) : ?>
    <span class="error">
        <p><?=$error; ?></p>
      </span>
  <?php endforeach;?>
  <section class="login">
    <form action="index.php" method="post">
      <span class="loginInputContainer">
        <label for="gebruikersnaam">Gebruikersnaam:</label>
        <input type="text" name="username" />
      </span>
      <span class="loginInputContainer">
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" name="password" />
      </span>
      <input type="submit" value="Inloggen" class="send-button"/>
    </form>
  </section>
</section>
<?php
  require_once "includes/footer.php";
?>
