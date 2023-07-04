<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cantidad de peliculas</h1>
    <?php  echo "<h2> La cantidad de peliculas es : ". $data['Cantmovies'] . "</h2>" . "este es el archivo"?>
    <div class="container">
        <?php 
        if(isset($data) && count($data['movies'])>0):
        foreach ($data['movies'] as $key ):
            ?>
            <div class="item">
                <p><?php echo $key?></p>
            </div>
            <?php
        endforeach;
    endif;
        ?>
    </div>
</body>
</html>