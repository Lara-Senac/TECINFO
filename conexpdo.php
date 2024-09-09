<?php 
$host = 'localhost';
$dbname = 'senac1';
$username = 'root';
$password = '';


//PDO
try{
     $pdo = new PDO ("mysql:host=$host;dbname",$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado com sucesso!!';
}
    catch (PDOException $e){
        echo 'Erro na conexcao comdata base'. $e->getMessage();
    }
//fechar porta de acesso
//mysql $conn->close();
$conn = null;


?>