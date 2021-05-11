<?php

use PhpParser\Builder\Class_;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require ('counter.php');

class User {
    private $id;
    public $name;
    public $cognome;
    public $nickname;
    public $email;
    private $password;

    function __construct($counter)
    {
        $this->id = $counter->getCounterIncrement();
    }

    function getNome() {
        return $this->name;
    }

    function getCognome() {
        return $this->cognome;
    }

    function getNickname() {
        return $this->nickname;
    }

    function getEmail() {
        return $this->email;
    }

    public function getId() {
        return $this->id;
    }

    public function setPassword($stringa) {
        $this->password = $stringa;
    }

    public function getPassword() {
        return $this->password;
    }
}

$counter = new Counter();

$user1 = new User($counter);
$user1->name = 'Marco';
$user1->cognome = 'Mihajlovic';
$user1->nickname = 'Mr-Yyoso';
$user1->email = 'marco.mihajlovic@gmail.com';

$user2 = new User($counter);
$user2->name = 'Eleonora';
$user2->cognome = 'Invernizzi';
$user2->nickname = 'Lady';
$user2->email = 'eleonora.invernizzi@hotmail.com';

$user3 = new User($counter);
$user3->name = 'Francesca';
$user3->cognome = 'Ribaudo';
$user3->nickname = 'Freya';
$user3->email = 'francesca.ribaudo@gmail.com';

$user4 = new User($counter);
$user4->name = 'Chiara';
$user4->cognome = 'Mastropietro';
$user4->nickname = 'Tarja';
$user4->email = 'chiara.mastropietro@hotmail.com';

$user5 = new User($counter);
$user5->name = 'Tony';
$user5->cognome = 'Redgrave';
$user5->nickname = 'Dante';
$user5->email = 'Dante@hotmail.com';


$user1->setPassword('Sapone');
$user2->setPassword('Acqua');
$user3->setPassword('Asciugamano');
$user4->setPassword('Dentrifricio');
$user5->setPassword('Pizza Diavola');

$users = array(
    $user1,
    $user2,
    $user3,
    $user4,
    $user5
);