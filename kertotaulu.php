<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kertotaulu</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        h1, p{
            margin: 1rem;
        }

        form label, input, select{
            margin: 1rem;
        }

        #bold{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Kertotaulu</h1><br>
        <form action="kertotaulu.php" method="POST">
            <label for="kerrottava">Laita tähän haluamasi luku:</label><br>
            <input type="number" id="kerrottava" name="kerrottava"><br>
            <input type="submit" value="Lähetä">
        </form>

    <p>
        <?php
            if (empty ($_POST["kerrottava"])){
                echo "";
            } else {
                echo "Luvun <span id=\"bold\">" . $_POST["kerrottava"] . "</span> kertotaulu";
            }  
        ?><br>
        <?php
            if (empty ($_POST["kerrottava"])) {
                echo "Et syöttänyt lukuja!!!";
            } else {
                for ($numero=1; $numero <= 10; $numero++) { 
                    echo $numero * $_POST["kerrottava"] . "<br>";
                }
            }
        ?>
    </p>
</body>
</html>