<?php 
$host = 'localhost';
$username = 'root';
$password = '';


//PDO
try{
     $pdo = new PDO ("mysql:host=$host", $username, $password);
     //config PDO modo erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE meubd";
    $pdo->exec($sql);
    echo " Criado com sucesso meu BD!! <br>";
}
    catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
//fechar porta de acesso
//mysql $conn->close();
$pdo = null;
?>