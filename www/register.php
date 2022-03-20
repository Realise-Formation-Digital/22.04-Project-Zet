<?php

if(isset($_POST['submit'])){

    //declarer le erreur
    $error = '';
    $error1 = '';
    $error2 = '';

    //declarer valeur form
    $email1 = $_POST['email1'];
    $password = $_POST['password'];

    if(!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        $error1 = '<p><label class="text-danger">Please enter a valid email address</label></p>';
    } else {
        
    };

    if($password =='') {
        $error2 = '<p><label class="text-danger">password is required</label></p>';
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT);
    };

    if($error1 == '' && $error2 == '') {
        
        //creer csv
        $fs = fopen("users.csv", "a");

        // array avec les variable
        $form_data = array(
            $email1,
            $password
        );

        // ecrire sur le csv
        fputcsv($fs, $form_data, ";");
        $error = '<h3 class="text-success text-center">compte creer</h3>';
    }
}  


// <?php

// // ------------------------

// // Vérifier si le formulaire est soumis 
// if ( isset( $_POST['submit'] ) ) {
//     /* récupérer les données du formulaire en utilisant 
//        la valeur des attributs name comme clé 
//     */

//     $email = $_POST['email']; 
//     $pass = $_POST['pass'];
//     // Cryptage du password
//     $pass = password_hash($pass, PASSWORD_BCRYPT); 
  
//     // Concaténation 

//     ' email : ' . $email .
//     ' pass : ' . $pass ;
// }

// // vérification d'adresse mail

// $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
// if (!preg_match ($pattern, $email,) ){  
//     $errmsg = "Email non valide.";  
  
// } else {  
//     echo "Votre email est: " .$email;  
// }



// // Exportation au CSV

// if ($errmsg == "") {
//     $fo = fopen("stock.csv", "a");

//     $register = array(
//         $email,
//         $pass
//     );

//     fputcsv($fo, $register, ";");
// }

// var_dump($errmsg, $register);

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

// var_dump($data) 


?>


