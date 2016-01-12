<?php
//  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require_once "includes/oldfasion/add.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <title>Pannekoeckenhuys Restaurant De Hannebroeck </title>
  <meta name="Description" lang="nl" content="Landgoed De Hannebroeck is gelegen aan de rand van de Boswachterij Dorst en bestaat uit een Pannekoeckenhuys-Restaurant en een Chaletpark.">
  <meta name="Keywords" content="Chalet, Chaletpark, Kamperen, Bungalow, Huisjes, Vrije, Tijd, vakantie, vacantie, vakantiehuisje, vakantiehuisjes, Caravanpark, stacaravan, trailer">
  <meta name="Author" content="Pannekoeckenhuys Restaurant De Hannebroeck ">
  <meta name="URL" content="http://www.pannenkoekenhuis-restaurant-dehannebroeck.nl">
  <meta name="language" content="nl">
  <meta name="copyright" content="Pannekoeckenhuys Restaurant De Hannebroeck ">
  <meta name="robots" content="index, follow">
  <meta name="reply-to" content="info@hannebroeck.nl">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="css/hannebroek_pannenkoek.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/menu_style.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="js/jquery-ui-1.11.4.custom/jquery-ui.min.css">
  <link rel="stylesheet" href="js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css">
  <link rel="stylesheet" href="./css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8">
  <script src="js/jquery-1.4.4.min.js" type="text/javascript" charset="utf-8"></script><style type="text/css"></style>
  <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvkmI2MEQbZN4BNENk-CUwe1hZBLqenY8&callback=initMap" async defer>
  </script>
</head>

<body cz-shortcut-listen="true">
<div id="container">
  <div id="header">
    <div>
      <a href="http://www.pannenkoekenhuis-restaurant-dehannebroeck.nl" title="Keer terug naar de homepage van Pannekoeckenhuys Restaurant De Hannebroeck " class="klikhomepage">&nbsp;</a>
    </div>
  </div>
  <div id="keuze">
    <div>
      <div class="menu">
        <ul>
          <li>
            <a href="index.html" title="HOME">HOME</a>
          </li>
          <li>
            <a href="historie.html" title="HISTORIE">HISTORIE</a>
          </li>
          <li>
            <a href="menukaart" title="MENUKAART">MENUKAART</a>
          </li>
          <li>
            <a href="index.php?n1_id=4&amp;pagina=bruiloften-en-partijen" title="BRUILOFTEN EN PARTIJEN">BRUILOFTEN EN PARTIJEN</a>  </li>
          <li>
            <a href="index.php?n1_id=5&amp;pagina=openingstijden" title="OPENINGSTIJDEN">OPENINGSTIJDEN</a>
          </li>
          <li>
            <a href="reserveren.php">RESERVEREN</a>
          </li>
          <li>
            <a href="contact.php" title="CONTACT">CONTACT</a>
          </li>
          <li>
            <a href="http://www.camping-chaletpark-dehannebroeck.nl/" title="CHALETPARK">CHALETPARK</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="inhoud">
    <div class="reservation">
      <h1>Reserveren</h1>
      <article>
        <p>
          U kunt bij ons zo binnenlopen zonder een reservering. Wilt u liever toch reserveren, dan is dat mogelijk op
          bepaalde dagen. Reserveren kan via onderstaand formulier of telefonisch door te bellen met 0161-411458.
          Op zon- en feestdagen kunt u bij ons helaas geen tafel reserveren.
        </p>
        <div id="google-maps">
<!--          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.876724903711!2d4.857674215343912!3d51.6071473112267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c698c14b4486eb%3A0x49721fc464c495cb!2sDe+Hannebroeck!5e0!3m2!1snl!2snl!4v1450105237011" width="250" height="200" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>-->
        </div>
        <p>
          Het pannekoeckenhuys-restaurant de Hannebroeck
          is gevestigd op:
        </p>
        <p>
          <ul>
            <li>Hoevestraat 12</li>
            <li>4903 RR Oosterhout</li>
          </ul>
        </p>
        <p>
          Het pannekoeckenhuys-restaurant is gelegen aan de
          rand van de Boswachterij Dorst.
        </p>
      </article>
      <span class="reservation-warning">
        Let op! Uw reservering wordt pas definitief als u een e-mail ontvangt met daarin dat de reservering is goedgekeurd.
      </span>
      <?php foreach($errors as $error) : ?>
      <span class="error">
        <p><?=$error; ?></p>
      </span>
      <?php endforeach;?>

      <form action="reserveren.php" method="POST">
        <span class="personal-info">
          <h3>Persoonlijke gegevens</h3>
          <label>(* = verplicht)</label>
            <label for="name">Naam*:</label>
            <input type="text" name="name" value="<?= $name; ?>">
            <label for="email">E-mail adres*:</label>
            <input type="email" name="email" value="<?= $email; ?>">
            <label for="phone">Telefoonnummer*:</label>
            <input type="text" name="phone" value="<?= $phone; ?>">
<!--            <label for="anti-spam">Anti-SPAM; Geef antwoord op deze som*:</label>-->
<!--            <span>--><?//= $a; ?><!-- + --><?//= $b; ?><!-- = </span><input type="number" name="answer" min="0">-->
        </span>
        <span class="form-reservation">
          <h3>Reservering</h3>
            <label for="date">Datum*:</label>
            <section class="calender-container">
              <span class="calender" id="mydate">
                <input type="text" size="8" name="date" id="date" value="<?= $date; ?>"/>
              </span>
            </section>
            <label for="time">Tijd*:</label>
            <input type="time" name="res-time" min="11:00" max="19:00" step="1800"  value="<?= $time; ?>"/>
