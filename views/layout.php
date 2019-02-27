<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le pendu</title>
</head>

<body>

    <div>
        <h1><?=GAME_TITLE;?> : Trouves le mots en moins de <?= MAX_TRIALS; ?> coups</h1>
    </div>
    <div>
        <p>
            Le mots à deviner compte <?= $lettersCount; ?> lettres: <?=  $remplacementString;?></p>
    </div>
    <div>
        <img src="images/pendu<?= $trials; ?>.gif" alt="x" srcset="">
    </div>
    <div>
        <p>Voici les lettre que tu as déjà essayées : <?= $triedLetters; ?></p>
    </div>

    <div>
        <?php if ($gameOver) {
                include 'partials/failure.php';
        }elseif ($gameWon) {
                include 'partials/success.php';
        }else {
                include 'partials/form.php';

            }?>
    </div>
</body>
</html>