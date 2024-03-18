<!-- check_login.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $passaword = $_POST['password'];
       
	}
    if($username === "admin" && $_password === "admin123"){
        echo "<h2>Bem Vindo de Volta Admin!</h2>";
    } else {
        echo "<h2>Usuário ou Senha Inválidos!!</h2>";
    }
    
    ?>
</body>
</html>
