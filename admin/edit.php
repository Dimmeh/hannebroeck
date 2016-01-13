<?php
require_once "header.php";
require_once "../includes/oldfasion/edit.php";
?>
    <section class="reservation-display">
        <div class="admin-title-container">
            <?php if($result->num_rows> 0):
            while($row = $result->fetch_assoc()):
            ?>
            <form action="edit.php?getId=<?=$row['res_id'];?>" method="post">
            <h3>Reservering #<input type="radio" name="id" checked="checked" value="<?= $row['res_id'];?>" /> <?= $row['res_id'];?> | <?= $row['res_name']?></h3>
            <button class="add">
                <a href="reservation.php">Toevoegen</a>
            </button>
        </div>
        <div class="details-container">
            <div class="details-block">
                <span class="details-title">
                    <p>Persoonlijke gegevens</p>
                </span>
                <table class="detail-name">
                    <tr>
                        <td><label for="name">Naam:</label></td>
                        <td><input type="text" name="name" value="<?= $row['res_name'];?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-mail:</label></td>
                        <td><input type="email" name="email" value="<?= $row['res_email'];?>"></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Telefoon:</label></td>
                        <td><input type="phone" name="phone" value="<?= $row['res_phone'];?>"></td>
                    </tr>
                </table>
            </div>
            <div class="details-block">
                <span class="details-title">
                    <p>Status</p>
                </span>
                <table class="detail-status">
                    <tr>
                        <td>
                            <label for="status" class="status">
                                <input type="radio" name="status" value="1" <?php echo ($row['res_status']== 1)?'checked="checked"':''; ?>/>
                                <span>Goedgekeurd</span>
                            </label>
                        </td>
                        <td>
                            <label for="status" class="status">
                                <input type="radio" name="status" value="0" <?php echo ($row['res_status']== 0)?'checked="checked"':'' ?> />
                                <span>Afgekeurd</span>
                            </label>
                        </td>
                    </tr>
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
                        <td><label for="date">Datum*:</label></td>
                        <td>
                            <section class="calender-container">
                                <span class="calender" id="mydate">
                                    <input type="text" size="8" name="date" id="date" value="<?= date('d-m-Y', strtotime($row['res_date'])); ?>" />
                                </span>
                            </section>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="time">Tijd*:</label></td>
                        <td><input type="time" name="res-time" min="11:00" max="19:00" step="1800" value="<?= $row['res_time']; ?>"> uur</td>
                    </tr>
                    <tr>
                        <td><label for="persons">Aantal personen:</label></td>
                        <td>
                            <select name="persons" id="persons">
                                <option value="1" <?php echo ($row['res_persons']== 1)?'selected="selected"':'' ?> >1 persoon</option>
                                <?php for($i = 2;$i<13;$i++){?>
                                    <option value="<?=$i; ?>" <?php echo ($row['res_persons']== $i)?'selected="selected"':'' ?> ><?=$i;?> personen</option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="details-block">
                <span class="details-title">
                    <p>Extra informatie</p>
                </span>
                <table class="detail-children">
                    <tr>
                        <td><label for="children">Aantal kinderen tot 10 jaar:</label></td>
                        <td>
                            <select name="children" id="kids10" >
                                <option value="<?php echo ($row['res_children']== 0)?'selected="selected"':'' ?>">Geen</option>
                                <option value="<?php echo ($row['res_children']== 1)?'selected="selected"':'' ?>">1 kind</option>
                                <?php for($i = 2;$i<12;$i++){?>
                                    <option value="<?=$i; ?>" <?php echo ($row['res_children']== $i)?'selected="selected"':'' ?> ><?=$i;?> kinderen</option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                </table>
                <?php
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
        <div class="details-container">
            <div class="details-block right">
                <input type="submit" value="Bewerken" name="submit" class="send-button" />
                <button class="cancel" onclick="goBack()">Annuleren</button>
            </div>
        </div>
        </form>
    </section>
<?php
require_once "sidebar.php";
require_once "footer.php";
