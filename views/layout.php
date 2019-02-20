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
        <h1>Le pendu : Trouves le mots en moins de <?= $MAX_TRIALS?> coups</h1>
    </div>
    <div>
        <p>
            Le mots à deviner compte X lettres: **********</p>
    </div>
    <div>
        <img src="images/pendu0.gif" alt="x" srcset="">
    </div>

    <div>
        <?php include 'partials/form.php'?>
        <!-- Si on a perdu -> inserer le msg de défaite -->
        <!-- Si on a gagné -> inserer le msg de victoire -->
    </div>
</body>

</html>