<?php

    $funcionario = "André Santana";
    $ImpostoDeRenda = 2900;

    echo "Olha o  ", $funcionario;
    echo " neste caso<br>";

        if($ImpostoDeRenda < 1000){
            echo "nao vai pagar nada de imposto";
        }elseif($ImpostoDeRenda < 1500){
            echo "vai pagar 10% de imposto";
        }elseif($ImpostoDeRenda < 2000){
            echo "vai pagar 15% de imposto";
        }else{
            echo "vai pagar 20% de imposto";
        }
        