<form action="index.php" method="POST">
    <fieldset>
        <legend>
            il te reste X essais pour sauver ta peau
        </legend>
   

        <label for="triedLetter">
            Choisis ta lettre
            <select name="triedLetter" id="triedLetter">
            <!-- repeter 26 fois-->
                <?php foreach($lettersArray as $letter => $status):?>
                    <?php if ($status):?>
                        <option value="<?= $letter ?>"><?= $letter?></option>
                    <?php endif; ?>
                <?php endforeach ?>
            </select>
            <input type="hidden" name="lettersArray" value="<?= $serializedLettersArray ?>"> 
            <input type="submit" value="envoyez la lettre">
        </label>
    </fieldset>
</form>