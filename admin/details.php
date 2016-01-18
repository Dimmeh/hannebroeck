<?php
    require_once "header.php";
    require_once "../includes/oldfasion/detail.php";
?>
    <section class="reservation-display">
        <?php foreach($errors as $error) : ?>
            <span class="error">
        <p><?=$error; ?></p>
      </span>
        <?php endforeach;?>
        <div class="admin-title-container">
            <?php if($result->num_rows> 0):
                while($row = $result->fetch_assoc()):
            ?>
            <h3>Reservering #<?= $row['res_id'];?> | <?= $row['res_name']?></h3>
            <button class="add">
                <a href="reservation.php">Toevoegen</a>
            </button>
            <button class="add">
                <a href="edit.php?getId=<?= $row['res_id']; ?>">
                    <figure>
                        <img src="../images/edit.png" alt="" class="edit">
                    </figure>
                    Bewerken
                </a>
            </button>
        </div>
        <div class="details-container">
            <div class="details-block">
                <span class="details-title">
                    <p>Persoonlijke gegevens</p>
                </span>
                <table class="detail-name">
                    <tr>
                        <td>Naam:</td>
                        <td><?= $row['res_name'];?></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><?= $row['res_email'];?></td>
                    </tr>
                    <tr>
                        <td>Telefoon:</td>
                        <td><?= $row['res_phone'];?></td>
                    </tr>
                </table>
            </div>
            <div class="details-block">
                <span class="details-title">
                    <p>Status</p>
                </span>
                <table class="detail-status">
                    <?php
                        if($row['res_status'] == 0)
                        {
                    ?>
                    <tr>
                        <td>
                            <figure>
                                <img src="../images/incorrect.png" alt="">
                            </figure>
                            <p>Afgekeurd</p>
                        </td>
                    </tr>
                    <?php
                        }
                        else if($row['res_status'] == 1)
                        {
                    ?>
                    <tr>
                        <td>
                            <figure>
                                <img src="../images/correct.png" alt="">
                            </figure>
                            <p>Goedgekeurd</p>
                        </td>
                    </tr>
                    <?php
                        }
                        else
                        {
                    ?>
                    <tr>
                        <td>
                            <form action="details.php?getId=<?= $row['res_id'];?>" method="post">
                                <label for="status" class="status">
                                    <input type="radio" name="status" value="1" class="correct"/>
<!--                                        <img src="../images/correct.png" alt="">-->
                                        <span>Goedgekeurd</span>
                                </label>
                        </td>
                        <td>
                                <label for="status" class="status">
                                    <input type="radio" name="status" value="0" class="incorrect" />
<!--                                    <img src="../images/incorrect.png" alt="">-->
                                    <span>Afgekeurd</span>
                                </label>
                        </td>
                        </tr>
                            <tr>
                        <td>
                               <input type="submit" class="confirm-button" value="Bevestigen" />
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="details-container">
            <div class="details-block">
                <span class="details-title">
                    <p>Reservering</p>
                </span>
                <table class="detail-reservation">
                    <tr>
                        <td>Datum:</td>
                        <td><?= date('d-m-Y', strtotime($row['res_date'])); ?></td>
                    </tr>
                    <tr>
                        <td>Tijd:</td>
                        <td><?= $row['res_time']; ?></td>
                    </tr>
                    <tr>
                        <td>Aantal personen:</td>
                        <td><?= $row['res_persons'];?></td>
                    </tr>
                </table>
            </div>
            <div class="details-block">
                <span class="details-title">
                    <p>Exra informatie</p>
                </span>
                <table class="detail-children">
                    <tr>
                        <td>Aantal kinderen tot 10 jaar:</td>
                        <td><?= $row['res_children'];?></td>
                    </tr>
                </table>
                <?php
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
<?php
    require_once "sidebar.php";
    require_once "footer.php";
