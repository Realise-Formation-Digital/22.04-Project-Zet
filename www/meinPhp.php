<?php
// On pose les conditions pour vérifier si les champs sont remplis
if(isset($_POST['Envoyer-le à Mr. PHP'])); {
    if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
      $message='';
      mail("mail@destinataire.com", "Sujet du message", $message);
      $msg = '<p class="text-success">'."Votre message a bien été envoyé".'</p>';

      $file = "donnees.csv"; // déclare un fichier . CSV
      $fichier = fopen($file,"w"); // créer un fichier (grâce au "a")et ou écrit dedans s'il existe déjà

      $data = ($_POST["name"])."\n".($_POST["email"])."\r".($_POST['message']); // Récupère des les valeurs entrer dans les inputs
      $write = fwrite($fichier, $data); // écrit les données récupérées dans le fichier . CSV
// Si un ou des champs sont manquants alors un avertissement est affiché
   } else {
        $msg = '<p class="text-danger">'."Tous les champs doivent être complétés!".'</p>';
    }
}
?>