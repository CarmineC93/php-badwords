<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    
    <form action="censor.php" method="GET">
        <label for="badword">Badword</label>
        <input type="text" id="badword" name="badword" placeholder="Inserisci la parola da censurare">

        <label for="usertext"></label>
        <textarea name="usertext" id="usertext" cols="30" rows="10" placeholder="Inserisci il testo da censurare"></textarea>

        <hr>

        <button type="submit">Submit</button>
    </form>

</body>
</html>