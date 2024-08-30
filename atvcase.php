<?php
$numero=3;
switch ($numero){
    case 1:
        $mensagem="Uma bicicleta";
        echo $mensagem;
        break; 
        case 2: 
            $mensagem="20 mil reais em barras de ouro";
            echo $mensagem;
            break;
            case 3: 
                $mensagem="Uma casa";
                echo $mensagem;
                break;
                case 4:
                    $mensagem="Um conjunto de panelas";
                    echo $mensagem;
                    break;
                    case 5:
                         echo $mensagem;
                        echo "Um carro zero";
                      default:
                      $numero="Nada infelizmente";                        
}
    echo "Parabéns o seu prêmio foi: $mensagem"; "<br>"
?>
