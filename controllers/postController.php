<?php
$gameOver = false;
$gameWon = false;

if(isset($_COOKIE['gameData'])){
     $gameData = $_COOKIE['gameData'];
     extract($gameData);
}else{
    die('Apparamment vous essayez d’accèder a cette page d’un moiyen non prévus');
}


$triedLetter  = $_POST['triedLetter']; // on stocke la lettre de la method POST la lettre essayer
$lettersArray[$triedLetter] = false;// pour ensuite  lui retourner la valeur false pour supprimer l'<option> dans index

$triedLetters .= $triedLetter;

$wordArray = getWordsArray();// recup l'array de mots
$word      = strtolower(getWord($wordIndex, $wordArray));
$letterFound        = false;


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

setcookie('gameData', encode(compact('wordIndex', 'lettersArray', 'lettersCount', 'triedLetters', 'remplacementString', 'trials')));    