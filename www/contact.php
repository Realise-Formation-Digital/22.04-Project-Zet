<?php

//si submit gardes des valeur
if(isset($_POST['submit'])){

    //declarer le erreur
    $error = '';
    $error1 = '';
    $error2 = '';
    $error5 = '';

    //declarer valeur form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['massage'];

    //nettoyer le variable si valable
    function clean_text($string) {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    // condition si name pas valable
    if($name ==''){
        $error1 = '<p><label class="text-danger">Name is required</label></p>';
    } else {
        $name = clean_text($name);
    }

    //check si email valable
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error2 = '<p><label class="text-danger">Please enter a valid email address</label></p>';
    } else {
        $email = clean_text($email);
    }

    //condition si subject est valable
    if($subject =='') {
        $error3 = '<p><label class="text-danger">Subject is required</label></p>';
    } else {
        $subject = clean_text($subject);
    }
    
    //nettoyer la variable message
    $message = clean_text($message);

    // si pas des erreurs creer csv et stocker les donnee
    if($error1 == '' && $error2 == '' && $error3 == '') {
        
        //creer csv
        $fo = fopen("contact_data.csv", "a");

        // array avec les variable
        $form_data = array(
            $name,
            $email,
            $subject,
            $message
        );

        // ecrire sur le csv
        fputcsv($fo, $form_data, ";");
        $error = '<h3 class="text-success text-center">Merci pour votre temps</h3>';
    }
}

?>