<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
</head>
<body>
    <form>
        <input type="checkbox" name="prod[]" value="peres">Peres
        <br>
        <input type="checkbox" name="prod[]" value="pomes">Pomes
        <br>
        <input type="checkbox" name="prod[]" value="pastanagues">Pastanagues
        <br>
        <input type="submit">
    </form>

    <?php
    foreach($_POST["prods"] as $prod) {
        echo "<p>$prod</p>\n";
    }
    ?>
</body>
</html>