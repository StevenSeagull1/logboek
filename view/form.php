<form action="" method="post">
    <label for="datum">datum</label>
    <input type="date" name="datum" id="datum"> <br />
    <label for="vak">kies een vak:</label>
  <select name="vak" id="vak">
    <?php foreach($vakken as $vak):?>
    <option value=<?=$vak['id']?>>   <?=$vak['naam']?>    </option>
    <?php endforeach ?>
  </select>
  <br>
    <label for="doen">doen</label>

    
    
    <input type="text" name="doen" id="doen"> <br /> 
    <label for="hoe">hoe</label>
    <input type="text" name="hoe" id="hoe"> <br />
    <label for="terugblik">terugblik</label>
    <input type="text" name="terugblik" id="terugblik"> <br />
<input type="submit" value="verstuur" name="verstuur">
</form>