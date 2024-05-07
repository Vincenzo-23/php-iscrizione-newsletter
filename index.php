<?php 

require_once __DIR__ . "/utilities.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <?php
    include __DIR__ . "/partials/header.php"
    ?>
    <main>
        <div class="container p-4 mt-2 border border-bottom-0 border-info border-4 text-center">
            <form action="index.php" method="POST">
                <p>
                    <label for="email" class="fw-bold me-3 text-white">Iscriviti alla nostra newsletter</label>
                    <input type="email" name="email" placeholder="Inserisci la tua email" class="w-25">
                </p>
                <button class="btn btn-info rounded px-4 mt-4 fw-bold text-white">Invia</button>
            </form>
        </div>
        <div class="container text-center fw-bold p-4 border border-top-0 border-info border-4">
            <?php
            if($email === ""){ 
            ?>
                <div class=" alert alert-primary" role="alert">
                    Inserisci la tua email nell'apposito campo!
                </div>
            <?php 
            }elseif ((chekEmail($email) === true) ){
            ?>
                <div class="alert alert-success" role="alert">
                    Registrazione effettuata con successo!
                </div>

            <?php
            }else{
            ?>
                <div class="alert alert-danger" role="alert">
                    Registrazione fallita. Inserisci nuovamente la tua email!
                </div>

            <?php
            }
            ?> 
        </div>
    </main>
    <?php
    include __DIR__ . "/partials/footer.php"
    ?>
    
</body>
</html>