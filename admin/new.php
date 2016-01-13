<?php
session_start();
require_once("header.php");
require_once "../includes/oldfasion/reservations.php";
require_once("../includes/oldfasion/session.php");
?>
    <section class="reservation-display">
        <div class="admin-title-container">
            <h3>Overzicht reserveringen</h3>
            <button class="add">
                <a href="reservation.php">Toevoegen</a>
            </button>
        </div>
        <?php if($resultStatusNew->num_rows > 0): ?>
            <table class="summary-reservations">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Naam</th>
                    <th>Datum</th>
                    <th>Tijd</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php while($row = $resultStatusNew->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['res_id']; ?></td>
                        <td><?= $row['res_name'] ;?></td>
                        <td><?= date('d-m-Y', strtotime($row['res_date']));?></td>
                        <td><?= $row['res_time'] ;?></td>
                        <td><a href="details.php?getId=<?= $row['res_id']; ?>">Meer details</a></td>
                    </tr>
                <?php endwhile ?>
                </tbody>
            </table>
        <?php else:?>
            <p>Er zijn geen nieuwe reserveren.</p>
        <?php endif ?>
    </section>
<?php
require_once("sidebar.php");
require_once("footer.php");
?>