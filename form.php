<!--Form for adding a reservation-->
        <span class="personal-info">
          <h3>Persoonlijke gegevens</h3>
          <label>(* = verplicht)</label>
            <label for="name">Naam*:</label>
            <input type="text" name="name" value="<?= $name; ?>" required>
            <label for="email">E-mail adres*:</label>
            <input type="email" name="email" value="<?= $email; ?>" required>
            <label for="phone">Telefoonnummer*:</label>
            <input type="text" name="phone" value="<?= $phone; ?>" required>
            <!--            <label for="anti-spam">Anti-SPAM; Geef antwoord op deze som*:</label>-->
            <!--            <span>--><?//= $a; ?><!-- + --><?//= $b; ?><!-- = </span><input type="number" name="answer" min="0">-->
        </span>
        <span class="form-reservation">
          <h3>Reservering</h3>
            <label for="date">Datum*:</label>
            <section class="calender-container">
              <span class="calender" id="mydate">
                <input type="text" size="8" name="date" id="date" value="<?= $date; ?>" required/>
              </span>
            </section>
            <label for="time">Tijd*:</label>
            <input type="time" name="res-time" min="11:00" max="19:00" step="1800"  value="<?= $time; ?>" required/>
            <span class="reservation-warning">Opmerking: U kunt alleen tussen 11:00 uur en 19:00 uur op elk half uur reserveren. Voorbeeld: 12:30</span>
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
            <select name="persons" id="persons" onchange="get_children(this.id, 'kids10')">
                <option value="1">1 persoon</option>
                <?php for($i = 2; $i < 13; $i++):?>
                    <option value="<?= $i;?>"><?= $i;?> personen</option>
                <?php endfor?>
            </select>
          <h3>Extra informatie</h3>
            <label for="kids10">Aantal kinderen tot 10 jaar</label>
            <select name="children" id="kids10">
                <option value="0">Geen</option>
            </select>
          <div class="clear"></div>
          <input type="submit" value="Volgende" name="submit" class="send-button" >
        <div class="clear"></div>
        </span>
</form>