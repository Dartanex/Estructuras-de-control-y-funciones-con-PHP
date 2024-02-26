<?php
/*  Escribe una funcion llamada generar Fibonacci que reciba un numero n como parametro
    y genere los primeros n terminos de la serie Fibonacci. La serie comienza con 0 y 1
    y cada termino subsiguiente es la suma de los dos anteriores.*/

    //Le pasamos como parametro $n que son los primeros n terminos de la serie
    function generarFibonacci($n = 2) {
        //Primer numero de la serie es 0
        $primer_numero = 0;

        //Segundo numero de la serie es 1
        $segundo_numero = 1;

        echo 'Serie de Fibonacci: ' . $primer_numero . ', ' . $segundo_numero;

        //inicializamos el contador con el numero 2 ya que los primeros numeros ya estan
        $i = 2;

        //Se utilizara un bucle while para generar la serie
        while ($i < $n) {
            //Es necesario una variable pivote que nos dara el siguiente valor en la 
            //serie, realizando la suma del primer y segundo numero
            $numero_siguiente = $primer_numero + $segundo_numero;
            
            //Se imprime el numero
            echo ', ' . $numero_siguiente;

            //A la variable $primer_numero se le asignara el valor de la variable $segundo_numero
            $primer_numero = $segundo_numero;

            //Y a la variable $segundo_numero se le asignara la variable de $numero_siguiente
            $segundo_numero = $numero_siguiente;

            //Esto se hace que se vaya creando la serie de fibonacci ya que cada vez que se ejecute
            //se haga la suma de los dos numeros anteriores, como ya estan el 0 y el 1, en la primera 
            //vuelta el primer numero es 0 y el segundo es 1 dando el resultado de 1, entonces en la 
            //segunda vuelta el primer numero es 1 y el segundo tambien es 1, dando como resultado 2 
            //y asi en cada vuelta

            //Hacemos que el contador avance
            $i++;
        }
    }
    //Variable para hacer la serie con n terminos
    $num = 10;
    generarFibonacci($num)
?>