<?php 
$person = [
    "Nom" => ["SALL", "NDIAYE", "BEYE"],
    "Prenom" => ["Amadou", "Racky", "ALI"],
    "Numero" => [71239809, 74509172, 87675976 ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
      <style>
        table{
          margin: auto;
          width: 98%;
        }
        </style>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Numero</th>
    </tr>
    
    <?php
    foreach ($person["Nom"] as $index => $nom) {
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>{$person["Prenom"][$index]}</td>";
        echo "<td>{$person["Numero"][$index]}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>