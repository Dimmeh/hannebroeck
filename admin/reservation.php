<?php
    require_once("header.php");
    require_once "../includes/oldfasion/add.php";
?>
    <section class="reservation-display">
        <div class="admin-title-container">
            <h3>Reservering toevoegen</h3>
        </div>
        <?php foreach($errors as $error) : ?>
            <span class="error">
                <p><?=$error; ?></p>
            </span>
        <?php endforeach;?>
        <?php foreach($successAdmin as $success) : ?>
            <span class="success">
                <p><?=$success; ?></p>
            </span>
        <?php endforeach;?>
        <div class="reservation">
            <?php require_once "../form.php";?>
        </div>
    </section>
<?php
require_once "sidebar.php";
require_once("footer.php");
?>