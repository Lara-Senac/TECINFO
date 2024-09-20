<?php
require_once 'conexao.php';
session_start();
if(isset)($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try{
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare ($query);
        $stmt->bindParam(':email' , $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($usuario && password_veryfy($senha, $usuario['senha'])){
            $_SESSION['usuario'] = $usuario['nome'];
            header("Location: bemvindo.php");
            exit();

        }else{
            echo "Email ou senha incorreta!!";
        }
    }catch (PDOException $e){
        echo "Erro:" . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
</head>
<body>
    <h1>LOGIN DE USUARIO</h1>
    <form>
<label for="email" name="Email" required><br><br>
<input type="email" id="email" name="email" required><br><br>
<label for="senha">Senha:</label>
<input type="passaword" id="senha" name="senha" required><br><br>
<input type="submit" name="login" value="Entrar">

 </form>
</body>
</html>