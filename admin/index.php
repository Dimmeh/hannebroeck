<?php 
  require_once("header.php");
?>
<section class="reservation-display">
  <h3>Overzicht reserveringen</h3>
  <button class="add">Toevoegen</button>
  <table class="summary-reservations">
    <thead>
    <tr>
      <th>#</th>
      <th>Naam</th>
      <th>Datum</th>
      <th>Tijd</th>
    </tr>
    </thead>
    <tbody>
      <?php if($result->num_rows> 0):
              while($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['res_id']; ?></td>
        <td><?= $row['res_name'] ;?></td>
        <td><?= $row['res_date'] ;?></td>
        <td><?= $row['res_time'] ;?></td>
      </tr>
      <?php endwhile ?>
      <?php endif ?>
    </tbody>
  </table>
</section>
<?php
  require_once("sidebar.php");
  require_once("footer.php");
?>
