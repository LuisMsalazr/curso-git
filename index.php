<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba GIT Conflict</title>
</head>
<body>
    <?php   
        function Sumar($num1, $num2){
            $suma = $num1 + $num2;
            return $suma;
        }
    ?>

    <h1>
        <?php
            echo "Suma :".Sumar(3, 5);
        ?>
    </h1>
</body>
</html>