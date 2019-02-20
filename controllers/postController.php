<?php

$lettersArray = unserialize(urldecode($_POST['lettersArray'])); // on decouvertit pour reavoir un array 
$triedLetter = $_POST['triedLetter']; // on stocke la lettre de la method POST la lettre essayer
$lettersArray[$triedLetter] = false;// pour ensuite  lui retourner la valeur false pour supprimer l'<option> dans index