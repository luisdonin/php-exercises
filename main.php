<?php
   
    $numbers = [];
    
    
    while(true){
        $entradaUsuario = readline("Numero: ");
        if($entradaUsuario === ""){
            break;
        }
        $numbers[] = (int)$entradaUsuario;
    }

    if(count($numbers) > 0){
        $max = $numbers[0];
        $min = $numbers[0];

        foreach($numbers as $number){
            if($number > $max){
                $max = $number;
            }
            if($number < $min){
                $min = $number;
            }
        }
    }
    /*
        if( $numbers[$i] > $numbers[$i+1] ) {
            $min = $numbers[$i+ 1];
        } else if( $numbers[$i] < $numbers[$i+1]){
            $max = $numbers[$i+ 1];
        }
    }*/
    echo "Menor Valor: ". $min ."\n" ;
    echo "Maior Valor: ". $max ."\n";