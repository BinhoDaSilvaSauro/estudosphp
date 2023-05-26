<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#x1F3B2;&#x1F3B2; Dados do Servidor</title>
</head>
<body>
    <h1>Dados do Servidor</h1>
    <?php 
        $nome = "Rubens lira";
        const PAIS = "Brasil";
        echo "<p>O dono do servidor é $nome, que está localizado no " . PAIS . ".</p>";
        phpinfo();
    ?>
</body>
</html>