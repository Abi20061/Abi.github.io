<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica3 php - integracion con HTML</title>
</head>
<body>
    <h1>Usando PHP dentro de un HTML</h1>
<?php
    $alumno = "Juan Manuel";
    $edad = 18;
    $escuela = "CETIS 107";
    $especialidad = "progrmacion";
    
?>
<form action="">
    <label for="">Nombre del alumno:</label>
    <input type="text" value=<?php echo $alumno; ?>>

    <label for="">Edad:</label>
    <input type="number" value=<?php echo $edad; ?>>
    
    <input type="submit" value=<?php echo "Inscribirse a " .$especialidad; ?>>
</form>

</body>
</html>