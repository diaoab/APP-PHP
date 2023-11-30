<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if (isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        for ($i=2 ; $i<=nombre ; $i++ ){
          if( nombre % $i ==0) 
          echo("le nombre $i n'est pas premier") ;
        else
        echo("le nombre $i est premier");
        }
    }
    ?>
    <form method="post" action="">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Verifier">
</form>
</body>
</html>