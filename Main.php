<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require ('User.php');
    
    //User 1
    echo '<h1 style="text-align: center;"> Utente con ID '. $user1->getId().'</h1>';
    echo '<h3>Nome: '.$user1->getNome().'</h3>';
    echo '<h3>Cognome: '.$user1->getCognome().'</h3>';
    echo '<h3>Nickname: '.$user1->getNickname().'</h3>';
    echo '<h3>Email: '.$user1->getEmail().'</h3>';

    $string = $user1->getPassword();
    $length = strlen($string);
    
    for ($i = 0; $i < $length; $i++) {
        $string[$i] = "*";
    }

    echo '<h3>Password: '.$string.'</h3>';

    //User 3

    echo '<h1 style="text-align: center;"> Utente con ID '. $user3->getId().'</h1>';
    echo '<h3>Nome: '.$user3->getNome().'</h3>';
    echo '<h3>Cognome: '.$user3->getCognome().'</h3>';
    echo '<h3>Nickname: '.$user3->getNickname().'</h3>';
    echo '<h3>Email: '.$user3->getEmail().'</h3>';

    $string = $user3->getPassword();
    $length = strlen($string);
    
    for ($i = 0; $i < $length; $i++) {
        $string[$i] = "*";
    }

    echo '<h3>Password: '.$string.'</h3>';

    //User 5
    echo '<h1 style="text-align: center;"> Utente con ID '. $user5->getId().'</h1>';
    echo '<h3>Nome: '.$user5->getNome().'</h3>';
    echo '<h3>Cognome: '.$user5->getCognome().'</h3>';
    echo '<h3>Nickname: '.$user5->getNickname().'</h3>';
    echo '<h3>Email: '.$user5->getEmail().'</h3>';

    $string = $user5->getPassword();
    $length = strlen($string);
    
    for ($i = 0; $i < $length; $i++) {
        $string[$i] = "*";
    }

    echo '<h3>Password: '.$string.'</h3>';

    ?>
</body>
</html>