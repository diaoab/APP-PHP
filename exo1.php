<?php
if (isset($_POST["numbre"])){
$rayon =$_POST["number"];
$diametre = $rayon*2 ;
var_dump($_POST) ;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du diametre</title>
</head>
<body>
    <form action =""method =post>
        <label for="">Entrez le rayon</label>
        <input type="text"name="number">
        <br>
        <button type ="submit">calcul</button>
        <br>
        <?php echo "le diametre de $rayon est $diametre" ?>
    </form>  
    <?php
    if ( isset ($_POST["numbre"])){
    $nombre =$_POST["numbre"];
    var_dump($_POST) ;
    if( $nombre % 2==0 )
  
        ?>  
        <form action =""method =post>
        <label for="">Entrez un nombre</label>
        <input type="text"name="nombre">
        <br>
        <button type ="submit">calcul</button>
        <br>
        <?php echo "$nombre est pair"
        } ?>
    </form>  
    <?php
    $i =1;    
    for($i=1;$i<=4;$i++)
     echo "<h$i>titre de niveau $i</h$i>"
        ?>  
          <?php
       $tab =[1,2,3,4];
       $tab[2]=4;
       echo "$tab";
        ?> 
</body>
</html>