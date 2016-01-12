<?php
    require_once "sql/reservations.php";
?>
      <section class="sidebar">
      <form id="logout" action="../includes/oldfasion/logout.php">
          <input type="submit" value="Uitloggen" class="logout"/>
      </form>
        <div class="admin-nav">
            <span class="title">
                <h3>Aantal reserveringen</h3>
            </span>
            <span class="count-res">
            <h3><?= $total; ?> reserveringen totaal</h3>
            <a href="admin.php">[Ga naar overzicht reserveringen]</a>
            </span>
        </div>
        <div class="admin-nav">
            <span class="title">
                <h3>Aantal nieuwe reserveringen</h3>
            </span>
            <span class="count-res">
                <h3>4 nieuwe reserveringen</h3>
                <a href="new-reservation.php">[Ga naar nieuwe reserveringen]</a>
            </span>
        </div>
        <div class="admin-nav">
            <span class="title">
                <h3>Aantal reserveringen vandaag</h3>
            </span>
            <span class="count-res">
                <h3>Vandaag 5 reserveringen</h3>
                <a href="today-reservation.php">[Ga naar vandaag reserveringen]</a>
            </span>
            <div class="clear"></div>
        </div>
      </section>