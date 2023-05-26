<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#x1F9EA; Testando Strings</title>
</head>
<body>
    <?php 
        $nome = "Rubens";
        $sobrenome = "Lira";
        $ano = date("Y");
        
        //Aspas
        echo "<p>$nome \"Binho\" $sobrenome</p>";
        
        //Apóstrofo
        echo '<p>$nome "Binho" $sobrenome</p>';
    ?>
</body>
</html>