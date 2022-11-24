<?php
    $badword = $_GET["badword"];

    $userText = $_GET["usertext"];

    $censoredText = str_replace($badword, "***", $usertext);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censor</title>
</head>
<body>

    <h2>Qui il testo originale e la sua lunghezza</h2>
    <p> <?php  echo $userText; ?> </p>
    <p> <?php echo strlen($userText); ?> </p>
    
    <h2>Qui il testo censurato</h2>
    <p> <?php echo $censoredText; ?>
    <p> <?php echo strlen($censoredText); ?></p>

    <a href="index.php">Ritorna alla home</a>

</body>
</html>