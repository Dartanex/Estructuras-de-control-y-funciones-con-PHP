<?php
/*  Crear una funcion llamada esPrimo que determine si un numero dado es primo o no. 
    Un numero primo es aquel que solo es dibisible por 1 y por si mismo.*/

    //Le pasamos como parametro $numero para saber si es o no primo
    function esPrimo($numero) {

        //Usamos un bucle for para saber si es divisible entre 1 y el mismo numero
        //tambien iniciamos el contador en 2 porque se sabe que un numero primo debe
        //ser mayor a 1, por lo tanto 0 y 1 no cuentan.
        for ($i = 2; $i < $numero; $i++) { 
            
            //Hacemos uso de una condicion, si el residuo de dividir $numero entre $i, 
            //es cero entonces es primo
            if($numero % $i == 0) {
                
                //Si no es primo retornara true
                return true;
            }
        }
        
    }
    //Cambie el valor de la variable $numero para probar diferentes numeros
    $numero = 2;
    $primo = esPrimo($numero);

    //Hacemos uso de una condicional para determinar si hay o no un valor en la variable
    //$primo, si hay un valor diferente de null, entonces, el numero no es primo
    //si no hay un valor, entonces es primo
    if(isset($primo) && $primo) {
        echo 'El número ' . $numero .' no es Primo';
        echo $primo;
    } else {
        echo 'El número ' . $numero .' es Primo';
    }
?>