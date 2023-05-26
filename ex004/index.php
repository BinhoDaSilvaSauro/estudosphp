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

        echo "Escape Sequences: \"<b>\\n</b>\" Nova linha </br>
        \"<b>\\t</b>\" Tabulação Horizontal </br>
        \"<b>\\</b>\" Barra Invertida </br>
        \"<b>\\$</b>\" Sinal de Cifrão </br>
        \"<b>\\u{<código>}</b>\" Codepoint Unecode </br>
        \" <b>\\\" \\\"</b> \" Aspas </br>
        \" <b>\\' \\'</b> \" Apóstrofos";
    ?>
</body>
</html>