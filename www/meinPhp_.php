<?php
//echo("ani(h)ello worl");

// initialise la condition
if (isset ($_POST["name"]) AND (isset ($_POST["email"])));

//echo ("remplir les champs");

//if (isset ($_POST["name"]);
//if (isset ($_POST["email"]));

$file = "donnees.csv"; // déclare un fichier . CSV
$fichier = fopen($file,"w"); // créer un fichier (grâce au "a")et ou écrit dedans s'il existe déjà

$data = ($_POST["name"])."\n".($_POST["email"])."\r"; // Récupère des les valeurs entrer dans les inputs
$write = fwrite($fichier, $data); // écrit les données récupérées dans le fichier . CSV

?>
