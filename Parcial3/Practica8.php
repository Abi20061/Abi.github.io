<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8 </title>
<link rel="stylesheet" href="css/bootstrap.css">
<style>
    .ficha{
        background-image: url('ficha.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }
    .color{
        opacity: 0.3;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Juego de la loteria</h1><hr>
    <form action="Proyecto8.php" method="POST">
        <?php
            if(isset($_POST["carta1"])){
                $carta1= $POST["carta1"];
                $carta2= $POST["carta2"];
            }else{
                $carta1=[];
                $total=0;
                while($total<16){
                    $numero = rand(1,54);  
                
                  
                    if(array_search($numero, $carta1) === false){
                        $carta1[$total]= $numero;
                        $total++;
                    }
                }  
                $carta2=[];
                $total=0;
                while($total<16){
                    $numero = rand(1,54);  
                
                  
                    if(array_search($numero, $carta2) === false){
                        $carta2[$total]= $numero;
                        $total++;
                    }
                }  
            }
          
        ?>
        <input type="submit" value="Dar carta" name="carta" class="btn btn-primary"><hr>
        <div class="row">
            <div class="col-6">
                <div class="row m-1">
                <?php
                //pintar carta
                for($i=0; $i<16; $i++){
                  
                   
                    echo "<div class='col-3 p-0'><img src='fotos_loteria/". $carta1[$i].".jpeg' class='img-thumbnail'></div>";
                    echo "<input type='hidden' name='carta1[]' value='". $carta1[$i]."'>";
                }
                ?>
                </div>
               </div>
                <div class="col-6">
                    <div class="row m-1">
                   
                 <?php
                for($i=0; $i<16; $i++){
                    
                    
                    echo "<div class='col-3 p-0'><img src='fotos_loteria/". $carta2[$i].".jpeg' class='img-thumbnail'></div>";
                    echo "<input type='hidden' name='carta2[]' value='". $carta2[$i]."'>";
                }
                ?>
                </div>
                </div>
                </div>

          

        </form>

    </div>    
</body>
</html>