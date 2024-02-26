<?php
/*  Implementa una función llamada esPalindromo que determine si una cadena
    de texto dada es un palindromo. Un palindromo es una palabra, frase o 
    secuencia que se lee igual en ambas direcciones*/

    function esPalindromo($palabra) {

        //Primero se debe normalizar el texto, convertir todo el texto a minusculas, y remover
        //otro tipo de caracteres que no sea alfanumerico, en este caso usamos dos funciones 
        //que trae PHP la primera es strtolower para convertir todo el texto a minusculas
        //y preg_replace que busca lo que queremos normalizar en el texto y lo reemplaza
        //en este caso lo reemplazara con un vacio que es el segundo parametro que se le pasa, 
        //el primero es la expresion regular y el ultimo la variable que queremos modificar
        $palabra_normalizada = strtolower( preg_replace("/[^A-Za-z0-9]/", '', $palabra) );

        //Ahora utilizamos la funcion strrev a la variable normalizada para invertir la palabra
        $palabra_invertida = strrev( $palabra_normalizada );

        //Ahora vamos a comprar la palabra normalizada con la palabra invertida para determinar
        //si es palindromo o no
        return $palabra_normalizada === $palabra_invertida;

    }
    //escribe una palabra para ver si es palindromo o no
    $palabra = 'bisonte';
    
    //Usamos una condicional para imprimir en pantalla si la palabra es o no es palindromo
    if(esPalindromo($palabra)){
        echo "La palabra: " . $palabra . " Es un palindromo";
    } else {
        echo "La palabra: " . $palabra . " No es un palindromo";
    }
?>