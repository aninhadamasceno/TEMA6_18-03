<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    if(isset($_GET['nome'])) {
        $nome = $_GET["nome"];
        echo "Seja Bem-Vindo(a) " . $nome;
	//código aqui

    }
    ?>
</body>
</html>
