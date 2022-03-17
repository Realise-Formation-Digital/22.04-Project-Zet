<?php
    include "contact.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact Documents</title>
</head>
<body class="bg-dark">

    <section class="container justify-content-center text-center vh-100">
    <div class="card">
        <div class="card-body">
            <div class="card-title text-decoration-underline mb-5">
                <h1>Histoire formulaire de contact</h1>
            </div>
            <div class="card-text d-flex justify-content-center fw-bold">
                <?php
                    $f = fopen("contact_data.csv", "r");
                    if(isset($f)) {
                        while(!feof($f)) {
                            echo fgets ($f) . "<br>" . "<br>";
                        }
                    } else {
                        fclose($f);
                    }
                ?>
            </div>
            <div class="card-footer justify-content-center mt-5">
                <button class="btn btn-outline-danger btn-lg">
                    LOGOUT
                </button>
            </div>
        </div>
    </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>