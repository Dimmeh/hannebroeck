<form action="reservation.php" method="POST">
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