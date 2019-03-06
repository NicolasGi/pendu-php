<?php
$gameOver = false;
$gameWon  = false;

$triedLetter  = $_POST['triedLetter']; // on stocke la lettre de la method POST la lettre essayer
$_SESSION['triedLetters'] .= $triedLetter;
$_SESSION['lettersArray'][$triedLetter] = false;

$letterFound = false;


for ($i=0; $i < $_SESSION['lettersCount']; $i++) { 
    $letter = substr($_SESSION['word'], $i, 1);
    if($triedLetter === strtolower($letter)){
        $letterFound = true;
        $_SESSION['remplacementString'] = substr_replace($_SESSION['remplacementString'], $triedLetter, $i, 1);
    }
}
if ($letterFound=== false) {
    $_SESSION['trials']++;
}

$remainingTrials = MAX_TRIALS - $_SESSION['trials'];

if ($remainingTrials  <= 0) {
    $gameOver = true;
}elseif (strtolower($_SESSION['word']) === strtolower($_SESSION['remplacementString'])) {
    $gameWon = true;
}
