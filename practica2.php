<?php

    $nombre = $_GET["nombre"];
    echo "Nombre: " .$nombre. "<br><br>";

    $edad = $_GET["edad"];
    echo "Edad: " .$edad. "<br><br>";

    $Escuela = $_GET["Escuela"];
    echo "Escuela: " .$Escuela. "<br><br>";

    $Fecha_Ingreso = $_GET["Fecha_Ingreso"];
    echo "Fecha de Ingreso: " .$Fecha_Ingreso. "<br><br>";

    $Direccion = $_GET["Direccion"];
    echo "Dirección: " .$Direccion. "<br><br>";


     if($edad >= 18){
        echo "Es mayor de edad";
    }else{
        echo "Es menor de edad";
    }

    if($Escuela == "Cetis 107"){
        echo "<div style= 'background_color:blue;'> Cetis 107 </div>";
    } else if($Escuela == "CBTis 224"){
        echo "<div style= 'background_color:red;'> CBTis 224 </div>";
    } else if($Escuela == "COBAES"){
        echo "<div style= 'background_color:green;'> COBAES </div>";
    }


?>