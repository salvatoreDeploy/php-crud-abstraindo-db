<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();

/* Sem abstração da rotina */
/*$user->first_name = "Victor";
$user->last_name = "Henrique";
$user->genre = "Masc";
$user->save();*/

/*  $address = new Address();
    $address->add($user, "Nome da Rua", "22b");
    $address->save();*/

/* Dados que podem ser capturado por request ajax */

$data = ["first_name" => "Esteve", "last_name" => "Rogers", "genre" => "Masc"];

/* Com abstração da rotina */
$user->bootstrap($data["first_name"], $data["last_name"], $data["genre"]);
$user->createUser($user);

var_dump($user);
