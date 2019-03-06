<?php 
$gameOver = false;
$gameWon  = false;
$_SESSION['lettersArray'] = [
        'a' => true,
        'b' => true,
        'c' => true,
        'd' => true,
        'e' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'i' => true,
        'j' => true,
        'k' => true,
        'l' => true,
        'm' => true,
        'n' => true,
        'o' => true,
        'p' => true,
        'q' => true,
        'r' => true,
        's' => true,
        't' => true,
        'u' => true,
        'v' => true,
        'w' => true,
        'x' => true,
        'y' => true,
        'z' => true
];
 
if(!isset($_SESSION['wordArray'])) {
        setWordArray();
};
$wordIndex = getRandomIndex($_SESSION['wordArray']);
$_SESSION['word']  = strtolower(getWord($wordIndex, $_SESSION['wordArray'])); // recup le mot avec l'index aléatoire et l'array des mots pour avoir un ARRAY[$index]
$_SESSION['lettersCount'] = strlen($_SESSION['word']);
$_SESSION['remplacementString'] = getRemplacementString($_SESSION['lettersCount']);
$remainingTrials = MAX_TRIALS;
$_SESSION['trials'] = 0;
$_SESSION['triedLetters'] = '';
