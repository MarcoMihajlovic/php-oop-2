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

    foreach($users as $user) {
        $id = $user->getId();
        if($id%2 != 1) {
        echo '<h1 style="text-align: center;"> Utente con ID '. $id.'</h1>';
        echo '<h3>Nome: '.$user->name.'</h3>';
        echo '<h3>Cognome: '.$user->cognome.'</h3>';
        echo '<h3>Nickname: '.$user->nickname.'</h3>';
        echo '<h3>Email: '.$user->email.'</h3>';

        $string = $user->getPassword();
        $length = strlen($string);
        
        for ($i = 0; $i < $length; $i++) {
            $string[$i] = "*";
        }

        echo '<h3>Password: '.$string.'</h3>';
        }

    }

?>
</body>
</html>