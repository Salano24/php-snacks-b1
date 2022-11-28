<?php

$age = $_GET['age'];
$nome = $_GET['nome'];
$email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
        <div>
            <label for="age">Age</label>
            <input name="age" id='age' type='number'>
        </div>
        <div>
            <label for="nome">Name</label>
            <input name="nome" id='nome' type='text'>
        </div>
        <div>
            <label for="email">Email</label>
            <input name="email" id='email' type='email'>
        </div>
      <div>         
      </div>
       <button type="submt">Invia</button>
       <button type="reset">Reset</button>
    </form>

    <?php if (
            strlen($nome) > 3 && str_contains($email, "@") == true && str_contains($email, ".") == true &&
            is_numeric($age) == true
        ) { ?>
        <h1>Accesso riuscito</h1>

        <?php } else { ?>
        <h1>Accesso negato</h1>

        <?php } ?>

</body>
</html>