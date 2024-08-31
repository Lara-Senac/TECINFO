<?php
for($x = 0; $x <= 10; $x++){
    if ($x == 6) break;
echo "O número é: $x <br>";
}
echo "<br>";
echo "<br>";
$cor = array ("Rosa", "Azul", "Verde", "Cinza");
foreach ($cor as $x){
    echo "$x <br>";
}

echo "<br>";
echo "<br>";
function messagem(){
    echo "Nada é tão ruim que não possa piorar!!";
}
    messagem();

    echo "<br>";
    echo "<br>";
    function sobrenome($name, $ano){
        echo "$name . Nascido(a) em $ano <br>";
    }
    sobrenome("Lara", "2006.");
    sobrenome("Clara", "2000.");
    sobrenome("João", "1905.");
    echo "<br>";
    echo "<br>";
    
    function sum($l, $h){
        $z = $l + $h;
        return $z;
    }
echo "5 + 10 =" . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";
echo "<br>";
echo "<br>";



declare(strip_tiping=1);
function addnumbers(float $w, float $q) : float{
return $w + $q;
}
echo addnumbers(1.2, 7.3);

echo "<br><br>";

$carros = array ( "Lamborguini", "BMW", "Poshe", "Mustangue", "Chevett" );
var_dump($carros);


?>