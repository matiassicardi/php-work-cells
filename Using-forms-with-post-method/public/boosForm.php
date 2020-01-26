<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Eric Meyer CSS reset on https://cdnjs.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <title>Document</title>
</head>
<body>
<?php

    // para poder ver si los datos están viajando correctamente desde el formulario, hay que usar el método:
    // var_dump($_POST);

    $yourEmail = $_POST['yourEmail'];
    $yourChoice = $_POST['yourChoice'];

    //Para enviar datos múltiples desde un campo de formulario de selección múltiple:
    $yourOpinion = $_POST['yourOptions']; //creo una variable y le asigno el valor que se envía desde el campo de selección múltiple
    $imploded = implode(", ", $yourOpinion); //creo una variable a la que le asigno el valor de la función implode, la cual une elementos de un array en un string, y si se le indica le coloca separadores.

    $yourOpinion = $_POST['yourOpinion'];

    echo 'Your eMail is ' .
    htmlspecialchars($yourEmail, ENT_QUOTES, 'UTF-8') . '.' . '<br>'; 

    echo 'Your choice is ' .
    htmlspecialchars($yourChoice, ENT_QUOTES, 'UTF-8') . '.' . '<br>';

    echo 'Your Options are ' . $imploded . '<br>';
    // Si lo que se quisiera es mostrar cada dato del array por separado, se puede acceder a estos a través de:
    //echo $yourOpinion[n]

    echo 'Your opinion is ' .
    htmlspecialchars($yourOpinion, ENT_QUOTES, 'UTF-8') . '.' . '<br>';

?>
<!-- es muy impostante tener acordes los métodos en los que viajan los datos desde el form hasta la página de respuesta, hay que chequear si serán $_GET o $_POST -->
</body>
</html>
