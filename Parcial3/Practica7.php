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
        .serpiente{
            background-image: url('serpiente.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <?php
    $colores=["#d7bde2", "#52be80", "#ec7063", "#f0b27a", "#17a589", "#f7dc6f", "#bb8fce"];
    ?>
    <div class="container">
        <h1>Práctica 7 - Tablero de serpientes y escaleras</h1><hr>
        <form action="Practica7.php" method="POST">
            <input type="submit" value="Jugar" class="btn btn-succes">
            <div class="row">
                    <?php
                        for($i=100; $i>0; $i--){
                            if($i == 4 || $i == 9 || $i == 33 || $i == 28 || $i == 40 || $i == 80 ||$i == 71 ||$i == 77){
                                echo "<div class='col-1 card m-1 escalera' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                            } else if($i == 17 || $i == 54 || $i == 58 || $i == 64 || $i == 87 || $i == 93 ||$i == 95 ||$i == 99 ||$i == 36){
                                echo "<div class='col-1 card m-1 serpiente' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                            } else {
                                echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                            }
                        }
                    ?>
            </div>
        </form>
    </div>
</body>
</html>