<?php

$numeroInicial = 2;
$numeroFinal = 900;
$contador = $numeroInicial;

    echo "Entre o " .$numeroInicial. " e o " . $numeroFinal. " apenas os numeros abaixo são pares<br>";
    while($contador <= $numeroFinal){
        
        if($numero %2 ==0){
            echo  $contador. ", ";
        }
        $contador +=2;
    }
//$divisor = 300;
//$contador = $numeroInicial;

  //  echo "Entre o " . $numeroInicial. " e o " .$numeroFinal. " apenas os numeros abaixo são divisiveis por " .$divisor. "<br><br>"; 
    //while($contador <= $numeroFinal){
      //  $resto = $contador % $divisor;
        //if($resto == 0){
          //  echo $contador. " é divisivel por ". $divisor. "<br>";
        //}
        //$contador += 1;      
    //}
    


// while($contador <= $numeroFinal){
    //   $resto = $contador % $divisor;
      // echo "O resto da divisao ". $contador. " por " .$divisor. " é = " .$resto."<br>";
       //$contador +=1;
   //}





   // while($contador <= $numeroFinal){
      //  echo $contador;
      //  echo "<br>";
      //  $contador += 1;
    //}





    //echo "O resto da divisão de " . $numero1 . " por " . $numero2 . " é igual " . ($numero1 % $numero2);




    //echo $numero1. " dividido por " .$numero2." é ";
    //echo $numero1/$numero2;