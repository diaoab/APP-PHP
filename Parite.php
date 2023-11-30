<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parite</title>
</head>

<form method="post" action="">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Verifier">
</form>

<?php
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
          if ($nombre % 2 == 0) {
            echo "<p> $nombre est un nombre pair.</p>";
        } else {
            echo "<p> $nombre est un nombre impair.</p>";
        }
    
}
?>

</body>
</html>