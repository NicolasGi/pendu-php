<?php
$gameOver = false;
$gameWon = false;

$lettersArray = unserialize(urldecode($_POST['lettersArray'])); // on decouvertit pour reavoir un array 
$triedLetter  = $_POST['triedLetter']; // on stocke la lettre de la method POST la lettre essayer
$lettersArray[$triedLetter] = false;// pour ensuite  lui retourner la valeur false pour supprimer l'<option> dans index

$triedLetters  = $_POST['triedLetters'];
$triedLetters .= $triedLetter;

$wordArray = getWordsArray();// recup l'array de mots
$wordIndex = $_POST['wordIndex'];
$word      = strtolower(getWord($wordIndex, $wordArray));

$lettersCount       = $_POST['lettersCount'];
$remplacementString = $_POST['remplacementString'];
$letterFound        = false;
$trials             = $_POST['trials'];
$remainingTrials    = $_POST['remainingTrials'];

for ($i=0; $i < $lettersCount; $i++) { 
    $letter = substr($word, $i, 1);
    if($triedLetter === $letter){
        $letterFound = true;
        $remplacementString = substr_replace($remplacementString, $triedLetter, $i, 1);
    }
}
if ($letterFound=== false) {
    $trials++;
}

$remainingTrials = MAX_TRIALS - $trials;

if ($remainingTrials  <= 0) {
    $gameOver = true;
}elseif ($word === $remplacementString) {
    $gameWon = true;
}