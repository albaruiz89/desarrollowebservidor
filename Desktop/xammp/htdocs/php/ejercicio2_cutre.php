
<h1>Ejercicios</h1>

<?php
    echo "<p>Esto funciona</p>";


/*
    Act.1.
    Vamos a generar 10 números aleatorios entre 1 y 10

    Mostrar dichos números indicando si son pares o import_request_variables

    Mostrarlos en una lista

*/

//Act.2.
// 1º Función rand
// 2º Comprobar si es par o impar
// 3º Imprimirlo en la lista


/*  
    Act.3.
    Imprimir los múltiples de 3 entre 0 y 30 en "formato array"
    ej. [3, 6, 9, ...]
*/

?>


<ul>
    <li>El 2 es par</li>
    <li>El 10 es par</li>
    <li>El 5 es impar</li>
</ul>


<?php 
    for ($i = 1; $i <= 10; $i++):
        $numero_aleatorio = rand(1,10);
        if ($numero_aleatorio % 2 == 0): 
            echo "<p>$numero_aleatorio es par </p>";
        else:
            echo "<p>$numero_aleatorio es impar </p>";
        endif;
    endfor;
?>
        
<?php
    /*
    EJERCICIO 2
    IMPRIMIR LOS MULTIPLOS DE 3 ENTRE 0 Y 30
    */

    echo "[";
    for ($i = 3; $i <= 30; $i+=3) {
        if ($i < 30) {
            echo "$i,";
        } else {
            echo $i;
        }
        
    }
    echo"]";
    ?>