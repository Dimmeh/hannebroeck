<?php
    require_once "sql/countReservations.php";
?>
      <section class="sidebar">
      <form id="logout" action="../includes/logic/logout.php">
          <input type="submit" value="Uitloggen" class="logout"/>
          <div class="clear"></div>
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
                <h3><?= $new; ?> nieuwe reserveringen</h3>
                <a href="new.php">[Ga naar nieuwe reserveringen]</a>
            </span>
        </div>
        <div class="admin-nav">
            <span class="title">
                <h3>Aantal reserveringen op <?= $day;?> <?= $translateMonth; ?></h3>
            </span>
            <span class="count-res">
                <h3><?= $today ;?> reserveringen totaal</h3>
                <a href="today.php">[Ga naar vandaag reserveringen]</a>
            </span>
            <div class="clear"></div>
        </div>
      </section>