<!--          <span class="legend">-->
<!--            <ul>-->
<!--              <li>-->
<!--                <span class="legend-green available"></span> = beschikbaar-->
<!--              </li>-->
<!--              <li>-->
<!--                <span class="legend-red unavailable"></span> = niet beschikbaar-->
<!--              </li>-->
<!--              <li>-->
<!--                <span class="legend-blue selected"></span> = uw selectie-->
<!--              </li>-->
<!--            </ul>-->
<!--          </span>-->
            <label for="persons">Aantal personen*:</label>
            <select name="persons" id="persons" value="<?= $persons; ?>">
              <option value="1">1 persoon</option>
              <option value="2">2 personen</option>
              <option value="3">3 personen</option>
              <option value="4">4 personen</option>
              <option value="5">5 personen</option>
              <option value="6">6 personen</option>
              <option value="7">7 personen</option>
              <option value="8">8 personen</option>
              <option value="9">9 personen</option>
              <option value="10">10 personen</option>
              <option value="11">11 personen</option>
              <option value="12">12 personen</option>
            </select>
          <h3>Extra informatie</h3>
            <label for="kids10">Aantal kinderen tot 10 jaar</label>
            <select name="children" id="kids10" value="<?= $name; ?>">
              <option value="0">Geen</option>
              <option value="1">1 kind</option>
              <option value="2">2 kinderen</option>
              <option value="3">3 kinderen</option>
              <option value="4">4 kinderen</option>
              <option value="5">5 kinderen</option>
              <option value="6">6 kinderen</option>
              <option value="7">7 kinderen</option>
              <option value="8">8 kinderen</option>
              <option value="9">9 kinderen</option>
              <option value="10">10 kinderen</option>
              <option value="11">11 kinderen</option>
            </select>
          <div class="clear"></div>
          <input type="submit" value="Volgende" name="submit" class="send-button" >
        </span>
      </form>
    </div>
  </div>
  <div id="rechts">
    <div>
      <a href="http://www.camping-chaletpark-dehannebroeck.nl/" title="Klik hier om naar de website van Chaletpark de Hannebroeck te gaan.">
        <img class="welkomimg" src="images/site/welkom-chaletpark-de-hannebroeck3.png" alt="Klik hier om naar de website van Chaletpark de Hannebroeck te gaan." border="0">
      </a>
      <div id="kop_rechts1">
        <div>Landgoed de Hannebroeck</div>
      </div>
      <p class="uitgelicht_tekst">
        Landgoed De Hannebroeck is gelegen aan de rand van de Boswachterij Dorst en bestaat uit een
        Pannekoeckenhuys-Restaurant en een Chaletpark.
      </p>
      <p class="leesverdertxt">
        <a href="index.html" title="Ga naar de homepage van Pannekoeckenhuys Restaurant De Hannebroeck ">[homepage]</a>
      </p>

      <div id="kop_rechts3">
        <div>Pannekoeckenhuys Restaurant De Hannebroeck </div>
      </div>
      <p>
        Hoevestraat 12
        <br>
        4903 RR  Oosterhout
        <br>
        <br>
        0161-411458
        <br>
        <br>
        <a href="mailto:info@hannebroeck.nl">
          info@hannebroeck.nl
        </a>
      </p>
      <div id="kop_rechts5">
        <div>Reservering</div>
      </div>
      <p>
        Vanaf nu kunt u ook online reserveren. Ga naar reservering en reserveer een tafel bij het
        Pannekoeckenhuys - restaurant de Hannebroeck.
      </p>
      <p class="leesverdertxt">
        <a href="reserveren.php" title="Ga naar de homepage van Pannekoeckenhuys Restaurant De Hannebroeck ">[Ga naar reserveren]</a>
      </p>
    </div>
  </div>
  <br class="clear">
  <!--    <div id="footerimg"><div>&nbsp;</div></div> -->
  <div id="footer"><div>|&nbsp;
      <a href="index.php?n1_id=1" title="Home bij Pannekoeckenhuys Restaurant De Hannebroeck ">Home</a>&nbsp;|&nbsp;
      <a href="index.php?n1_id=2" title="Historie bij Pannekoeckenhuys Restaurant De Hannebroeck ">Historie</a>&nbsp;|&nbsp;
      <a href="index.php?n1_id=3" title="Menukaart bij Pannekoeckenhuys Restaurant De Hannebroeck ">Menukaart</a>&nbsp;|&nbsp;
      <a href="index.php?n1_id=4" title="Bruiloften en Partijen bij Pannekoeckenhuys Restaurant De Hannebroeck ">Bruiloften en Partijen</a>&nbsp;|&nbsp;
      <a href="index.php?n1_id=5" title="Openingstijden bij Pannekoeckenhuys Restaurant De Hannebroeck ">Openingstijden</a>&nbsp;|&nbsp;
      <a href="reserveren.php" title="Online reserveren bij Pannekoeckenhuys Restaurant De Hannebroeck ">Reserveren</a>&nbsp;|&nbsp;
      <a href="contact.php" title="Contact bij Pannekoeckenhuys Restaurant De Hannebroeck ">Contact</a>&nbsp;|&nbsp;
      <a href="http://www.camping-chaletpark-dehannebroeck.nl/" title="Chaletpark bij Pannekoeckenhuys Restaurant De Hannebroeck ">Chaletpark</a>&nbsp;|&nbsp;
    </div></div>

</div>

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/googleMaps.js"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

</body>
</html>