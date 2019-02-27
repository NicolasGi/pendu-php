<form action="index.php" method="POST">
    <fieldset>
        <legend>
            il te reste <?= $remainingTrials ?> essais pour sauver ta peau
        </legend>
   

        <label for="triedLetter">
            Choisis ta lettre
            <select name="triedLetter" id="triedLetter">
            <!-- repeter 26 fois-->
                <?php foreach($lettersArray as $letter => $status):?>
                    <?php if ($status):?>
                        <option value="<?= $letter; ?>"><?= $letter;?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <input type="hidden" name="lettersArray" value="<?= $serializedLettersArray; ?>">
            <input type="hidden" name="wordIndex" value="<?= $wordIndex; ?>"> 
            <input type="hidden" name="lettersCount" value="<?= $lettersCount; ?>">
            <input type="hidden" name="remplacementString" value="<?= $remplacementString; ?>"> 
            <input type="hidden" name="triedLetters" value="<?= $triedLetters; ?>"> 
            <input type="hidden" name="trials" value="<?= $trials; ?>"> 
            <input type="hidden" name="remainingTrials" value="<?= $remainingTrials; ?>"> 

            
            <input type="submit" value="envoyez la lettre">
        </label>
    </fieldset>
</form>