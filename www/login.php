<?php
include "login1.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form class="container" method="post" action="">
    <div class="mb-3">
        <label for="emailps" class="form-label">Email address</label>
        <input type="email" class="form-control" id="emailps" name="email2" aria-describedby="emailHelp">
        <?php echo $error1;?>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password12" class="form-label">Password</label>
        <input type="password" class="form-control" id="password12" name="password1">
        <?php echo $error2;?>
    </div>
    
    <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
    </form>

    <?php echo $error;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>