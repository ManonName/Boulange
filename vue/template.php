<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body >
        <ul>
            <li>
                <a href="index.php">Accueil</a>
            </li>
            <li>
                <a href="index.php?action=tab">Aministration</a>
            </li>
        </ul>
        <h2><?php echo $titre ?></h2>
        <?php echo $content ?>
</body>
</html>