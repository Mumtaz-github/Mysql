<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: Les tableaux </title>
</head>
<body>

 <?php 
 echo " <b>EXERCICES: LES TABLEAUX PHP  </b>";     //Pour le titre de l'exercice
 echo "<br>";                  // Pour faire un retour à la ligne
 echo " <b>Exercice 1 : Année non bissextile (365 jours) </b>";     //Pour le titre de l'exercice
echo "<br>";
$data=[
    ["Janvier", "31"],
    ["Février", "28"],
    ["Mars", "31"],
    ["Avril", "30"],
    ["Mai", "31"],
    ["Juin", "30"],
    ["Juillet", "31"],
    ["Août", "31"],
    ["Septembre", "30"],
    ["Octobre", "31"],
    ["Novembre", "30"],
    ["Décembre", "31"],
];
echo "<table border='1' cellpadding='3' cellspacing='0'>";
echo "<tr>";
echo "<th>Mois</th>";
echo "<th>Jours</th>";
echo "</tr>";

foreach ($data as $row){
    echo "<tr>";
    echo "<td>" . $row [0] . "</td>";
    echo "<td>" . $row [1] . "</td>";
    echo "</tr>";
}
echo "<br>";                  // Pour faire un retour à la ligne
 ?>


<!-- *******************************************************************   --> 

<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo " <b>Exercice 1 : Tri du tableau </b>";     //Pour le titre de l'exercice
echo "<br>";                  // Pour faire un retour à la ligne
$tableau = array("Janvier" => "31",
 "Février" => "28",
 "Mars" => "31",
"Avril"=> "30",
"Mai" => "31",
"Juin" => "30",
"Juillet" => "31",
"Août" => "31",
"Septembre" => "30",
"Octobre" => "31",
"Novembre" => "30",
"Décembre" => "31",
); 
arsort($tableau);
foreach($tableau as $cle => $valeur) 
{ 
echo $cle ." : ".$valeur."<br>"; 
}

echo "<br>";                  // Pour faire un retour à la ligne
?>






<!-- EXERCICE 2: CAPITALES   -->  
<?php
echo " <b>Exercice 2 : Capitales </b>";     //Pour le titre de l'exercice
echo "<br>";                  // Pour faire un retour à la ligne
?>

    <!-- OU   -->  
<?php
?>

    <!-- OU   -->  
<?php
?>












</body>
</html>