<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .gonzalez{
            height: 50px;
        }
        .escalera{
            background-image: url(escalera.png);
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
    $colores=["#d7bde2", "#52be80", "#ec7063", "#f0b27a", "#17a589", "#f7dc6f", "#bb8fce"];
    ?>
    <div class="container">
        <h1>Practica 7- Tablero de serpientes y escaleras</h1>
        <form action="">
        <div class="row">
        <?php
            for($i=100; $i>0; $i--){
                echo "<div class='col-1 card m-1 gonzalez' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
            }   
         ?>
         </div>
        </form>
    </div>
</body>
</html>