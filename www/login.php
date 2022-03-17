
<?php

// ------------------------

// Vérifier si le formulaire est soumis 
if ( isset( $_POST['submit'] ) ) {
    /* récupérer les données du formulaire en utilisant 
       la valeur des attributs name comme clé 
    */

    $username = $_POST['username']; 
    $password = $_POST['password'];
    // Cryptage du passwordword
    $password = passwordword_hash($password, PASSwordWORD_BCRYPT); 
  
    // Concaténation 

    ' username : ' . $username .
    ' password : ' . $password ;
}

// vérification d'adresse mail

$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $username,) ){  
    $errmsg = "username non valide.";  
  
} else {  
    echo "Votre username est: " .$username;  
}



// Exportation au CSV

if ($errmsg == "") {
    $fo = fopen("stock.csv", "a");

    $register = array(
        $email,
        $pass
    );

    fputcsv($fo, $register, ";");
}

var_dump($errmsg, $register);

// Importation depuis le CSV

$row = 1;
if (($handle = fopen("stock.csv", "r")) !== FALSE):
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE):
        $num = count($data);
       echo "<br /><br /><p> $num champs à la ligne $row:</p>";
        $row++;
        for ($c=0; $c < $num; $c++):
           echo $data[$c] . ";";
        endfor;
    endwhile;
    fclose($handle);
endif;

var_dump($data);

// Compare le $register à $data

if ($register != $data) {
    $refusacc = "accès refusé";
} else {
    echo "Bienvenu", $username;
}


?>

