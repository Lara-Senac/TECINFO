<?php
$nota1=0;
$nota2=0;
$nota3=0;
$nota4=0;

$resultado=($nota1+$nota2+$nota3+$nota4)/4;
echo "Media: ";
echo $resultado;
echo "<br>";
if($resultado >= 7 && $resultado !=10){
    echo "O aluno foi aprovado";
}

elseif($resultado == 0){
echo "Estude mais, você não acertou nada.";
}
elseif($resultado == 10){
    echo "Aprovado com nota máxima.";
}
else {
    echo "O aluno foi reprovado";
}
 
?>
