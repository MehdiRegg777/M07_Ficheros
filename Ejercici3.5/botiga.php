<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
</head>
<body>

    <form method="POST">

        <?php
            $file = fopen("productes.txt", "r");
            while($line = fgets($file)) {
                
                echo "<input type='checkbox' name='prods[]' value='".trim($line)."' > $line </input>";
                echo "<br>";
                               
            }

            echo "\n<input type='text' name='usuario' required>";
            echo "<input type='submit' value='enviar'>";

            if (isset($_POST["prods"])){

                $user= $_POST["usuario"]; 
                $file = fopen ("comandes.txt", "a");
                $comanda=$user;



                foreach ($_POST["prods"] as $producte) {
                    $comanda.=",".$producte;
                }

                fwrite($file, $comanda."\n");
            }
        ?>

    </form>

</body>
</html>