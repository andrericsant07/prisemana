<?php

    $funcionario = "André Santana";
    $ImpostoDeRenda = 2800;

    echo "O $funcionario ";
    echo " neste caso";

        if($ImpostoDeRenda < 1000):
            echo " não vai pagar de imposto";
        elseif($ImpostoDeRenda < 1500):
            echo " vai pagar 10% de imposto";
        elseif($ImpostoDeRenda < 2000):
            echo " vai pagar 15% de imposto";
        else:
            echo " vai pagar mais de 20% de imposto";
        endif;