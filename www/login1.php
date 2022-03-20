<?php
session_start();

include "register.php";

$ft = fopen($fs, "r");

function get_credentials() {
    if(isset($ft)) {
        while ($line = fgetcsv($ft)) {
        $lines[] = $line;
        }
    } else {
    
    }
    return $lines;
}

if(isset($_POST['submit1'])){

    $credentials = get_credentials();

    //declarer le erreur
    $error = '';
    $error1 = '';
    $error2 = '';

    //declarer valeur form
    $email2 = $_POST['email2'];
    $password = $_POST['password1'];

    if(!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        $error1 = '<p><label class="text-danger">Please enter a valid email address</label></p>';
    } else {
        
    };

    if($password1 =='') {
        $error2 = '<p><label class="text-danger">password is required</label></p>';
    } else {
        $password1 = password_verify($password1);
    };

    $user = array(
        $email2,
        $password1,
    );

    $check_credentials = function($email2, $password1) use ($credentials) {
        foreach($credentials as $credential)
            if($credential[0] == $email2 && $credential[1] == $password1)
                return true;
    
        return false;
    };

    $error = $check_credentials($email2, $password1);
}

// <?php

// // ------------------------

// // Vérifier si le formulaire est soumis 
// if ( isset( $_POST['submit'] ) ) {
//     /* récupérer les données du formulaire en utilisant 
//        la valeur des attributs name comme clé 
//     */

//     $username = $_POST['username']; 
//     $password = $_POST['password'];
//     // Cryptage du passwordword
//     $password = passwordword_hash($password, PASSwordWORD_BCRYPT); 
  
//     // Concaténation 

//     ' username : ' . $username .
//     ' password : ' . $password ;
// }

// // vérification d'adresse mail

// $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
// if (!preg_match ($pattern, $username,) ){  
//     $errmsg = "username non valide.";  
  
// } else {  
//     echo "Votre username est: " .$username;  
// }




// // Importation depuis le CSV

// $row = 1;
// if (($handle = fopen("stock.csv", "r")) !== FALSE):
//     while (($data = fgetcsv($handle, 1000, ";")) !== FALSE):
//         $num = count($data);
//        echo "<br /><br /><p> $num champs à la ligne $row:</p>";
//         $row++;
//         for ($c=0; $c < $num; $c++):
//            echo $data[$c] . ";";
//         endfor;
//     endwhile;
//     fclose($handle);
// endif;






// ?>