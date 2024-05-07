<?php 
$email = $_POST["email"] ?? "";



function chekEmail($mail){
    
    if(str_contains($mail, "@") && str_contains($mail, ".")){
        return true;
    }else{
        return false;
    };

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="index.php" method="POST" class="container p-3">
        <p>
            <label for="email">Iscriviti alla nostra newsletter</label>
            <input type="email" name="email" placeholder="Inserisci la tua email">
        </p>
        <button>Invia</button>
    </form>
    <div class="container p-3">
        <?php
        if($email === ""){ 
        ?>
            <div class="alert alert-primary" role="alert">
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
    
</body>
</html>