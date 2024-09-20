<?php
session_start();
if (!isset ($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario'];?>!</h1>
    <p><a href="logault.php">Clique aqui para Sair</a></p>
    
</body>
</html>